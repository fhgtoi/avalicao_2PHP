<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro de curso - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>
  <?php 
    // efetua a alteração do curso informado em form_alteracao_curso.php
    $id_curso = $_GET["id_curso"];
    $ds_curso = $_GET["ds_curso"];
    $nr_carga_horaria = $_GET["nr_carga_horaria"];
    $dt_inicio = $_GET["dt_inicio"];
    
    include_once "../inc/conectabd.inc.php";

    $query = "UPDATE tb_curso 
              SET ds_curso = '$ds_curso',
                  nr_carga_horaria = $nr_carga_horaria,
                  dt_inicio = '$dt_inicio'
              WHERE id_curso = $id_curso;";
    
    if ($result = mysqli_query($link, $query)) {
        echo "Alteração efetuada com sucesso";
    } else {
        echo "Erro ao efetuar a alteração: " . mysqli_error($link);
    }
    
    // fecha a conexão
    mysqli_close($link);
    ?>  
    <br>
 <a href="consulta_curso.php">Ver Curso cadastrados</a>
 
 </body>
</html>