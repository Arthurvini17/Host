<?php

include('../controllers/conexao.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    //verifica se o email ou senha foi colocado

    if(empty($email) || empty($senha)) {
        header("Location: ../views/login.php");
        exit;
    }


    //busca no banco de dados 
    $sql = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'"; 
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)> 0){
        header("Location: ../views/index.php");
    } else {
        echo "Email invalido ou senha";
    }
}