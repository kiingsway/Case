<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!--Ícones Material Design Google-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!--Deixe o browser saber que esse site serve em mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Cor da barra de navegação do Chrome para android-->
    <meta name="theme-color" content="#c62828">
    <!--Título-->
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
    <div id="divDropdown">
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
    </ul></div>

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
    </ul>

    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <div id="breadcrumb" class="col s12">
          <a href="index.html" class="breadcrumb"><i class="material-icons">home</i>Home</a>
          <a href="index.html" class="breadcrumb">Projeto</a>
        </div>
      </div>
    </nav>
    <div class="container">
    <table cellpadding="1">
      <tr class="hoverable">
        <th>Função</th>
        <th>Implementada?</th>
        <th>Criado em</th>
        <th>Implementado em</th>
      </tr>
      <tr class="hoverable">
        <td>Adicionar Status na criação do CUrso</td>
        <td><span class="new badge green" data-badge-caption="Não"></span></td>
        <td>08/04/2018</td>
        
      </tr>
      <tr class="hoverable">
        <td>Adicionar Projeto.html em todos os Dropdown</td>
        <td><span class="new badge green" data-badge-caption="Sim"></span></td>
        <td>07/04/2018</td>
        <td>07/04/2018</td>
      </tr>
      <tr class="hoverable">
        <td>Fechar NAV em todos os HTMLs</td>
        <td><span class="new badge green" data-badge-caption="Sim"></span></td>
        <td>07/04/2018</td>
        <td>07/04/2018</td>
      </tr>
      <tr class="hoverable">
        <td>Adicionar Search</td>
        <td><span class="new badge green" data-badge-caption="Sim"></span></td>
        <td>07/04/2018</td>
        <td>07/04/2018</td>
      </tr>
      <tr class="hoverable">
        <td>Adicionar Badges nas Situação das Pessoas</td>
        <td><span class="new badge green" data-badge-caption="Sim"></span></td>
        <td>07/04/2018</td>
        <td>07/04/2018</td>
      </tr>
      <tr class="hoverable">
        <td>Colorir botões do Dropdown</td>
        <td><span class="new badge red" data-badge-caption="Não"></span></td>
        <td>07/04/2018</td>
        <td></td>
      </tr>
      <tr class="hoverable">
        <td>Reduzir navegação, fazer com que a de PC de Mobile sejam na mesma tag</td>
        <td><span class="new badge red" data-badge-caption="Não"></span></td>
        <td>07/04/2018</td>
        <td></td>
      </tr>
      <tr class="hoverable">
        <td>Testar table no Modal</td>
        <td><span class="new badge red" data-badge-caption="Não"></span></td>
        <td>07/04/2018</td>
        <td></td>
      </tr>
      <tr class="hoverable">
        <td>Badges nas Categorias</td>
        <td><span class="new badge green" data-badge-caption="Sim"></span></td>
        <td>07/04/2018</td>
        <td>07/04/2018</td>
      </tr>
        <td>Ícones do Breadcrumb</td>
        <td><span class="new badge green" data-badge-caption="Sim"></span></td>
        <td>07/04/2018</td>
        <td>07/04/2018</td>
      </tr>
    </table>
    </div>
  </div>   
<br>
<!--Footer ou Rodapé-->
    <footer class="page-footer orange">
      <div class="footer-copyright">
        <div class="container">
          Made by <a href="https://github.com/kiingsway" target="_blank">King Sway</a>
        </div>
      </div>
    </footer>
	<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    $('.dropdown-trigger').dropdown({
    	hover: false,
    	constrainWidth: false,
    	coverTrigger: false
    });
    $(document).ready(function(){
    	$('.modal').modal();
  	});
    $(document).ready(function(){
    $('select').formSelect();
  	});
    $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
  </script>
</body>
</html>