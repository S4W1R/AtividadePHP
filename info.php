<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
    <?php
        $loginsalvo = "admin";
        $senhasalva = "1234";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $_POST["login"] ??'';
            $senha = $_POST["senha"] ??'';

        if($login == $loginsalvo && $senha == $senhasalva){
            echo "Acesso Liberado!!!"; 
        } else {
            echo "Acesso Negado!!!";
        }
}else{
    ?>            
    </main>

    <div class="container">

    <div class="flex-container">

        <nav id="cabeçalho">
            <img src="img/icone.webp" alt="">
            <h1>Login</h1>

        </nav>
        <form action="" method="post">
            <h1 id="linha">________________</h1><h5>
            <div class="input">
                <label for="nome">Nome do Usuário:</label><br>
                <input type="text" name="nome" id="nome"><br>
            </div>

            <div class="input">
                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" id="senha" required minlength="8"><br>
            </div></h5>

            <div><h6>
                <input type="checkbox" name="checkbox" id="checkbox" > Lembrar-me
            </div></h6>
            <br>
            <div id="button">
                <button type="button" class="btn btn-light">Entrar</button>
            </div>


        </form>
    </div>
    </div>
<?php
}
?>
</body>
</html>