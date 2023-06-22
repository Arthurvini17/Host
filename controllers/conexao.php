<?php

$hostname = "localhost:3306";
$usuario = "root";
$senha = "";
$bdname = "host";

$conn = mysqli_connect($hostname, $usuario, $senha, $bdname );

if($conn->connect_errno) {
    die('Erro na conexão ' . $conn->connect_error);
} else {
    echo "Conexão feita";
}
?>