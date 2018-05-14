<?php session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessões</title>
</head>
<body>
    <?php if(isset($_SESSION["email"])){ ?>
        <h2>Você está logado como <?=$_SESSION["email"]?></h2>
        <form action="4_SESSION_PG2.php" method="post">
            <input type="hidden" name="deslogar" value="true">
            <button type="submit">Deslogar</button>
        </form>
    <?php }else{?>

    <form action="4_SESSION_PG2.php" method="post">
        Email:<br>
        <input type="email" name="email"><br>
        Senha:<br>
        <input type="password" name="senha"><br>
        <button type="submit">Logar</button>
    </form>

    <?php }?>
</body>
</html>