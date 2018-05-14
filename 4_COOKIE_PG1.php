<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criando Cookies</title>
</head>
<body>
    <h1>
        Olá 
        <?php if(isset($_COOKIE['nome'])){ 
                echo $_COOKIE['nome'];
            }else{
                echo 'Anônimo';
            }
        
        ?>
        , bem vindo ao nosso site.
    </h1>
    <a href="4_COOKIE_PG2.php">Mudar nome</a>
    
</body>
</html>