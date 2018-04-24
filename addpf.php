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
    <title>Case :: Adicionar Pessoa Física</title>
    <style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
  </head>
<body>
    <!-- Carrega e insere o cabeçalho do site -->
    <?php require_once ("padroes/navigation.php"); ?>

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a href="pf.php" class="breadcrumb">Pessoas Físicas</a>
          <a class="breadcrumb">Adicionar Pessoa Física</a>
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
                            <input type="text" name="txtNomePF">
                            <label>Nome</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtRGPF">
                            <label>RG</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtCPFPF">
                            <label>CPF</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5 hoverable">
                            <input type="text" name="txtNascimentoPF" class="datepicker">
                            <label>Data de nascimento</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <input type="text" name="txtCidadePF">
                            <label>Cidade</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtEstadoPF">
                            <label>Estado</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtTelefonePF">
                            <label>Telefone</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtCelularPF">
                            <label>Celular</label>
                        </div>
                        <div class="input-field col s6 hoverable">
                            <input type="text" name="txtEmailPF">
                            <label>E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 hoverable">
                            <select name="cbCategoriaPF">
                                <option value="Aperfeiçoando" selected>Aperfeiçoando</option>
                                <option value="Residente">Residente</option>
                                <option value="Coligado">Coligado</option>
                                <option value="Aspirante">Aspirante</option>
                                <option value="Titular">Titular</option>
                                <option value="Estudante de Medicina">Estudante de Medicina</option>
                                <option value="Médico">Médico</option>
                                <option value="Físicos, Biólogos">Físicos, Biólogos</option>
                                <option value="Técnicos e Tecnólogos">Técnicos e Tecnólogos</option>
                                <option value="Entidades Parceiras">Entidades Parceiras</option>
                            </select>
                            <label>Categorias</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <select name="cbSituacaoPF">
                                <option value="0" selected>Desligado</option>
                                <option value="1">Aguardando Ativação</option>
                                <option value="2">Ativo</option>
                            </select>
                            <label>Situação</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <input type="password" name="txtSenhaPF">
                            <label>Senha de acesso</label>
                        </div>
                    </div>
                    <div class="center"><button class="waves-effect waves-light btn-large" type="submit" name="btnAddAssociado"><i class="material-icons">add</i>Adicionar</button>
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