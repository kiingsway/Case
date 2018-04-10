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
					<?php  if (isset($_SESSION['usuario'])) : ?>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownLoginMobile"><?php echo $_SESSION['usuario']; ?><i class="material-icons arrow right">arrow_drop_down</i></a></li>
					<?php endif ?>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		<!-- Fim navegação do cabeçalho -->

		<!-- Dropdown Structure PC-->
		<ul id='dropdownPessoas' class='dropdown-content'>
			<li><a class="link" href="pf.php" class="disabled" style="color:grey"><i class="material-icons icon">account_circle</i>Pessoas Física</a></li>
			<li><a href="pj.php" class="disabled" style="color:grey"><i class="material-icons icon">account_box</i>Pessoas Jurídicas</a></li>
		</ul>
		<ul id='dropdownAtividades' class='dropdown-content'>
			<li><a href="cursos.php"><i class="material-icons icon">event_note</i>Cursos</a></li>
			<li><a href="livros.php" class="disabled" style="color:grey"><i class="material-icons icon">book</i>Livros</a></li>
			<li><a href="inscr.php" class="disabled" style="color:grey"><i class="material-icons icon">assignment</i>Inscrições</a></li>
			<li><a href="voucher.php" class="disabled" style="color:grey"><i class="material-icons icon">style</i>Voucher</a></li>
		</ul>
		<ul id='dropdownFinanceiro' class='dropdown-content'>
			<li><a href="pagar.php" class="disabled" style="color:grey"><i class="material-icons icon">attach_money</i>Contas a Pagar</a></li>
			<li><a href="receber.php" class="disabled" style="color:grey"><i class="material-icons icon">monetization_on</i>Contas a Receber</a></li>
		</ul>
		<ul id='dropdownUtilitarios' class='dropdown-content'>
			<li><a href="usuarios.php"><i class="material-icons icon">assignment_ind</i>Usuários</a></li>
			<li><a href="projeto.php"><i class="material-icons icon">add_to_queue</i>Projeto</a></li>
		</ul>
		<ul id='dropdownLogin' class='dropdown-content'>
			<li><a href="index.php?logout='1'"><i class="material-icons icon">exit_to_app</i>Sair</a></li>
		</ul>
		<!-- Fim Dropdown Structure PC -->

		<!-- Dropdown Structure Mobile-->
		<ul id='dropdownPessoasMobile' class='dropdown-content'>
			<li><a href="pf.php"><i class="material-icons icon">account_circle</i>Pessoas Física</a></li>
			<li><a href="pj.php"><i class="material-icons icon">account_box</i>Pessoas Jurídicas</a></li>
		</ul>
		<ul id='dropdownAtividadesMobile' class='dropdown-content'>
			<li><a href="cursos.php"><i class="material-icons icon">event_note</i>Cursos</a></li>
			<li><a href="livros.php"><i class="material-icons icon">book</i>Livros</a></li>
			<li><a href="inscr.php"><i class="material-icons icon">assignment</i>Inscrições</a></li>
			<li><a href="voucher.php"><i class="material-icons icon">style</i>Voucher</a></li>
		</ul>
		<ul id='dropdownFinanceiroMobile' class='dropdown-content'>
			<li><a href="pagar.php"><i class="material-icons icon">attach_money</i>Contas a Pagar</a></li>
			<li><a href="receber.php"><i class="material-icons icon">monetization_on</i>Contas a Receber</a></li>
		</ul>
		<ul id='dropdownUtilitariosMobile' class='dropdown-content'>
			<li><a href="usuarios.php"><i class="material-icons icon">assignment_ind</i>Usuários</a></li>
			<li><a href="projeto.php"><i class="material-icons icon">add_to_queue</i>Projeto</a></li>
		</ul>
		<ul id='dropdownLogin' class='dropdown-content'>
			<li><a href="index.php?logout='1'"><i class="material-icons icon">exit_to_app</i>Sair</a></li>
		</ul>
		<!-- Fim Dropdown Structure Mobile-->

		<!-- Breadcrumb, caminho de navegação -->
		<nav class="red lighten-1" role="navigation"> 
			<div class="nav-wrapper container">
				<a href="index.html" class="breadcrumb"><i class="material-icons">home</i>Home</a>
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