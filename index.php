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
		<style>
		.disabled {color: black; pointer-events: none;cursor: default;}
		a.right {font-size: 13px; color: orange;}
		</style>
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
		
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'dbcollege');

			if (!$db) {die(mysql_error());}

			$query1 = 'SELECT COUNT(id) AS totalPF FROM tb_pf;';
			$query2 = 'SELECT COUNT(id) AS associadosEsteMes FROM tb_pf WHERE MONTH(cadastroaqui) = MONTH(CURRENT_DATE()) AND YEAR(cadastroaqui) = YEAR(CURRENT_DATE())';
			$query3 = 'SELECT COUNT(id) AS totalCursos FROM tb_cursos;';
			$query4 = 'SELECT COUNT(id) AS cursosFuturos FROM tb_cursos WHERE dataInicial >= NOW()';

			$result1 = mysqli_query($db, $query1);
			$result2 = mysqli_query($db, $query2);
			$result3 = mysqli_query($db, $query3);
			$result4 = mysqli_query($db, $query4);

			while ($user = mysqli_fetch_assoc($result1)){$associados = $user['totalPF'];}
			while ($user = mysqli_fetch_assoc($result2)){$novosAssociados = $user['associadosEsteMes'];}
			while ($user = mysqli_fetch_assoc($result3)){$cursos = $user['totalCursos'];}
			while ($user = mysqli_fetch_assoc($result4)){$cursosFuturos = $user['cursosFuturos'];}

		?>

		<!-- Conteúdo -->
		<main><br>
			<div class="container">
				<div class="row">
			      <div class="col m3 s6">
			      	<div class="card blue-grey darken-1">
			      		<div class="card-content white-text">
			      			<p><?php echo $associados." associados"; ?></p><br>
			      			<a href="page_pf.php" class="valign-wrapper right">Pessoas físicas<i class="material-icons">arrow_forward</i></a><br>
			      		</div>
			      	</div>
			      </div>
			      <div class="col m3 s6">
			      	<div class="card blue-grey darken-1">
			      		<div class="card-content white-text">
			      			<p><?php echo $novosAssociados." novos associados este mês"; ?></p>
			      			<a href="page_pf.php" class="valign-wrapper right">Pessoas Físicas<i class="material-icons">arrow_forward</i></a><br>
			      		</div>
			      	</div>
			      </div>
			      <div class="col m3 s6">
			      	<div class="card blue-grey darken-1">
			      		<div class="card-content white-text">
			      			<p><?php echo $cursos." cursos criados"; ?></p><br>
			      			<a href="page_cursos.php" class="valign-wrapper right">Cursos<i class="material-icons">arrow_forward</i></a><br>
			      		</div>
			      	</div>
			      </div>
			      <div class="col m3 s6">
			      	<div class="card blue-grey darken-1">
			      		<div class="card-content white-text">
			      			<p><?php echo $cursosFuturos." cursos futuros"; ?></p><br>
			      			<a href="page_cursos.php" class="valign-wrapper right">Cursos<i class="material-icons">arrow_forward</i></a><br>
			      		</div>
			      	</div>
			      </div>
			    </div>
			</div>
		</main>

    <!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php"); ?>

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<!-- Gatilho -->
		<script src="js/trigger.js"></script>
	</body>
</html>