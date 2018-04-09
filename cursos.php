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
    <title>Case :: Cursos</title>
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
      <li><a href="projeto.php" class="disabled" style="color:grey"><i class="material-icons icon">add_to_queue</i>Projeto</a></li>
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
        <a href="index.html" class="breadcrumb">Cursos</a>
      </div>
    </nav>        
    <!-- Fim Breadcrumb, caminho de navegação -->

    <!-- Nav Search -->
    <nav class="red lighten-2 hoverable">
      <div class="container nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>
    <!-- Fim Nav Search -->

    <!-- Conteúdo em geral -->
    <br><div class="container center">
      <a class="waves-effect waves-light btn-large" href="criarcurso.html"><i class="material-icons left">add</i>Criar curso</a>
      <a class="btn-floating btn-large waves-effect waves-light red modal-trigger hoverable" href="#modal1"><i class="material-icons">zoom_in</i></a>
      <a class="btn-floating btn-large waves-effect waves-light red hoverable"><i class="material-icons">check_circle</i></a>
      <a class="btn-floating btn-large waves-effect waves-light red hoverable modal-trigger" href="#modalApagar"><i class="material-icons">delete_forever</i></a><br>
        <table cellpadding="1">
          <tr class="hoverable">
            <th>Identificação</th>
            <th>Valores</th>
            <th>Detalhes</th>
            <th class="tooltipped" data-tooltip="<span data-badge-caption='Sócio' class='new badge light-blue darken-1'></span> <span data-badge-caption='Não Sócio' class='new badge orange darken-1'></span>">Categorias  <i class="tiny material-icons">help</i></a></th>
            <th>Status</th>
            <th>Opções</th>
          </tr>
          <tr class="hoverable">
            <td><span style="font-size: 20px"><b>Radiologia</b></span><br>01/04/18 ~ 03/04/18<br>08:00 ~ 12:00</td>
            <td><b>Valor: </b>R$300<br><b>Sócio: </b>R$250<br><b>Não quite: </b>R$300<br><b>Parceiro: </b>R$250<br></td>
            <td><b>Vagas: </b>24<br><b>Carga Horária: </b>12 horas<br><b>Frquência Mínima: </b>100%<br></td>
            <td><span data-badge-caption="Aperfeiçoando" class="new badge light-blue darken-1"></span> <span data-badge-caption="Residente" class="new badge light-blue darken-1"></span><br>
              <span data-badge-caption="Coligado" class="new badge light-blue darken-1"></span> <span data-badge-caption="Aspirante" class="new badge light-blue darken-1"></span><br>
              <span data-badge-caption="Titular" class="new badge light-blue darken-1"></span> <span data-badge-caption="Estudante de Medicina" class="new badge orange darken-1"></span><br>
              <span data-badge-caption="Médico" class="new badge orange darken-1"></span> <span data-badge-caption="Físicos, Biólogos" class="new badge orange darken-1"></span><br>
              <span data-badge-caption="Técnicos" class="new badge orange darken-1"></span> <span data-badge-caption="Entidades Parceiras" class="new badge orange darken-1"></span>
              <td class="center hoverable"><a class="btn tooltipped green" data-tooltip="Online" href="#"><i class="material-icons">cloud_done</i></a></td>
              <td class="center hoverable"><a class="btn tooltipped" data-tooltip="Editar" href="#"><i class="material-icons">edit</i></a>
              </tr>
          <tr class="hoverable">
            <td><span style="font-size: 20px"><b>Radiologia</b></span><br>01/04/18 ~ 03/04/18<br>08:00 ~ 12:00</td>
            <td><b>Valor: </b>R$300<br><b>Sócio: </b>R$250<br><b>Não quite: </b>R$300<br><b>Parceiro: </b>R$250<br></td>
            <td><b>Vagas: </b>24<br><b>Carga Horária: </b>12 horas<br><b>Frquência Mínima: </b>100%<br></td>
            <td><span data-badge-caption="Aperfeiçoando" class="new badge light-blue darken-1"></span> <span data-badge-caption="Residente" class="new badge light-blue darken-1"></span><br>
              <span data-badge-caption="Coligado" class="new badge light-blue darken-1"></span> <span data-badge-caption="Aspirante" class="new badge light-blue darken-1"></span><br>
              <span data-badge-caption="Titular" class="new badge light-blue darken-1"></span> <span data-badge-caption="Estudante de Medicina" class="new badge orange darken-1"></span><br>
              <span data-badge-caption="Médico" class="new badge orange darken-1"></span> <span data-badge-caption="Físicos, Biólogos" class="new badge orange darken-1"></span><br>
              <span data-badge-caption="Técnicos" class="new badge orange darken-1"></span> <span data-badge-caption="Entidades Parceiras" class="new badge orange darken-1"></span>
              <td class="center hoverable"><a class="btn tooltipped red" data-tooltip="Offline" href="#"><i class="material-icons">cloud_off</i></a></td>
              <td class="center hoverable"><a class="btn tooltipped" data-tooltip="Editar" href="#"><i class="material-icons">edit</i></a>
              </tr>
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
  <script>
    
  </script>
</body>
</html>