<?php
session_start();

if(!isset($_SESSION["USUARIO"])){
    //redirecionar para o login
    header("Location: pagina_autenticacao.php");

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá! :D</title>
</head>
<body>
    <h1>Seja bem vinde <?php echo $_SESSION["USUARIO"];?></h1>

    <a href="pagina_autenticacao.php?acao=logoff">Sair</a>

</body>
</html>