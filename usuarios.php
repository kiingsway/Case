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

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
				<a class="breadcrumb">Usuários</a>
			</div>
		</nav>	  		
		<!-- Fim Breadcrumb, caminho de navegação -->

    <!-- Carrega e insere a função de pesquisa -->
    <?php require_once ("padroes/search.php"); ?>

		<!-- Conteúdo -->
		<div class="container">
			<table id="table" class="centered">
				<tr>
					<th>Login</th>
					<th>E-mail</th>
					<th>Status</th>
					<th>Opções</th>
				</tr>

				<?php
				$idbtnStatus;
				$db = mysqli_connect('localhost', 'root', '', 'dbregistro');
				if (!$db) { die(mysql_error());}
				$user_check_query = "SELECT id, login, email, status FROM dbusuarios";
				$result = mysqli_query($db, $user_check_query);
				while ($user = mysqli_fetch_assoc($result)){  ?>
				<form method="POST" action="#">
				<tr class="hoverable">
      		<td style="font-weight: bold"><?php echo $user['login'];?></td>
      		<td><?php echo $user['email'];?></td>
      		<?php
      		if ($user['status'] == 0) {echo '<td class="center hoverable"><button name="btnStatusUsuarios" value="'.$user['id'].'" class="btn tooltipped modal-trigger hoverable red" data-tooltip="Offline"><i class="material-icons">cloud_off</i></button></td>';}
      		if ($user['status'] == 1) {echo '<td class="center hoverable"><button name="btnStatusUsuarios" value="'.$user['id'].'" class="btn tooltipped modal-trigger hoverable green" data-tooltip="Online"><i class="material-icons">cloud_done</i></button></td>';}

      		?>
      		<td class="hoverable"><a class="btn tooltipped" data-tooltip="Editar" href="#"><i class="material-icons">edit</i></a></td>
      	</tr>
      </form>
<?php } ?>
    </table>
    </div>
    <br>
		<!-- Fim conteúdo -->

  <!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php") ?>

		<!--  Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<!-- Gatilho -->
		<script src="js/trigger.js"></script>
    <script src="js/functionSearch.js"></script>
	</body>
</html>
