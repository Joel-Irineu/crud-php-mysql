<?php
    $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    //insert
    if(isset($_POST['name'])){
        $sql = $pdo->prepare("INSERT INTO clients VALUES (NULL, ?,?)");
        $sql->execute(array($_POST['name'],$_POST['email']));
        echo '<script>alert("inserido com sucesso!")</script>';
    }
?>

<form action="" method="post"> 
    <input type="text" name="name" id="name">
    <input type="text" name="email" id="email">
    <input type="submit" value="enviar">
</form>