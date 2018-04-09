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
	if (isset($_POST['register'])) {
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

			$senha = md5($senha);
			$query = "SELECT * FROM dbusuarios WHERE login='$usuario' AND senha='$senha'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				
				$_SESSION['usuario'] = $usuario;
				$_SESSION['success'] = "You are now logged in";


				header('location: index.php');
			}else {
				array_push($errors, "Usuário ou senha incorretos");
			}
		}
	}
?>