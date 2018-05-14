<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    /* O método POST tem como função 'esconder' os parametros, 
    mesmo não passando parametros o post cria a variavel, 
    por isso devemos verificar o post com a função empty*/

    if(isset($email,$senha) && !empty($email) && !empty($senha)){
        if($email == "teste@teste.com" && $senha == "123456"){
            echo "Ora ora temos um xeroque rolmes aqui!";
        }else{
            echo "Não tente me hackear espertinho.";
        }
    }else{
        echo "Está faltando parâmetros";
    }