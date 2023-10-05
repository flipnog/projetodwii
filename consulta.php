
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Consultar peixes</title>
  </head>
  <body>

<?php
if (isset($_POST['busca'])) {
    $consulta = $_POST['busca'];
} else {
    $consulta = "";
}

include "conexao.php";

$sql = "SELECT * FROM produtos WHERE nome LIKE '%$consulta%' ";

$dados = mysqli_query($conn, $sql);
?>
    <div class="container">
        <div class="row">
            <div class="col">
              <h1>Pesquisar produtos</h1>

              <nav class="navbar navbar-light bg-light">
                  <form class="form-inline" href="consulta.php" method="POST">
                     <input class="form-control mr-sm-2" type="search" placeholder="Nome do produto" name="busca" autofocus>
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Consultar</button>
                  </form>
              </nav>
              <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Senha</th>
      <th scope="col">Peixe</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>

<?php
      if ($dados) {  // Verificar se a consulta foi bem-sucedida
        while ($linha = mysqli_fetch_assoc($dados)) 
        {
        $id = $linha['id'];
        $nome = $linha['nome'];
        $senha = $linha['senha'];
        $peixe = $linha['peixe'];
        $tipo = $linha['tipo'];

        echo "<tr>
            <th scope='row'>$nome</th>
            <td>$senha</td>
            <td>$peixe</td>
            <td>$tipo</td>
            <td width=150px>
            <a href='editar.php?id=$id' class='btn btn-success btn-sm'>Editar produto</a>
           
        </td>
    </tr>";
       }
     } else {
    echo "Erro na consulta: " . mysqli_error($conn);
   };

?>

  </tbody>
</table>
                             
             <a href="index.php" class="btn btn-info">Voltar à loja</a>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>