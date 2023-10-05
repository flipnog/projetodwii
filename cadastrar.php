<?php 
require_once "conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$peixe = $_POST['peixe'];
$tipo = $_POST['tipo'];

echo $nome, $senha, $peixe, $tipo;

// Inserir dados no banco de dados
$query = "INSERT INTO dwii (nome, senha, peixe, tipo) VALUES ('$nome', '$senha', '$peixe', '$tipo')";

if (mysqli_query($conexao, $query)) {
    echo "<br><center><b>CADASTRO REALIZADO COM SUCESSO!</b><br><br></center>";
    header("Location:consulta.php");
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>