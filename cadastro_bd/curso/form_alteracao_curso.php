<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
include "../inc/conectabd.inc.php";
include "../inc/funcoes.inc.php";

$id = $_GET["id"];
$recupera = recupera_curso($id);

?>

<html>
<head>
	<title>Cadastro de curso - Atualizar</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Atualizar curso</h1>
	<form action="alteracao_curso.php" method="GET">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label for="ds_curso">Curso:</label>
		<input type="text" name="curso" id="ds_curso" value="<?php echo $recupera["ds_curso"]; ?>">
		<br>
		<label for="dt_inicio">Data de Início:</label>
		<input type="text" name="dt_inicio" id="dt_inicio" value="<?php echo $recupera["dt_inicio"]; ?>">
		<br>
		<label for="nr_carga_horaria">Carga Horária:</label>
		<input type="text" name="nr_carga_horaria" id="nr_carga_horaria" value="<?php echo $recupera["nr_carga_horaria"]; ?>">
		<br>
		<input type="submit" value="Atualizar">
	</form>
</body>
</html>
