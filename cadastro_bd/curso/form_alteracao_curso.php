<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alteração de Curso</title>
</head>
<body>
    <h1>Atualizar Curso</h1>

    <?php
      include("../inc/conectabd.inc.php");
      include("../inc/funcoes.inc.php");

      $id = $_GET["id"];
      $curso = 'recupera_curso'.($id); // Função que recupera os dados do curso pelo ID
    ?>

    <form action="alteracao_curso.php" method="GET">
        <input type="hidden" name="id_curso" value="<?php echo $curso["id_curso"];?>">
        
        <label for="ds_curso">Nome do Curso:</label>
        <input type="text" name="ds_curso" id="ds_curso" value="<?php echo $curso["ds_curso"];?>">
        <br>
        
        <label for="nr_carga_horaria">Carga Horária:</label>
        <input type="number" name="nr_carga_horaria" id="nr_carga_horaria" value="<?php echo $curso["nr_carga_horaria"];?>">
        <br>
        
        <label for="dt_inicio">Data de Início:</label>
        <input type="datetime-local" name="dt_inicio" id="dt_inicio" value="<?php echo date('Y-m-d\TH:i', strtotime($curso["dt_inicio"]));?>">
        <br>
        
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>