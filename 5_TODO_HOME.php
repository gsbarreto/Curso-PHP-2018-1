<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
<table>
<tr>
    <th>ID</th>
    <th>Tarefa</th> 
    <th>Alterar</th>
    <th>Deletar</th>
</tr>
<?php
    $host = "localhost";
    $dbname = "todo";
    $usuario = "root";
    $senha = "";

    try{
        $conexao = new PDO('mysql:host='.$host.';dbname='.$dbname,$usuario,$senha);
        $sql =  "SELECT * FROM todos";
        $stmt =  $conexao->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $row) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['dados']."</td>";
            echo "<td><a href='/5_TODO_CADASTRO.php?id=".$row['id']."'>Alterar</d></th>";
            echo "<td><a href='/5_TODO_CONFIG.php?id=".$row['id']."'>Deletar</d></th>";
            echo "</tr>"; 
        }
    }catch(PDOException $e){
        echo 'Erro ao conectar com o MySql: '. $e->getMessage();
    }
?>

<?php require_once("5_TODO_CABECALHO.php");?>
</table>   
</body>
</html>
