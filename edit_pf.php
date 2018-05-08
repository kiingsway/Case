<?php include ('server.php');?>
<?php include ('db_editar.php');?>

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
		<title>Case :: Editar Usuário</title>
		<style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
	</head>
	<body>
    <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

		<?php
		$db = mysqli_connect('localhost', 'root', '', 'dbcollege');
		if (!$db) {die(mysql_error());}
		$query = "SELECT id, nome, rg, cpf, nascimento, categoria, situacao, cidade, estado, telefone, celular, email, senha FROM tb_pf WHERE id=".$_POST['btnEditarPF'];
        echo $query;
		$result = mysqli_query($db, $query);
		while ($user = mysqli_fetch_assoc($result)){
		?>

		<!-- Breadcrumb, caminho de navegação -->
		<nav class="red lighten-1" role="navigation"> 
			<div class="nav-wrapper container">
				<a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
				<a href="page_pf.php" class="breadcrumb">Pessoas Físicas</a>
				<a class="breadcrumb">Editando: <div class="chip red darken-1"><?php echo $user['nome']?></div></a>
			</div>
		</nav>	  		
		<!-- Fim Breadcrumb, caminho de navegação -->

		<!-- Conteúdo -->
		<!--DIV do conteúdo-->
		<main><br>
	<div class="container">
		<div class="row">
			<form method="POST" action="#" class="col s12">
				<div class="row">                        
                        <div class="input-field col s1 hoverable">
                            <input type="text" name="txtId" value=<?php echo $user['id']; ?> readonly >
                            <label>id</label>
                        </div>
                        <div class="input-field col s5 hoverable">
                            
                            <input type="text" name="txtNomePF" value=<?php echo "'".$user['nome']."'"; ?>>
                            <label>Nome</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtRGPF" value=<?php echo "'".$user['rg']."'"; ?>>
                            <label>RG</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtCPFPF" value=<?php echo "'".$user['cpf']."'"; ?>>
                            <label>CPF</label>
                        </div>
                    </div>
				<div class="row">
                        <div class="input-field col s5 hoverable">
                            <input type="text" name="txtNascimentoPF" class="datepicker" value=<?php echo "'".$user['nascimento']."'" ?>>
                            <label>Data de nascimento</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <input type="text" name="txtCidadePF" value=<?php echo "'".$user['cidade']."'" ?>>
                            <label>Cidade</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtEstadoPF" value=<?php echo "'".$user['estado']."'" ?>>
                            <label>Estado</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtTelefonePF" value=<?php echo "'".$user['telefone']."'" ?>>
                            <label>Telefone</label>
                        </div>
                        <div class="input-field col s3 hoverable">
                            <input type="text" name="txtCelularPF" value=<?php echo "'".$user['celular']."'" ?>>
                            <label>Celular</label>
                        </div>
                        <div class="input-field col s6 hoverable">
                            <input type="text" name="txtEmailPF" value=<?php echo "'".$user['email']."'" ?>>
                            <label>E-mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4 hoverable">
                            <select name="cbCategoriaPF">
                                <option value="Aperfeiçoando" <?php if($user['categoria'] == 'Aperfeiçoando') echo 'selected'; ?> >Aperfeiçoando</option>
                                <option value="Residente" <?php if($user['categoria'] == 'Residente') echo 'selected'; ?> >Residente</option>
                                <option value="Coligado" <?php if($user['categoria'] == 'Coligado') echo 'selected'; ?> >Coligado</option>
                                <option value="Aspirante" <?php if($user['categoria'] == 'Aspirante') echo 'selected'; ?> >Aspirante</option>
                                <option value="Titular" <?php if($user['categoria'] == 'Titular') echo 'selected'; ?> >Titular</option>
                                <option value="Estudante de Medicina" <?php if($user['categoria'] == 'Estudante de Medicina') echo 'selected'; ?> >Estudante de Medicina</option>
                                <option value="Médico" <?php if($user['categoria'] == 'Médico') echo 'selected'; ?> >Médico</option>
                                <option value="Físicos, Biólogos" <?php if($user['categoria'] == 'Físicos, Biólogos') echo 'selected'; ?> >Físicos, Biólogos</option>
                                <option value="Técnicos e Tecnólogos" <?php if($user['categoria'] == 'Técnicos e Tecnólogos') echo 'selected'; ?> >Técnicos e Tecnólogos</option>
                                <option value="Entidades Parceiras" <?php if($user['categoria'] == 'Entidades Parceiras') echo 'selected'; ?> >Entidades Parceiras</option>
                            </select>
                            <label>Categorias</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <select name="cbSituacaoPF">
                                <option value="0" <?php if($user['situacao'] == '0') echo 'selected'; ?>>Desligado</option>
                                <option value="1" <?php if($user['situacao'] == '1') echo 'selected'; ?>>Aguardando Ativação</option>
                                <option value="2" <?php if($user['situacao'] == '2') echo 'selected'; ?>>Ativo</option>
                            </select>
                            <label>Situação</label>
                        </div>
                        <div class="input-field col s4 hoverable">
                            <input type="password" name="txtSenhaPF">
                            <label>Senha de acesso</label>
                        </div>
                    </div>
						<br>
						<div class="center">
							<button class="waves-effect waves-light btn-large" type="submit" name="btnTerminoEditarPF" value=<?php echo "'".$user['id']."'" ?>><i class="material-icons">edit</i>Editar usuário</button>
						</div>
				</div>
			</form>
		</div>
	</div>
</main>
		<?php } ?>

    <!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php"); ?>

		<!--  Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<!-- Gatilho -->
		<script src="js/trigger.js"></script>
	</body>
</html>