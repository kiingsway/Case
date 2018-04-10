<?php include ('sessaoStart.php');?>
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
    <title>Case :: Projetos</title>
    <style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
  </head>
  <body>
    <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a class="breadcrumb">Projetos</a>
      </div>
    </nav>        
    <!-- Fim Breadcrumb, caminho de navegação -->

    <div class="container">
    <table cellpadding="1">
      <tr class="hoverable">
        <th>Função</th>
        <th>Implementada?</th>
        <th>Criado em</th>
        <th>Implementado em</th>
      </tr>
      <?php
        $db = mysqli_connect('localhost', 'root', '', 'dbregistro');
        if (!$db) { die(mysql_error());}
        $query = "SELECT funcao, implementada, criadoem, implementadaem FROM tbprojetos ORDER BY criadoem DESC";
        $result = mysqli_query($db, $query);
        while ($user = mysqli_fetch_assoc($result)){ ?>

        <tr class="hoverable">
          <td><?php echo $user['funcao']?></td>
          <?php
          if ($user['implementada'] == 0) { echo '<td><span class="new badge red" data-badge-caption="Não"></span></td>';}
          if ($user['implementada'] == 1) { echo '<td><span class="new badge green" data-badge-caption="Sim"></span></td>';}
          ?>
          <td><?php echo $user['criadoem']?></td>
          <td><?php echo $user['implementadaem']?></td>
        </tr>
      <?php   
      }
      ?>
    </table>
    </div>
  </div>   
<br>

<!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php") ?>

	<!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/trigger.js"></script>
  <script src="js/functionSearch.js"></script>
</body>
</html>