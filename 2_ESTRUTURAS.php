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
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = 6;
        $nota2 = 0;

        /* Operadores lógicos - Usaremos para realizarmos contas
            +   Soma
            -   Subtração
            /   Divisão
            *   Multiplicação
            ==  Igual
            <=  Menor que
            >=  Maior que 
            &&  E
            ||  Ou
            !   Negação
        */
        
        $soma = $nota1 + $nota2;
        echo "A soma de $nota1 com $nota2 é igual a : ".$soma."<br>";
        /*
        Estrutura de Controle IF -  Se a condição dentro dos () for verdadeira,
        o compilador executa o que está dentro das chaves {}
        Senão atendido
        */
        $media = $soma /2;

        if($media >= 6){
            echo "Parabéns você foi aprovado! Sua média foi de $media. <br>";
        }else if($media < 6 && $media >= 4){
            echo "Vou ser bonzinho e não vou te prender na matéria!</br>";
        }else{
            echo "Eu sou um professor carrasco Hahaha (Risada maligna)</br>";
        }

        /*
            Array

            Chave-valor: (JSON)

            Para criar um array em PHP basta atribuir a variavel a função chamada array(),
            com os valores dentro do ().
            Podemos mostrar todos os valores do array utilizando a função var_dump().
            Com a função count() podemos ver a quantidade de objetos dentro do array. 
            Exemplo:
        */
        echo "<br>";
        $materias = array("Algoritmos", "Estrutura de dados","Banco de Dados","POO");
        var_dump($materias);

        /*
            Estrutura de Controle FOR
            A estrutura FOR é uma estrutura de repetição "limitada" pelo programador,
            para sua criação chamamos a função for(1,2,3) sendo 1, 2, 3 os parametros passados
            1 - Atribuição da variavel i (na maioria das vezes)
            2 - Condição que o laço para
            3 - O que fazer se a condição não for atingida.
        */
        echo "<br><br>";
        for($i = 0; $i < count($materias); $i++){
            echo "Estou fazendo ".$materias[$i]." e estou estudando para passar!<br>";
        }

        /*
            Estrutura de Controle WHILE
            Essa estrutura consistem em realizar o loop enquanto a condição 
            entre os () for verdadeira
        */
        echo "<br>";

        $i = 1;
        while($i < 10){
            echo "Numero de Dp's que eu tenho: $i <br>";
            $i++;
        }

        //Exercicio de Estruturas

        //foreach


    ?>
</body>
</html>