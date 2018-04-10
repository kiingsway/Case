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

    <style>td {padding: 5px; cursor: pointer;}
          .selected {background-color: #e0e0e0;}</style>
  </head>
<body>
    <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a class="breadcrumb">Pessoas Físicas</a>
      </div>
    </nav>        
    <!-- Fim Breadcrumb, caminho de navegação -->

    <!-- Carrega e insere a função de pesquisa -->
    <?php require_once ("padroes/search.php"); ?>

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


<!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php") ?>

	<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/trigger.js"></script>
  <script src="js/functionSearch.js"></script>
  <script src="js/selectRow.js"></script>
  
</body>
</html>