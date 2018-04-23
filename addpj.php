<?php include ('server.php');?>
<?php include ('db_add.php');?>
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
    <title>Case :: Adicionar Pessoa Jurídicas</title>
    <style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
  </head>
<body>
    <!-- Carrega e insere o cabeçalho do site -->
    <?php require_once ("padroes/navigation.php"); ?>

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a href="pj.php" class="breadcrumb">Pessoas Jurídicas</a>
          <a class="breadcrumb">Adicionar Pessoa Jurídicas</a>
        </div>
      </div>
    </nav>
    <!-- Fim Breadcrumb -->

    <main><br>
        <div class="container">
            <div class="row">
                <form method="POST" action="#" class="col s12">
                    <div class="row">
                        <div class="input-field col s6 hoverable">
                            <input type="text" name="txtNomeFantasiaPJ">
                            <label>Nome Fantasia</label>
                        </div>
                        <div class="input-field col s6 hoverable">
                            <input type="text" name="txtRazaoSocialPJ">
                            <label>Razão Social</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5 hoverable">
                            <input type="text" name="txtCNPJPJ">
                            <label>CNPJ</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <input type="text" name="txtCidadePJ">
                            <label>Cidade</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtEstadoPJ">
                            <label>Estado</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtTelefonePJ">
                            <label>Telefone</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtCelularPJ">
                            <label>Celular</label>
                        </div>
                        <div class="input-field col s6 hoverable">
                            <input type="text" name="txtEmailPJ">
                            <label>E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8 hoverable">
                            <input type="text" name="txtSitePJ">
                            <label>Site</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <input type="password" name="txtSenhaPJ">
                            <label>Senha de acesso</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 hoverable center">
                            <p><label><input type="checkbox" name="cbxSituacaoPJ"><span>Situação</span></label></p>
                        </div>
                    </div>
                    <div class="center"><button class="waves-effect waves-light btn-large" type="submit" name="btnAddAssociadoPJ"><i class="material-icons">add</i>Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php") ?>

        <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/trigger.js"></script>
</body>
</html>