<?php

include('../controllers/conexao.php');


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        header("Location: ../views/registrar.php");
        exit; 
    }
    

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email', '$senha')";
    if(mysqli_query($conn, $sql)) {
        header("Location: ../views/index.php");
    } else {
        echo "erro ao inserir os dados " . mysqli_errno($conn);
    }
}