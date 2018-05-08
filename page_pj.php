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
    <title>Case :: Pessoas Jurídicas</title>
    <style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
  </head>
<body>
    <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a class="breadcrumb">Pessoas Jurídicas</a>
      </div>
    </nav>        
    <!-- Fim Breadcrumb, caminho de navegação -->

    <!-- Carrega e insere a função de pesquisa -->
    <?php require_once ("padroes/search.php"); ?>

    <main>
    <!-- Conteúdo em geral -->
    <br><div class="container center">
      <a class="waves-effect waves-light btn-large" href="add_pj.php"><i class="material-icons left">add</i>Adicionar associado Jurídico</a><br><br>
        <table id="table">
      <tr class="hoverable">
        <th>Nome Fantasia</th>
        <th>Detalhes</th>
        <th>Contato</th>
        <th>Opções</th>
      </tr>

      <?php
        $db = mysqli_connect('localhost', 'root', '', 'dbcollege');
        if (!$db) { die(mysql_error());}
        $user_check_query = "SELECT id, nome_fantasia, razao_social, cnpj, site, email, telefone1, telefone2, situacao, cadastroaqui, cidade, estado FROM tb_pj";
        $result = mysqli_query($db, $user_check_query);
        while ($user = mysqli_fetch_assoc($result)){ ?>

        <tr class="hoverable">
          <td style="font-size: 20px; font-weight: bold;"><?php echo $user['nome_fantasia'] ?></td>
          <td><b>Razão Social:</b> <?php echo $user['razao_social'] ?><br><b>CNPJ: </b><?php echo $user['cnpj']?><br><b>Cadastro aqui: </b><?php echo $user['cadastroaqui']?><br><b>Situação: </b><?php if ($user['situacao'] == 0) { echo '<span data-badge-caption="Desligado" class="new badge red">'; }
            if ($user['situacao'] == 1) { echo '<span data-badge-caption="Ativo" class="new badge green">'; } ?> </span></td>
          <td><b>Cidade:</b> <?php echo $user['cidade']?><br><b>Celular:</b> <?php echo $user['telefone1']?><br><?php echo $user['telefone2']?><br><b>Site: </b> <?php echo $user['site'] ?><br><b>E-mail: </b><?php echo $user['email']?><br></td>
          <form method="POST" action="edit_pj.php">
          <td class="hoverable"><button class="btn tooltipped" data-tooltip="Editar" name="btnEditarPJ" <?php echo 'value="'.$user['id'].'"' ?>><i class="material-icons">edit</i></button></form>
        </tr>
      <?php   
      }
      ?>
    </table>
    </div>
    <!-- Fim conteúdo -->
  </main>


<!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php"); ?>

	<!--  Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/trigger.js"></script>
  <script src="js/functionSearch.js"></script>
</body>
</html>