<?php
    //Toda página que for precisar de sessão tem que ter session_start();
    session_start();
    if($_POST['deslogar'] == 'true'){
        unset($_SESSION['email'],$_SESSION['senha']);
        $msg = 'Deslogado com sucesso!';
    }
    if(isset($_POST["email"], $_POST["senha"])){
        if($_POST["email"] == "teste@teste.com" && $_POST["senha"] == "123456"){
                //Assim cria uma variável de sessão
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["senha"] = $_POST["senha"];

                
                $msg = "Logado com sucesso!";       
        }else{
            $msg = "Email ou senha incorretos.";
        }
    } else {
        $msg = "Faltam parametros.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php if(isset($msg)){ echo '<h1>'.$msg.'</h1>'; } ?>

    <a href="4_SESSION_PG1.php">Voltar a página anterior</a>
</body>
</html>