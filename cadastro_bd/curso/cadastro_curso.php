<!DOCTYPE html>
<!-- cadastro_curso.php -->
<html>

<head>
	<title>Cadastro de curso</title>
	<meta charset="utf-8">
</head>

<body>
	<h1>Cadastrar novo curso</h1>
	<form action="insercao_curso.php" method="GET">
		<label for="id_curso">
			Curso:
		</label>
		<input type="text" name="curso" id="id_curso">
		<br>
		<label for="id_carga_horaria">
			Carga Horária
		</label>
		<input type="text" name="nr_carga_horaria" id="id_carga_horaria">
		<br>
		<label for="id_dt_inicio">
			Data Início
		</label>
		<input type="text" name="dt_inicio" id="id_dt_inicio">
		<br>
		<input type="submit" value="Ok">
	</form>
</body>

</html>