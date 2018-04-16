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
				<a href="usuarios.php" class="breadcrumb">Usuários</a>
			</div>
		</nav>	  		
		<!-- Fim Breadcrumb, caminho de navegação -->

		<!-- Conteúdo -->
		<?php
		$db = mysqli_connect('localhost', 'root', '', 'dbregistro');
		if (!$db) { die(mysql_error());}
		$user_check_query = "SELECT id, login, email, permissoes, status FROM dbusuarios WHERE id=".$_POST['btnEditarUsuario'];
				$result = mysqli_query($db, $user_check_query);
				while ($user = mysqli_fetch_assoc($result)){ 
					$permissoes = explode(',',$user['permissoes']);
					?>				

						<!-- Conteúdo -->
		<!--DIV do conteúdo-->
	<div class="container center">
		<div class="row">
			<form method="POST" action="#" class="col s12">
				<div class="row">
					<div class="input-field col s1">
						<input disabled type="text" name="txtId" value=<?php echo $user['id'] ?> class="ative">
						<label>id</label>
					</div>
					<div class="input-field col s3 hoverable">
						<input type="text" name="txtLogin" value=<?php echo $user['login'] ?> class="ative">
						<label>Login</label>
					</div>
					<div class="input-field col s2 hoverable">
						<input type="password" name="txtSenha1" class="ative">
						<label>Senha</label>
					</div>
					<div class="input-field col s2 hoverable">
						<input type="password" name="txtSenha2" class="ative">
						<label>Repita a senha</label>
					</div>
					<div class="input-field col s4 hoverable">
						<input type="text" name="txtEmail" value=<?php echo $user['email'] ?> class="ative">
						<label>E-mail</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<table>
							<tr>
								<th colspan="2" style="color: black">
									Pessoas
								</th>
								<th colspan="2" style="color: black">
									Permissões
								</th>
								</tr>
								<tr>
									<td colspan="2" class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="1" <?php if (in_array("1", $permissoes)) echo 'checked' ?> /><span>Pessoa Física</span></label></td>
									<td colspan="2" class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="2" <?php if (in_array("2", $permissoes)) echo 'checked' ?>/><span>Pessoa Jurídica</span></label></td>
								</tr>
								<tr>
								<th colspan="4" style="color: black">
									Atividades
								</th>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="3" <?php if (in_array("3", $permissoes)) echo 'checked' ?>/><span>Cursos</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="4" <?php if (in_array("4", $permissoes)) echo 'checked' ?>/><span>Livros</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="5" <?php if (in_array("5", $permissoes)) echo 'checked' ?>/><span>Inscrições</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="6" <?php if (in_array("6", $permissoes)) echo 'checked' ?>/><span>Voucher</span></label></td>
								</tr>
								<tr>
								<th colspan="4" style="color: black">
									Financeiro
								</th>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="7" <?php if (in_array("7", $permissoes)) echo 'checked' ?>/><span>Contas a Pagar</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="8" <?php if (in_array("8", $permissoes)) echo 'checked' ?>/><span>Contas a Receber</span></label></td>
								</tr>
								<tr>
								<th colspan="4" style="color: black">
									Utilitários
								</th>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="9" <?php if (in_array("9", $permissoes)) echo 'checked' ?>/><span>Usuários</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="10" <?php if (in_array("10", $permissoes)) echo 'checked' ?>/><span>Projetos</span></label></td>
								</tr>
						</table>
					</div>

							 <!-- Switch -->
						  <div class="switch">
						  	Status: 
						    <label>
						      Off
						      <input name="swcStatus" value="1" type="checkbox">
						      <span class="lever"></span>
						      On
						    </label>
						  </div>

						</div>
						<br>
						<div>
							<button class="waves-effect waves-light btn-large" type="submit" name="btnCriarCurso"><i class="material-icons">edit</i>Editar usuário</button>
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