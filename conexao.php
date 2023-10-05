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

// Recupere os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$peixe = $_POST['peixe'];
$tipo = $_POST['tipo'];

// Inserir dados no banco de dados
$query = "INSERT INTO dwii (nome, senha, peixe, tipo) VALUES ('$nome', '$senha', '$peixe', '$tipo')";

if (mysqli_query($conexao, $query)) {
    echo "<br><center><b>CADASTRO REALIZADO COM SUCESSO!</b><br><br></center>";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>