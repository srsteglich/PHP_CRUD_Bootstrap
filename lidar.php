<?php
session_start();
require 'conexao.php';

if (isset($_POST['delete-aluno'])) {

    $aluno_id = mysqli_real_escape_string($conn, $_POST['delete-aluno']);
    $query = "DELETE FROM alunos WHERE id='$aluno_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Dados excluído com sucesso!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foram excluído!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['altera_aluno'])) {

    $aluno_id = mysqli_real_escape_string($conn, $_POST['aluno_id']);

    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $curso = mysqli_real_escape_string($conn, $_POST['curso']);

    $query = "UPDATE alunos SET nome='$nome', email='$email', telefone='$telefone',curso='$curso'
              WHERE id='$aluno_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Dados alterado com sucesso!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foram alterado!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['salva_aluno'])) {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $curso = mysqli_real_escape_string($conn, $_POST['curso']);

    $query = "INSERT INTO alunos (nome,email,telefone,curso) 
              VALUES ('$nome','$email','$telefone','$curso')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Dados salvo com sucesso!";
        header("Location: aluno-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Não foram salvo!";
        header("Location: aluno-create.php");
        exit(0);
    }
}
