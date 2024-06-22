<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
  <?php 
    // efetua a inserção do curso informado em cadastro_curso.php
    $ds_curso = $_GET["ds_curso"];
    $nr_carga_horaria = $_GET["nr_carga_horaria"];
    $dt_inicio = $_GET["dt_inicio"];
    
    include_once "../inc/conectabd.inc.php";

    $query = "INSERT INTO tb_curso (ds_curso, nr_carga_horaria, dt_inicio) 
              VALUES ('$ds_curso', $nr_carga_horaria, '$dt_inicio');";
    
    if ($result = mysqli_query($link, $query)) {
        echo "Inclusão efetuada com sucesso";
    } else {
        echo "Erro ao efetuar a inclusão: " . mysqli_error($link);
    }
    
    // fecha a conexão
    mysqli_close($link);
    ?>  
    <br>
    <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>
