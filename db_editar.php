<?php
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
				$i++;
			}
		} else $permissoes = 0;
		if (isset($_POST['cbxStatus'])) $status = 1; else $status = 0;
		$query = "UPDATE dbusuarios SET login = '$login', email = '$email', permissoes = '$permissoes', status = '$status' WHERE id = $id";
		mysqli_query($db, $query);
	}
	if (isset($_POST['btnTerminoEditarPF'])){
		echo "<script>alert('Foi')</script>";
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
?>