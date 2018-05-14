<!--
    Autor: Gabriel Barreto
    Curso de PHP
    Ministrado em Maio/2018
    Realização: DACOMP & UNECT
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variáveis</title>
</head>
<body>
    <!-- Abrindo tag de código em PHP -->
    <?php echo "Olá Mundo!</br>";?>
    
    <!-- Tipos: Inteiro, Float, Boolean, String, Array, Objetos e dentre outros -->
    <!-- Em php as variáveis podem assumir qualquer tipo a qualquer momento -->
    <?php
        //Assim se adiciona um comentário dentro de um bloco PHP
        /*
        Ou se tiver muito a dizer,
        deste modo podemos comentar com mais organização
        */

        //Para criar uma variável em PHP basta colocar o '$' junto com o nome da variável
        $rua = "Santos Dumont, ";
        $num = 22;
        $num2 = $num2 - 1;
        echo $rua . "$num";

        echo "</br>";

        //Com essa Função podemos ver o tipo da variável
        echo "A variavel rua é do tipo: ".gettype($rua);

        echo "</br>";
        //Para criarmos uma contante temos duas opções
        const NUMERO_1 = 1;
        //Ou assim
        define('NUMERO_2','2');
        
        echo NUMERO_1 ." ".NUMERO_2;

        //Falta Namespace e closure


    ?>
</body>
</html>