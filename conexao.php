<?php
// Conexão com o banco de dados (substitua com suas próprias configurações)
$host = "localhost";
$username = "root";
$password = "";
$database = "dwii";

$conexao = mysqli_connect($host, $username, $password, $database);

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>