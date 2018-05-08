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
		<title>Case :: by ks</title>
		<style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
	</head>
	<body>

    <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

		<?php
		$db = mysqli_connect('localhost', 'root', '', 'dbcollege');
		if (!$db) { die(mysql_error());}
		$user_check_query = "SELECT id, funcao, implementada, criadoem, implementadaem FROM tb_projetos WHERE id=".$_POST['btnEditProjeto'];
				$result = mysqli_query($db, $user_check_query);
				while ($user = mysqli_fetch_assoc($result)){ 
					$funcaoProjeto = $user['funcao']
					
					?>

		<!-- Breadcrumb, caminho de navegação -->
		<nav class="red lighten-1" role="navigation"> 
			<div class="nav-wrapper container">
				<a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
				<a href="projeto.php" class="breadcrumb">Projetos</a>
				<a class="breadcrumb">Editando: <div class="chip red darken-1"><?php echo $funcaoProjeto; ?></div></a>
			</div>
		</nav>	  		
		<!-- Fim Breadcrumb, caminho de navegação -->

		<!-- Conteúdo -->
		<!--DIV do conteúdo-->
		<br>
	<div class="container center">
		<div class="row">
			<form method="POST" action="usuarios.php" class="col s12">
				<div class="row">
					<div class="input-field col s1">
						<input disabled type="text" name="txtId" value=<?php echo "'".$user['id']."'"; ?> class="ative">
						<label>id</label>
					</div>
					<div class="input-field col s11 hoverable">
						<input type="text" name="txtFuncao" value=<?php echo "'".$funcaoProjeto."'"; ?> >
						<label>Função</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s2">
						<input type="text" class="datepicker">
						<label>Criado em</label>
					</div>
					<div class="input-field col s2">
						<input type="text" class="datepicker">
						<label>Implementado em</label>
					</div>
					<div class="input-field col s2">
						<input type="checkbox" name="cbxStatus" class="filled-in" <?php if ($user['implementada']) echo 'checked';?>>
						<span>Implementado</span>
					</div>

						</div>
						<br>
						<div>
							<button class="waves-effect waves-light btn-large" type="submit" name="btnEditarProjeto" value=<?php echo $user['id'] ?>><i class="material-icons">edit</i>Editar usuário</button>
						</div>
				</div>
			</form>
		</div>
	</div>
		<?php } ?>

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