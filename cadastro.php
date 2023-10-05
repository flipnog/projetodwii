<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>FLIPEIXES - Compre seu peixe.</title>
    </head>
    <body>
    <main>
        <h1>FLIPEIXES - PEIXE É AQUI!</h1>
        <h1>Olá! Faça seu cadastro.</h1>
        <form id="meuFormulario" action="cadastrar.php" method="post">
            <label for="nome">
                <span>Nome</span>
                <input type="text" id="nome" name="nome" placeholder="Digite o seu nome." required>
            </label>

            <label for="senha">
                <span>Senha</span>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha." required>
            </label>
            
            <label for="tipo">
                <span>Peixe preferido</span>
                <input type="text" id="peixe" name="peixe" placeholder="Digite e selecione abaixo o peixe." required><br>
                <select id="tipo" name="tipo">
                    <option value="tilapia" id="peixe">Tilápia</option>
                    <option value="salmão" id="peixe">Salmão</option>
                    <option value="carpa" id="peixe">Carpa</option>
                    <option value="atum" id="peixe">Atum</option>
                    <option value="dourado" id="peixe">Dourado</option>
                    <option value="bagre" id="peixe">Bagre</option>
                    <option value="sardinha" id="peixe">Sardinha</option>
                    <option value="enguia" id="peixe">Enguia</option>
                    <option value="peixe_palhaco" id="peixe">Peixe-palhaço</option>
                    <option value="tubarao" id="peixe">Tubarão</option>
                    <option value="piranha" id="peixe">Piranha😝</option>
                </select>
            </label>

            <input type="submit" id="btnCadastrar" value="Cadastrar" id="button"><br>
            <h3>Já fez login anteriormente? <a href="index.php" style="text-decoration:none">Acesse a loja.</a></h3>
            <h5>Desistiu de comprar peixe? <a href="https://www.youtube.com/shorts/83BbjXGtrbY" style="text-decoration:none">Clique aqui! :).</a></h5>
        </form>     
    </main>
    <section class="images">
        <img src="assets/fish.svg" alt="imgpeixe">
        <div class="circle"></div>
    </section>
    </body>
</html>