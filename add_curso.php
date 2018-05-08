<?php include ('sessaoStart.php');?>
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
    <title>Case :: Cursos</title>
    <style>.disabled {color: black; pointer-events: none;cursor: default;}</style>
  </head>
<body>
   <!-- Carrega e insere o cabeçalho do site -->
		<?php require_once ("padroes/navigation.php"); ?>

    <!-- Breadcrumb, caminho de navegação -->
    <nav class="red lighten-1" role="navigation"> 
      <div class="nav-wrapper container">
        <a href="index.php" class="breadcrumb"><i class="material-icons">home</i>Home</a>
        <a href="page_cursos.php" class="breadcrumb">Cursos</a>
          <a class="breadcrumb">Criar Cursos</a>
        </div>
      </div>
    </nav>

    <!--DIV do conteúdo-->
	<div class="container center">
		<div class="row">
			<form method="POST" action="#" class="col s12">
				<div class="row">
					<div class="input-field col s6 hoverable">
						<input type="text" name="txtNomeCurso" class="ative">
						<label>Nome do Curso</label>
					</div>
					<div class="input-field col s6 hoverable">
						<select name="optLocalCurso">
							<option value="Presencial" selected>Presencial</option>
							<option value="Online">Online</option>
						</select>
						<span class="helper-text" data-error="wrong" data-success="right">Local do Curso</span>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3 hoverable">
						<input type="text" name="txtDataInicial" class="datepicker">
						<span class="helper-text" data-error="wrong" data-success="right">Data inicial do curso</span>

					</div>
					<div class="input-field col s3 hoverable">
							<input type="text" name="txtHoraInicial" class="timepicker">
							<span class="helper-text" data-error="wrong" data-success="right">Hora Inicial do Curso</span>
					</div>
					<div class="input-field col s3 hoverable">
						<input type="text" name="txtDataFinal" class="datepicker">
						<span class="helper-text" data-error="wrong" data-success="right">Data Final do Curso</span>
					</div>
					<div class="input-field col s3 hoverable">
							<input type="text" name="txtHoraFinal" class="timepicker">
							<span class="helper-text" data-error="wrong" data-success="right">Hora Final do Curso</span>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4 hoverable">
						<input type="number" name="txtVagas">
						<label>Vagas</label>
					</div>
					<div class="input-field col s4 hoverable">
							<input type="number" name="txtCargaHoraria">
							<label>Carga Horária</label>
					</div>
					<div class="input-field col s4 hoverable">
						<input type="number" name="txtFreqMinima">
							<label for="inputFrequenciaMinima">Frequência Mínima (%)</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
						<table>
							<tr>
								<th colspan="2" style="color: black">
									Categorias
								</th>
								<th colspan="1" style="color: black">
									Sócio
								</th>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="1"/><span>Aperfeiçoando</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="2"/><span>Aspirante</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="3"/><span>Residente</span></label></td>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]"  value="4"/><span>Coligado</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="5"/><span>Titular</span></label></td>
									<td></td>
								</tr>
								<tr>
								<th colspan="2" style="color: black">
									
								</th>
								<th colspan="1" style="color: black">
									Não sócio
								</th>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="6"/><span>Entidades Parceiras</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="7"/><span>Estudante de Medicina</span></label></td>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="8"/><span>Médico</span></label></td>
								</tr>
								<tr>
									<td class="hoverable"><label><input type="checkbox" name="cbxCategorias[]" value="9"/><span>Técnico e Tecnólogo em radiologia</span></label></td>
									<td class="hoverable" colspan="2"><label><input type="checkbox" name="cbxCategorias[]" value="10"/><span>Físicos, Biólogos, Radiofarmacêuticos, Químicos e Biomédicos em Radiologia</span></label></td>
								</tr>
						</table>
					</div>
					<div class="input-field col s12">
						<table>
							<tr>
								<td class="hoverable"><input type="number" name="txtValor" id="txtValorCurso"><label for="txtValorCurso">Valor</label></td>
								<td class="hoverable"><input type="number" name="txtValorSocio" id="txtValorSocioCurso" class="validate"><label for="txtValorSocioCurso">Valor Sócio</label></td>
								<td class="hoverable"><input type="number" name="txtValorParceiro" id="txtValorParceiroCurso"><label for="txtValorParceiroCurso">Valor Parceiro</label></td>
								<td class="hoverable"><input type="number" name="txtValorNaoQuite" id="txtValorNaoSocioCurso"><label for="txtValorNaoSocioCurso">Valor Não Quite</label></td>
							</tr>
						</table>
					</div>
						<div class="row">
							<div class="input-field col s6 hoverable">
								<select name="optTipoVencimento">
									<option value="1" selected>Fixo</option>
									<option value="2">Inscrição</option>
									<option value="3">Inscrição + n dias</option>
									<option value="4">Inscrição + n dias com limite</option>
								</select>
							</div>
							<div class="input-field col s3 hoverable">
								<input type="text" class="datepicker" name="txtVencimento" id="txtVencimentoCurso"><label for="txtVencimentoCurso">Vencimento</label>
							</div>
							<div class="input-field col s3 hoverable">
								<input type="number" name="txtNdias" id="txtNdiasCurso"><label for="txtNdiasCurso">N dias</label>
							</div>
						</div>
						<div>
							 <!-- Switch -->
						  <div class="switch">
						  	Status: 
						    <label>
						      Off
						      <input name="swcStatus" value="1" type="checkbox">
						      <span class="lever"></span>
						      On
						    </label>
						  </div>

						</div>
						<br>
						<div>
							<button class="waves-effect waves-light btn-large" type="submit" name="btnCriarCurso"><i class="material-icons">add</i>Criar curso</button>
						</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Carrega e insere o rodapé do site -->
    <?php require_once("padroes/footer.php"); ?>

	<!--  Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/trigger.js"></script>
</body>
</html>
