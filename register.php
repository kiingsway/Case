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
	    <title>Case :: Cadastro</title>
	    <style>
			input {color: white;}
			::placeholder {color: #e0e0e0 ;opacity: 1; /* Firefox */}
			:-ms-input-placeholder { /* Internet Explorer 10-11 */color: #e0e0e0 ;}
			::-ms-input-placeholder { /* Microsoft Edge */color: #e0e0e0 ;}
			body {display: flex;min-height: 100vh;flex-direction: column;}
      		main {flex: 1 0 auto;}
		</style>
	</head>
	<body>

		<!--Navegação cabeçalho-->
    <nav class="red darken-1" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" class="brand-logo"><i class="large material-icons">art_track</i>Case</a>
      </div>
    </nav>
    <!-- Fim navegação do cabeçalho -->

    <main>
    <!-- Login em Card -->
    <div class="container">
    	<div class="row">
    		<form class="col s12" method="POST" action="login.php">
    			<div class="col s12 m4">
    				<div class="card orange darken-2 hoverable">
    					<div class="card-content white-text input-field">
    						<span class="card-title">Cadastro</span>
    						<?php include('errors.php');?>
    						<input type="text" placeholder="Usuário" name="usuario">
    						<input type="email" placeholder="E-mail" name="email">
    						<input type="password" placeholder="Senha" name="senha1">
    						<input type="password" placeholder="Repita a senha" name="senha2">
    					</div>
    					<div class="card-action">
							<button type="submit" name="btnRegister" class="btn">Registre</button>						
							<a href="login.php" class="btn">Login</a>
    					</div>
    				</div>
    			</div>
    		</form>
    	</div>
    </div>
</main>

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