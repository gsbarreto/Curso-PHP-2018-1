<!--
    Autor: Gabriel Barreto
    Curso de PHP
    Ministrado em Maio/2018
    Realização: DACOMP & UNECT
-->

<?php
    /* 
    O Array associativo $_GET, tem como função procurar um campo com o mesmo nome dado entre as []
    se a página for requisitada pelo método GET
    */
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];
    $cerveja = $_GET['cerveja'];
    //A função isset() tem como objetivo validar de a variável tem um valor válido ou não
    if(isset($nome,$sobrenome,$idade,$cerveja)){
        if($idade >= 18){
            switch($cerveja){
                case 'budweiser':
                    echo 'Boa escolha mas a resposta certa seria Bavaria!';
                    break;
                case 'heineken':
                    echo 'Temos um degustador de cervejas holandesas aqui, sinto muito mas a melhor é a Bavaria!';
                    break;
                case 'original':
                    echo 'Entendo que você gosta de cervejas nacionais, mas você já experimentou a Bavaria?';
                    break;
                case 'skol':
                    echo 'Por favor volte uma página e refaça o formulário.';
                    break;
                case 'bavaria':
                    echo 'Já que o você é um(a) grande aprecidador(a) da melhor cerveja que tal me pagar uma? Hahaha';
                    break;
                case 'nao':
                    echo 'Aprecio sua força de vontade.';
                    break;
                default;
                    echo 'Querendo quebrar meu código né espertinho!';
                    break;
            }
        }else{
            echo "Olha você nem deveria estar bebendo! Alô policia federal!!!!";
        }
    }else{
        echo "Faltam dados no formulário.";
    }