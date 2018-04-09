<?php include ('server.php');?>
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
	    <title>Case :: Registro</title>
	</head>
	<body>

		<!--Navegação cabeçalho-->
    <nav class="red darken-1" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" class="brand-logo"><i class="large material-icons">art_track</i>Case</a>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
    <!-- Fim navegação do cabeçalho -->

    <!-- Div Login -->
    <div class="container">
		<div class="row">
			<form class="col s12" method="POST" action="register.php">
				<div class="row">
					<div class="input-field col s8"></div>
					<div class="input-field col s4 header">
						<h2>Cadastro</h2>
					</div>
				</div>
				<!-- Validações de rrros aparecem aqui -->
				<?php include('errors.php'); ?>
				<div class="row">
					<div class="input-field col s8"></div>
					<div class="input-field col s4">
						<input type="text" name="usuario">
						<label>Usuário</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8"></div>
					<div class="input-field col s4">
						<input type="email"" name="email">
						<label>E-mail</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8"></div>
					<div class="input-field col s4">
						<input type="password" name="senha1">
						<label>Senha</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8"></div>
					<div class="input-field col s4">
						<input type="password" name="senha2">
						<label>Confirmar Senha</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s8"></div>
					<div class="input-field col s4">
						<button type="submit" name="register" class="btn">Registre</button>						
						<a href="login.php" class="btn">Login</a>
					</div>
				</div>
    		</form>
    	</div>
    </div>
    <!-- Fim Div Login -->

		<!-- Footer ou Rodapé -->
	    <footer class="page-footer orange">
	      <div class="footer-copyright">
	        <div class="container">
	          Made by <a href="https://github.com/kiingsway" target="_blank">King Sway</a>
	        </div>
	      </div>
	    </footer>
	    <!-- Fim Footer ou Rodapé -->

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script src="js/trigger.js"></script>
	</body>
</html>