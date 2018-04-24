<?php

	session_start();

	//Inicializando variáveis
	$usuario = "";
	$email = "";
	$errors = array();
	$_SESSION['success'] = "";

	// Conectando ao banco
	$db = mysqli_connect('localhost', 'root', '', 'dbregistro');


	// Quando o botão Registrar é clicado
	if (isset($_POST['btnRegister'])) {
		//Registre todos os valores do form nas variáveis
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$senha1 = $_POST['senha1'];
		$senha2 = $_POST['senha2'];

	// Dando certeza que os campos estão enchidos
		if (empty($usuario)) {array_push($errors, "Campo de login obrigatório");}
		if (empty($email)) {array_push($errors, "Campo de email obrigatório");}
		if (empty($senha1)) {array_push($errors, "Campo de senha obrigatório");}
		if ($senha1 != $senha2) {array_push($errors, "Senhas não conferem");}

		$user_check_query = "SELECT * FROM dbusuarios WHERE login='$usuario' OR email='$email' LIMIT 1";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		  if ($user) { // if user exists
		    if ($user['usuario'] === $usuario) {
		      array_push($errors, "Usuário já utilizado");
		    }

		    if ($user['email'] === $email) {
		      array_push($errors, "E-mail já utilizado");
		    }
		  }

		if (count($errors) == 0) {
			$senha = md5($senha1); // Encripta a senha antes de armazenar no banco
			$sql = "INSERT INTO dbusuarios (login, email, senha) VALUES ('$usuario', '$email', '$senha')";
			mysqli_query($db, $sql);
			$_SESSION['usuario'] = $usuario;
			$_SESSION['sucesso'] = "Você está logado";
			header('location: index.php');
		}
	}

	// LOGIN USER

	if (isset($_POST['btnLogin'])) {

		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		if (empty($usuario)) {
			array_push($errors, "Insira seu usuário");
		}
		if (empty($senha)) {
			array_push($errors, "Insira sua senha");
		}
		
		
		if (count($errors) == 0) {

			/*$query = "SELECT login, email, status FROM dbusuarios";
      		$result = mysqli_query($db, $query);*/

			$senha = md5($senha);
			$query = "SELECT * FROM dbusuarios WHERE login='$usuario' AND senha='$senha'";
			$results = mysqli_query($db, $query);
			$user = mysqli_fetch_assoc($results);

			if (mysqli_num_rows($results) == 1 && $user['status'] == 1) {
				
				$_SESSION['usuario'] = $usuario;
				$_SESSION['success'] = "Você está logado!";


				header('location: index.php');
			} else if ($user['status'] === '0') {array_push($errors, "Seu usuário está desativado"); }
			else { array_push($errors, "Usuário ou senha incorretos"); }
		}
	}

	// INSERT

	if (isset($_POST['btnCriarCurso'])) {
		$i = 0;
		$categorias="";
		$nomeCurso = $_POST['txtNomeCurso'];
		$localCurso = $_POST['optLocalCurso'];
		$dataInicial = $_POST['txtDataInicial'];
		$horaInicial = $_POST['txtHoraInicial'];
		$dataFinal = $_POST['txtDataFinal'];
		$horaFinal = $_POST['txtHoraFinal'];
		$vagas = $_POST['txtVagas'];
		$cargaHoraria = $_POST['txtCargaHoraria'];
		$freqMinima = $_POST['txtFreqMinima'];
		$cbxcategorias = $_POST['cbxCategorias'];
		foreach ($cbxcategorias as $valor) {
			if($i == 0) $categorias = $valor;
			else $categorias .= ','.$valor;
			$i++;
		}
		$valor = $_POST['txtValor'];
		$valorSocio = $_POST['txtValorSocio'];
		$valorParceiro = $_POST['txtValorParceiro'];
		$valorNaoQuite = $_POST['txtValorNaoQuite'];
		$tipoVencimento = $_POST['optTipoVencimento'];
		//1 - Fixo; 2 - Inscrição; 3 - Inscrição + n dias; 4- Inscrição + n dias com limite
		$vencimento = $_POST['txtVencimento'];
		$ndias = $_POST['txtNdias'];
		$status = $_POST['swcStatus'];
		if ($status == null) $status = 0;

		$db = mysqli_connect('localhost', 'root', '', 'dbatividades');
		$query = "INSERT INTO tbcursos (nomeCurso, localCurso, dataInicial, horaInicial, dataFinal, horaFinal, vagas, cargaHoraria, freqMinima, categorias, valor, valorSocio, valorParceiro, valorNaoQuite, tipoVencimento, vencimento, ndias, status) VALUES ('$nomeCurso', '$localCurso', '$dataInicial', '$horaInicial', '$dataFinal', '$horaFinal', '$vagas', '$cargaHoraria', '$freqMinima', '$categorias', '$valor', '$valorSocio', '$valorParceiro', '$valorNaoQuite', '$tipoVencimento', '$vencimento', '$ndias', '$status')";

			mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
			header('location: cursos.php');
		}
		// INSERT PROJETO

		if (isset($_POST['btnImplementado'] )) {
			$idBtn = $_POST['btnImplementado'];
			$statusImplementada = "";
			$db = mysqli_connect('localhost', 'root', '', 'dbregistro');
			$query = "SELECT implementada FROM tbprojetos WHERE id = ".$_POST['btnImplementado'].";";
			$results = mysqli_query($db, $query);
			$user = mysqli_fetch_assoc($results);
			if ($user['implementada'] == '0') $statusImplementada ='1';
			else $statusImplementada = '0';
			$query = "UPDATE tbprojetos
			SET implementada = '".$statusImplementada."'
			WHERE id = '".$idBtn."';";
			mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
		}



		if (isset($_POST['btnProjeto'])) {
		
		$funcao = $_POST['txtFuncao'];
		

		$db = mysqli_connect('localhost', 'root', '', 'dbregistro');

		$query = "INSERT INTO tbprojetos (funcao, criadoem) VALUES ('$funcao', now())";

			mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
			header('location: projeto.php');
		}



		if (isset($_POST['btnStatusUsuarios'])) {

			$db = mysqli_connect('localhost', 'root', '', 'dbregistro');
			$query = "SELECT status FROM dbusuarios WHERE id = ".$_POST['btnStatusUsuarios'].";";
			$results = mysqli_query($db, $query);
			$user = mysqli_fetch_assoc($results);
			if ($user['status'] == '0') $statusUsuario ='1';
			else $statusUsuario = '0';
			$query = "UPDATE dbusuarios
			SET status = '".$statusUsuario."'
			WHERE id = '".$_POST['btnStatusUsuarios']."';";
			mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
		}



		if (isset($_POST['btnEditarUsuario'])) {
			$db = mysqli_connect('localhost', 'root', '', 'dbregistro');
			$id = $_POST['btnEditarUsuario'];
			$login = $_POST['txtLogin'];
			$email = $_POST['txtEmail'];
			
			if (isset($_POST['cbxPermissoes'])) {
				$cbxPermissoes = $_POST['cbxPermissoes'];
				foreach ($cbxPermissoes as $i => $valor) {
				if($i == 0) $permissoes = $valor;
				else $permissoes .= ','.$valor;
			$i++;}
			} else $permissoes = 0;
			if (isset($_POST['cbxStatus'])) $status = 1; else $status = 0;
			$query = "UPDATE dbusuarios SET login = '$login', email = '$email', permissoes = '$permissoes', status = '$status' WHERE id = $id";
			mysqli_query($db, $query);
		}

		if (isset($_POST['btnAddAssociado'])) {
			$db = mysqli_connect('localhost', 'root', '', 'dbpessoas');
			$nomePF = $_POST['txtNomePF'];
			$RGPF = $_POST['txtRGPF'];
			$CPFPF = $_POST['txtCPFPF'];
			$nascimentoPF = $_POST['txtNascimentoPF'];
			$cidadePF = $_POST['txtCidadePF'];
			$estadoPF = $_POST['txtEstadoPF'];
			$telefonePF = $_POST['txtTelefonePF'];
			$celularPF = $_POST['txtCelularPF'];
			$emailPF = $_POST['txtEmailPF'];
			$categoriaPF = $_POST['cbCategoriaPF'];
			$situacaoPF = $_POST['cbSituacaoPF'];
			$senhaPF = md5($_POST['txtSenhaPF']);

			$query = "INSERT INTO pf (nome, rg, cpf, nascimento, categoria, situacao, cidade, estado, telefone, celular, email, senha, cadastroaqui) VALUES ('".$nomePF."', '".$RGPF."', '".$CPFPF."', '".$nascimentoPF."', '".$categoriaPF."', '".$situacaoPF."', '".$cidadePF."', '".$estadoPF."', '".$telefonePF."', '".$celularPF."', '".$emailPF."', '".$senhaPF."', NOW())";
			mysqli_query($db, $query);
		}

		if (isset($_POST['btnAddAssociadoPJ'])) {
			$db = mysqli_connect('localhost', 'root', '', 'dbpessoas');
			$nomeFantasiaPJ = $_POST['txtNomeFantasiaPJ'];
			$razaoSocialPJ = $_POST['txtRazaoSocialPJ'];
			$CNPJPJ = $_POST['txtCNPJPJ'];
			$cidadePJ = $_POST['txtCidadePJ'];
			$estadoPJ = $_POST['txtEstadoPJ'];
			$telefonePJ = $_POST['txtTelefonePJ'];
			$celularPJ = $_POST['txtCelularPJ'];
			$emailPJ = $_POST['txtEmailPJ'];
			$sitePJ = $_POST['txtSitePJ'];
			$senhaPJ = md5($_POST['txtSenhaPJ']);
			if (isset($_POST['cbxSituacaoPJ'])) $situacaoPJ = 1; else $situacaoPJ = 0;
			//echo $situacaoPJ . "<br>";

			$query = "INSERT INTO pj (nome_fantasia, razao_social, cnpj, cidade, estado, telefone1, telefone2, email, site, senha, situacao, cadastroaqui) VALUES ('".$nomeFantasiaPJ."', '".$razaoSocialPJ."', '".$CNPJPJ."', '".$cidadePJ."', '".$estadoPJ."', '".$telefonePJ."', '".$celularPJ."', '".$emailPJ."', '".$sitePJ."', '".$senhaPJ."', '".$situacaoPJ."', NOW())";

			mysqli_query($db, $query);
		}

		if (isset($_POST['btnTerminoEditarPF'])){
			$db = mysqli_connect('localhost','root','','dbpessoas');
			$query = "UPDATE pf SET nome = '".$_POST['txtNomePF']."',
			rg = '".$_POST['txtRGPF']."',
			cpf = '".$_POST['txtCPFPF']."',
			nascimento = '".$_POST['txtNascimentoPF']."',
			categoria = '".$_POST['cbCategoriaPF']."',
			situacao = '".$_POST['cbSituacaoPF']."',
			cidade = '".$_POST['txtCidadePF']."',
			estado = '".$_POST['txtEstadoPF']."',
			telefone = '".$_POST['txtTelefonePF']."',
			celular = '".$_POST['txtCelularPF']."',
			email = '".$_POST['txtEmailPF']."',
			senha = '".md5($_POST['txtSenhaPF'])."'
			WHERE id = '".$_POST['txtId']."'";
			mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
			header("Location: pf.php");exit;
		}
		
		if (isset($_POST['btnTerminoEditarPJ'])){
			if($_POST['cbxSituacaoPJ'] == 'on') $situacaoPJ = 1;
			else $situacaoPJ = 0;
			$db = mysqli_connect('localhost','root','','dbpessoas');
			$query = "UPDATE pj SET nome_fantasia = '".$_POST['txtNomeFantasiaPJ']."',
			razao_social = '".$_POST['txtRazaoSocialPJ']."',
			cnpj = '".$_POST['txtCNPJPJ']."',
			situacao = '".$situacaoPJ."',
			cidade = '".$_POST['txtCidadePJ']."',
			estado = '".$_POST['txtEstadoPJ']."',
			telefone1 = '".$_POST['txtTelefonePJ']."',
			telefone2 = '".$_POST['txtCelularPJ']."',
			email = '".$_POST['txtEmailPJ']."',
			site = '".$_POST['txtSitePJ']."',
			senha = '".md5($_POST['txtSenhaPF'])."'
			WHERE id = '".$_POST['txtId']."'";
			echo $query;
			mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
			header("Location: pj.php");exit;
		}

?>

