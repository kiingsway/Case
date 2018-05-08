<?php include ('server.php');?>
<?php include ('db_editar.php');?>

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

    	<main>
		<!-- Conteúdo -->
		<div class="container" style="overflow-x:auto;">
			<table id="table" class="centered">
				<tr>
					<th>Login</th>
					<th>E-mail</th>
					<th>Permissões</th>
					<th>Status</th>
					<th>Opções</th>
				</tr>

				<?php
				$idbtnStatus;
				$db = mysqli_connect('localhost', 'root', '', 'dbcollege');
				if (!$db) {die(mysql_error());}
				$user_check_query = "SELECT id, login, email, permissoes, status FROM tb_users";
				$result = mysqli_query($db, $user_check_query);
				while ($user = mysqli_fetch_assoc($result)){  ?>
				<form method="POST" action="#">
				<tr class="hoverable">
      		<td style="font-weight: bold"><?php echo $user['login'];?></td>
      		<td><?php echo $user['email'];?></td>
      		<td><?php
                $perms = array('Sem permissões','Pessoas Física','Pessoas Jurídicas','Cursos','Livros','Inscrições','Voucher','Contas a Pagar','Contas a Receber',' Usuários','Projeto');
                $permissoes = explode(',',$user['permissoes']);

                foreach ($permissoes as &$value) {
                  echo '<span data-badge-caption="'.$perms[$value].'" class="new badge red darken-1"></span> ';
                  if ($value%2 == 0) echo "<br>";
                }
                ?>
            </td>
      		<?php
      		if ($user['status'] == 0) {echo '<td class="center hoverable"><button name="btnStatusUsuarios" value="'.$user['id'].'" class="btn tooltipped modal-trigger hoverable red" data-tooltip="Offline"><i class="material-icons">cloud_off</i></button></td>';}
      		if ($user['status'] == 1) {echo '<td class="center hoverable"><button name="btnStatusUsuarios" value="'.$user['id'].'" class="btn tooltipped modal-trigger hoverable green" data-tooltip="Online"><i class="material-icons">cloud_done</i></button></td>';}

      		?>
      		</form>
      		<form method="POST" action="edit_usuario.php">
      		<td class="hoverable"><button class="btn tooltipped" data-tooltip="Editar" name="btnEditar" <?php echo 'value="'.$user['id'].'"' ?>><i class="material-icons">edit</i></button></td>
      		</form>
      	</tr>
<?php } ?>
    </table>
    </div>
    <br>
		<!-- Fim conteúdo -->
	</main>

  <!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php"); ?>

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<!-- Gatilho -->
		<script src="js/trigger.js"></script>
    <script src="js/functionSearch.js"></script>
	</body>
</html>
