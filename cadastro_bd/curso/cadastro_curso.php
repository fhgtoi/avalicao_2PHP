<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo Curso</h1>
	<form action="insercao_curso.php" method="GET">
        <label for="ds_curso">Nome do Curso:</label>
        <input type="text" name="ds_curso" id="ds_curso" required>
        <br>
        
        <label for="nr_carga_horaria">Carga Horária:</label>
        <input type="number" name="nr_carga_horaria" id="nr_carga_horaria" required>
        <br>
        
        <label for="dt_inicio">Início do Curso:</label>
        <input type="datetime-local" name="dt_inicio" id="dt_inicio" required>
        <br>
        
        <input type="submit" value="Cadastrar">
    </form>
	</body>
</html>