<?php
    require_once("connection.php");

    $id = addslashes($_GET['id']);
    $prepare = $pdo->prepare("delete from tasks where id=?");
    $prepare->bindParam(1,$id);
    $prepare->execute();
    header("Location: index.php");
?>