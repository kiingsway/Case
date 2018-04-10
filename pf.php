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
    <title>Case :: Pessoas Físicas</title>
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
      <li><a href="pf.php"><i class="material-icons icon">account_circle</i>Pessoas Física</a></li>
      <li><a href="pj.php"><i class="material-icons icon">account_box</i>Pessoas Jurídicas</a></li>
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
      <li><a href="livros.php" class="disabled"><i class="material-icons icon">book</i>Livros</a></li>
      <li><a href="inscr.php" class="disabled"><i class="material-icons icon">assignment</i>Inscrições</a></li>
      <li><a href="voucher.php" class="disabled"><i class="material-icons icon">style</i>Voucher</a></li>
    </ul>
    <ul id='dropdownFinanceiroMobile' class='dropdown-content'>
      <li><a href="pagar.php" class="disabled"><i class="material-icons icon">attach_money</i>Contas a Pagar</a></li>
      <li><a href="receber.php" class="disabled"><i class="material-icons icon">monetization_on</i>Contas a Receber</a></li>
    </ul>
    <ul id='dropdownUtilitariosMobile' class='dropdown-content'>
      <li><a href="usuarios.php"><i class="material-icons icon">assignment_ind</i>Usuários</a></li>
      <li><a href="projeto.php"><i class="material-icons icon">add_to_queue</i>Projeto</a></li>
    </ul>
    <ul id='dropdownLoginMobile' class='dropdown-content'>
      <li><a href="index.php?logout='1'"><i class="material-icons icon">exit_to_app</i>Sair</a></li>
    </ul>
    <!-- Fim Dropdown Structure Mobile-->

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a class="breadcrumb">Pessoas Físicas</a>
      </div>
    </nav>        
    <!-- Fim Breadcrumb, caminho de navegação -->

    <!-- Nav Search -->
    <nav class="red lighten-2 hoverable">
      <div class="container nav-wrapper">
        <form>
          <div class="input-field">
            <input type="search" id="searchNav" onkeyup="functionSearch()">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>
    <!-- Fim Nav Search -->

    <!-- Conteúdo em geral -->
    <br><div class="container center">
      <a class="btn-floating btn-large waves-effect waves-light red modal-trigger hoverable tooltipped" data-position="top" data-tooltip="Busca avançada" href="#modal1"><i class="material-icons">zoom_in</i></a>
      <a class="btn-floating btn-large waves-effect waves-light red hoverable tooltipped" data-position="top" data-tooltip="Marcar todos"><i class="material-icons">check_circle</i></a>
      <a class="btn-floating btn-large waves-effect waves-light red hoverable modal-trigger tooltipped" data-position="top" data-tooltip="Apagar" href="#modalApagar"><i class="material-icons">delete_forever</i></a><br><br>
        <table id="table">
          <tr>
            <th>Nome</th>
            <th>Detalhes</th>
            <th>Documentos</th>
            <th>Contato</th>
            <th>Opções</th>
          </tr>
          <!-- 0 Desligado 1 aguardando ativação 2 ativo -->
          <?php
          $db = mysqli_connect('localhost', 'root', '', 'dbpessoas');
          if (!$db) { die(mysql_error());}
          $user_check_query = "SELECT nome, rg, cpf, nascimento, categoria, situacao, cidade, estado, telefone, celular, email, cadastroaqui FROM pf";
          $result = mysqli_query($db, $user_check_query);
          while ($user = mysqli_fetch_assoc($result)){ ?>

        <tr class="hoverable">
          <td style="font-size: 20px; font-weight: bold;"><?php echo $user['nome'] ?></td>
              <td><b>Categoria: </b><?php echo $user['categoria'] ?><br><b>Situação: </b>
            <?php if ($user['situacao'] == 0) { echo '<span data-badge-caption="Desligado" class="new badge red darken-4">'; }
            if ($user['situacao'] == 1) { echo '<span data-badge-caption="Aguardando Ativação" class="new badge orange">'; }
            if ($user['situacao'] == 2) { echo '<span data-badge-caption="Ativo" class="new badge green">'; } ?></td>
            <td><b>CPF:</b> <?php echo $user['cpf'] ?><br><b>RG: </b><?php echo $user['rg'] ?><br><b>Nascimento: </b><?php echo $user['nascimento'] ?><br><b>Cadastro aqui: </b><?php echo $user['cadastroaqui'] ?></td>
            <td><b>Cidade:</b> <?php echo $user['cidade'] ?><br><b>Telefone:</b> <?php echo $user['telefone'] ?><br><?php echo $user['celular'] ?><br><b>E-mail: </b><?php echo $user['email'] ?><br></td>
            <td class="hoverable"><a class="btn tooltipped" data-tooltip="Editar" href="#"><i class="material-icons">edit</i></a>
              <a class="btn tooltipped" data-tooltip="Acessar estação" href="#"><i class="material-icons">open_in_browser</i></a></td>
          </tr>

          
        </tr>
      <?php   
      }
      ?>
        </table>
        
    </div>
    <!-- Fim conteúdo -->

    <!-- Modal Structure, para buscas avançadas -->
    <div id="modal1" class="modal"><div class="modal-content"><div class="row">
      <form class="col s12"><div class="row">
        <div class="input-field col s6">
          <input id="txtNome" type="text" class="validate">
          <label for="txtNome">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="txtEmail" type="email" class="validate">
          <label for="txtEmail">E-mail</label>
        </div></div>
        <div class="row">
          <div class="input-field col s6">
            <input id="txtRG" type="number" class="validate">
            <label for="txtRG">RG</label>
          </div>
          <div class="input-field col s6">
            <input id="txtCPF" type="number" class="validate">
            <label for="txtCPF">CPF</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select multiple>
              <option value="" disabled selected>Situação</option>
              <option value="1">Ativo</option>
              <option value="2">Aguardando Ativação</option>
              <option value="3">Correspondente</option>
              <option value="4">Desligado</option>
            </select>
          </div>
          <div class="input-field col s12">
            <select multiple>
              <option value="" disabled selected>Categoria</option>
              <optgroup label="Sócio">
                <option value="1">Aperfeiçoando</option>
                <option value="2">Aspirante</option>
                <option value="3">Coligado</option>
                <option value="4">Residente</option>
                <option value="4">Titular</option>
              </optgroup>
              <optgroup label="Não sócio">
                <option value="1">Estudante de Medicina</option>
                <option value="2">Entidades Parceiras</option>
                <option value="3">Médico</option>
                <option value="4">Residente</option>
                <option value="4">Técnico e Tecnólogo em Radiologia</option>
                <option value="4">Físicos, Biólogos, Radiofarmacêuticos,Químicos e Biomédicos em Radiologia</option>
              </optgroup>
            </select>
          </div>
        </div><br><br>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">search</i>Buscar</a>
    </div>
	</div>
</div>
<!-- Fim Modal Structure, para buscas avançadas -->

<!-- Modar Apagar -->
<div id="modalApagar" class="modal"><div class="modal-content"><div class="row">
  <div class="input-field col s12"><p style="color: black">Deseja apagar esses usuários?</p></div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">done</i></a>
  </div>
	</div></div></div>
  <!-- Fim Modar Apagar -->


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
  <script src="js/functionSearch.js"></script>
  
</body>
</html>