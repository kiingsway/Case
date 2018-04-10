<?php include ('sessaoStart.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<!-- Ícones Material Design Google -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- CSS  -->
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<!-- Deixe o browser saber que esse site serve em mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- Cor da barra de navegação do Chrome para Android -->
		<meta name="theme-color" content="#c62828">
		<!-- Título -->
		<title>Case :: by ks</title>
		<style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
	</head>
	<body>

    <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

		<!-- Breadcrumb, caminho de navegação -->
		<nav class="red lighten-1" role="navigation"> 
			<div class="nav-wrapper container">
				<a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
			</div>
		</nav>	  		
		<!-- Fim Breadcrumb, caminho de navegação -->

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

    <!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php") ?>

		<!--  Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<!-- Gatilho -->
		<script src="js/trigger.js"></script>
	</body>
</html>