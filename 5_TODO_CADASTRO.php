<?php
$id = $_GET['id']; 
if(isset($id)){
    $alterar = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?if($alterar){echo "Alterar Dados";}else{echo "Cadastrar";}?></title>
</head>
<body>
    <?php require_once("5_TODO_CABECALHO.php");?>

    <form action="5_TODO_CONFIG.php" method="post">
        Tarefa:</br>
        <input type="text" name="dados"></br>
        <?php if($alterar){?>
            <input type="hidden" name="tipo" value="update">
            <input type="hidden" name="id" value="<?php echo $id;?>">
        <?php }else{?>
            <input type="hidden" name="tipo" value="create">
        <?php }?>
        <button type="submit">Enviar</button>
            
    </form>
</body>
</html>