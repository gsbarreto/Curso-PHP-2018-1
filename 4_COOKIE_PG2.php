<?php
    if(isset($_POST['nome'])){
        // Parametros do setCookie(nomeDoCookie, Valor, Tempo)
        setcookie('nome',$_POST['nome'],time()+3600);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Cookie</title>
</head>
<body> 

    <h1>Valor do Cookie: <?=$_COOKIE['nome']?></h1>
    <form action="4_COOKIE_PG2.php" method="post">
        Nome:<br>
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
    </form>


    <a href="4_COOKIE_PG1.php">Voltar para a página anterior</a>
</body>
</html>