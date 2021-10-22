<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vinde!</title>
</head>
<body>
    <h1> Página de autenticação</h1>

    <form action="index.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Enviar">

    </form>

<?php
        session_start();
        define("LOGIN", "isadora");
        define("SENHA", "arcoiris");

            if($_SERVER["REQUEST_METHOD"] == 'POST'){
                if(isset($_POST["login"]) && isset($_POST["senha"])){
                $login = $_POST["login"];
                $senha = $_POST["senha"];
                if($login == LOGIN && $senha == SENHA){
                 //logado
                 $_SESSION["USUARIO"] = "Isadora Medeiros";
                 header("Location: index.php");
                 }else{
                     echo "Login ou senha incorretos.";
                }
                
            }                                     
        }    

    if(isset($_GET["acao"])) {
        $acao = $_GET["acao"];
        if($acao == "logoff") {
            //session_destroy();
            unset($_SESSION["USUARIO"]);
            echo "Você finalizou a sessão. Volte sempre! :D";
        }

    }

?>

</body>
</html>