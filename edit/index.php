<?php
    $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id = (int)$_GET['id'];

        $sql = $pdo->prepare("UPDATE clients SET name=?, email=? WHERE id=?");
        $sql->execute([$name, $email, $id]);
        echo '<script>alert("deletado com sucesso!")</script>';
        header('Location: /crud-php-mysql');
    }
?>

<form action="" method="post"> 
    <?php print   '<input type="text" name="name" id="name" value="'.$_GET['name'].'">'; ?>
    <?php print   '<input type="text" name="email" id="email" value="'.$_GET['email'].'">'; ?>
    <input type="submit" value="editar">
</form>

