<?php
    require_once("connection.php");

    $description = addslashes($_POST['description']);
    $prepare = $pdo->prepare("insert into tasks (description) values(?)");
    $prepare->bindParam(1,$description);
    $prepare->execute();
    header("Location: index.php");
?>