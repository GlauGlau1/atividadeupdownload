<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="acao.js"></script>
</head>
<body>
    <header></header>
    <section>
        <form method="post" id="login" class="campo">
            <label for="user">Usuário:</label>
            <input type="text" class="usuario" id="user" name="userc" placeholder="     joãozinho@gmail.com"><br>
            <label for="pass">Senha:</label>
            <input type="password" class="senha" id="pass" name="sen" placeholder="     ****************">
            <input type="button" value="Enviar" onclick="entrar()">
            <script>
                function entrar(){
                    window.location= "page.php";
                }
            </script>
        </form>
    </section>
    <footer></footer>
</body>
</html>