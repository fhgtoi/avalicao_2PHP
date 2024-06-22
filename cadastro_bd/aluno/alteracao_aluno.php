<!DOCTYPE html>
<!-- alteracao.php -->
<html>
<head>
    <title>Cadastro de aluno - Alteração</title>
    <meta charset="utf-8">
</head>
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_aluno = $_POST["id_aluno"];
    $ds_aluno = $_POST["ds_aluno"];
    $id_curso = $_POST["id_curso"];
    
    include_once "../inc/conectabd.inc.php";

    // Prepare the SQL statement
    $query = "UPDATE tb_aluno SET ds_aluno = ?, id_curso = ? WHERE id_aluno = ?";
    if ($stmt = mysqli_prepare($link, $query)) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "sii", $ds_aluno, $id_curso, $id_aluno);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Alteração efetuada com sucesso";
        } else {
            echo "Erro ao efetuar alteração: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Erro ao preparar a consulta: " . mysqli_error($link);
    }
    
    // Close the connection
    mysqli_close($link);
} else {
    echo "Método de requisição inválido.";
}
?>  
<br>
<a href="consulta_aluno.php">Ver alunos cadastrados</a>
</body>
</html>
