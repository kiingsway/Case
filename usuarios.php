<?php 
  session_start(); 

  if (!isset($_SESSION['usuario'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['usuario']);
  	header("location: login.php");
  }
?>
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
	</head>
	<body>
		<!--Navegação cabeçalho-->
		<nav class="red darken-1" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" class="brand-logo"><i class="large material-icons">art_track</i>Case</a>
				<ul id="navSite" class="right hide-on-med-and-down">
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownPessoas">Pessoas<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownAtividades">Atividades<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownFinanceiro">Financeiro<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownUtilitarios">Utilitários<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<?php  if (isset($_SESSION['usuario'])) : ?>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownLogin"><?php echo $_SESSION['usuario']; ?><i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<?php endif ?>
				</ul>
				<ul id="nav-mobile" class="sidenav">
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownPessoasMobile">Pessoas<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownAtividadesMobile">Atividades<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownFinanceiroMobile">Financeiro<i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownUtilitariosMobile">Utilitários<i class="material-icons arrow right">arrow_drop_down</i></a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		<!-- Fim navegação do cabeçalho -->

		<!-- Dropdown Structure PC-->
		<ul id='dropdownPessoas' class='dropdown-content'>
			<li><a class="link" href="pf.html"><i class="material-icons icon">account_circle</i>Pessoas Física</a></li>
			<li><a href="pj.html"><i class="material-icons icon">account_box</i>Pessoas Jurídicas</a></li>
		</ul>
		<ul id='dropdownAtividades' class='dropdown-content'>
			<li><a href="cursos.html"><i class="material-icons icon">event_note</i>Cursos</a></li>
			<li><a href="livros.html"><i class="material-icons icon">book</i>Livros</a></li>
			<li><a href="inscr.html"><i class="material-icons icon">assignment</i>Inscrições</a></li>
			<li><a href="voucher.html"><i class="material-icons icon">style</i>Voucher</a></li>
		</ul>
		<ul id='dropdownFinanceiro' class='dropdown-content'>
			<li><a href="pagar.html"><i class="material-icons icon">attach_money</i>Contas a Pagar</a></li>
			<li><a href="receber.html"><i class="material-icons icon">monetization_on</i>Contas a Receber</a></li>
		</ul>
		<ul id='dropdownUtilitarios' class='dropdown-content'>
			<li><a href="usuarios.html"><i class="material-icons icon">assignment_ind</i>Usuários</a></li>
			<li><a href="projeto.html"><i class="material-icons icon">add_to_queue</i>Projeto</a></li>
		</ul>
		<ul id='dropdownLogin' class='dropdown-content'>
			<li><a href="#"><i class="material-icons icon">exit_to_app</i>Sair</a></li>
		</ul>
		<!-- Fim Dropdown Structure PC -->

		<!-- Dropdown Structure Mobile-->
		<ul id='dropdownPessoasMobile' class='dropdown-content'>
			<li><a href="pf.html"><i class="material-icons icon">account_circle</i>Pessoas Física</a></li>
			<li><a href="pj.html"><i class="material-icons icon">account_box</i>Pessoas Jurídicas</a></li>
		</ul>
		<ul id='dropdownAtividadesMobile' class='dropdown-content'>
			<li><a href="cursos.html"><i class="material-icons icon">event_note</i>Cursos</a></li>
			<li><a href="livros.html"><i class="material-icons icon">book</i>Livros</a></li>
			<li><a href="inscr.html"><i class="material-icons icon">assignment</i>Inscrições</a></li>
			<li><a href="voucher.html"><i class="material-icons icon">style</i>Voucher</a></li>
		</ul>
		<ul id='dropdownFinanceiroMobile' class='dropdown-content'>
			<li><a href="pagar.html"><i class="material-icons icon">attach_money</i>Contas a Pagar</a></li>
			<li><a href="receber.html"><i class="material-icons icon">monetization_on</i>Contas a Receber</a></li>
		</ul>
		<ul id='dropdownUtilitariosMobile' class='dropdown-content'>
			<li><a href="usuarios.html"><i class="material-icons icon">assignment_ind</i>Usuários</a></li>
			<li><a href="projeto.html"><i class="material-icons icon">add_to_queue</i>Projeto</a></li>
		</ul><!-- Fim Dropdown Structure Mobile-->

		<!-- Breadcrumb, caminho de navegação -->
		<nav class="red lighten-1" role="navigation"> 
			<div class="nav-wrapper container">
				<a href="index.html" class="breadcrumb">Home</a>
				<a href="index.html" class="breadcrumb">Usuários</a>
			</div>
		</nav>	  		
		<!-- Fim Breadcrumb, caminho de navegação -->

		<!-- Conteúdo -->
		    <div class="container">
    <table cellpadding="1">
      <tr class="hoverable">
        <th>Login</th>
        <th>E-mail</th>
        <th>Status</th>
        <th>Opções</th>
      </tr>
      <?php
      $db = mysqli_connect('localhost', 'root', '', 'dbregistro');
      if (!$db) { die(mysql_error());}
      $user_check_query = "SELECT login, email, status FROM dbusuarios";
      $result = mysqli_query($db, $user_check_query);
      while ($user = mysqli_fetch_assoc($result)){ ?>
      	<tr class="hoverable">
      		<td><?php echo $user['login']?></td>
      		<td><?php echo $user['email']?></td>
      		<?php
      		if ($user['status'] == 0) { echo '<td class="center hoverable"><a class="btn tooltipped red" data-tooltip="Offline" href="#"><i class="material-icons">cloud_off</i></a></td>';}
      		if ($user['status'] == 1) { echo '<td class="center hoverable"><a class="btn tooltipped green" data-tooltip="Online" href="#"><i class="material-icons">cloud_done</i></a></td>';}
      		?>
      		<td class="hoverable"><a class="btn tooltipped" data-tooltip="Editar" href="#"><i class="material-icons">edit</i></a></td>
      	</tr>
      <?php 	
      }
      ?>
    </table>
    </div>






		<!-- Fim conteúdo -->

		<!--Footer, Rodapé-->
		<footer class="page-footer orange">
			<div class="footer-copyright">
				<div class="container">
					Made by <a href="https://github.com/kiingsway" target="_blank">King Sway</a>
				</div>
			</div>
		</footer>

		<!--  Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<!-- Gatilho -->
		<script src="js/trigger.js"></script>
	</body>
</html>
