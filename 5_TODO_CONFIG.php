<?php
$host = "localhost";
$dbname = "todo";
$usuario = "root";
$senha = "";

require_once("5_TODO_CABECALHO.php");

if($_GET['id']){
    $delete = $_GET['id'];
    $tipo = "delete";
}else{
    $tipo = $_POST['tipo'];
    $dados = $_POST['dados'];
    $update = $_POST['id'];
}

if(isset($tipo)){
    switch($tipo){
        case 'create':
            try{
                $conexao = new PDO('mysql:host='.$host.';dbname='.$dbname,$usuario,$senha);
                $sql =  "INSERT INTO todos(dados) VALUES (:dados)";
                $stmt =  $conexao->prepare($sql);
                $stmt->bindParam(':dados',$dados);
                $result = $stmt->execute();

                if(!$result){
                    var_dump($stmt->errorInfo());
                }else{
                    echo "Tarefa criada com sucesso.";
                }
            }catch(PDOException $e){
                echo 'Erro ao conectar com o MySql: '. $e->getMessage();
            }
            break;

        case 'delete':
            if(isset($delete)){
                try{
                    $conexao = new PDO('mysql:host='.$host.';dbname='.$dbname,$usuario,$senha);
                    $sql =  'DELETE FROM todos WHERE id = (:id)';
                    $stmt =  $conexao->prepare($sql);
                    $stmt->bindParam(':id',$delete);
                    $result = $stmt->execute();
        
                    if(!$result){
                        var_dump($stmt->errorInfo());
                    }else{
                        echo "Tarefa deletada com sucesso.";
                    }
                }catch(PDOException $e){
                    echo 'Erro ao conectar com o MySql: '. $e->getMessage();
                }
            }else{
                echo 'Falta o parametro ID.';
            }
            break;

        case 'update':
            if(isset($update)){
                if(isset($dados)){
                    try{
                        $conexao = new PDO('mysql:host='.$host.';dbname='.$dbname,$usuario,$senha);
                        $sql =  'UPDATE todos set dados = :dados WHERE id = (:id)';
                        $stmt =  $conexao->prepare($sql);
                        $stmt->bindParam(':id',$update);
                        $stmt->bindParam(':dados',$dados);
                        $result = $stmt->execute();
            
                        if(!$result){
                            var_dump($stmt->errorInfo());
                        }else{
                            echo "Tarefa alterada com sucesso.";
                        }
                    }catch(PDOException $e){
                        echo 'Erro ao conectar com o MySql: '. $e->getMessage();
                    }
                }
            }else{
                echo 'Falta o parametro ID.';
            }
            break;
    }
}else{
    echo "Falta parametro tipo.";
}
