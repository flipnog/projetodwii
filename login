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
        <h1>Bem-vindo de volta!<br>Faça seu login.</h1>
        <form action="#">
            <label for="name">
                <span>Nome</span>
                <input type="text" id="name" name="nome" required>
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="senha" required>
            </label>
            
            <input type="submit" id value="Logar" id="button"><br>
            <h2>Ainda não tem login? <a href="cadastro.php" style="text-decoration:none">Se cadastre.</a></h2>
        </form>
    </main>
    <section class="images">
        <img src="assets/fish.svg" alt="Mobile">
        <div class="circle"></div>
    </section>
    </body>
    </html>