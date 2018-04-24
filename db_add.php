<?php
	if (isset($_POST['btnProjeto'])) {		
	$funcao = $_POST['txtFuncao'];
	$db = mysqli_connect('localhost', 'root', '', 'dbregistro');
	$query = "INSERT INTO tbprojetos (funcao, criadoem) VALUES ('$funcao', now())";
	mysqli_query($db, $query) or die('Erro: '.mysqli_error($db));
	header('location: projeto.php');
	}

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
			header("Location: pj.php");
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
			header("Location: pf.php");
		}
?>