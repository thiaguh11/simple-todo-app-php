<?php
    require_once("connection.php");
    $id = addslashes($_GET['id']);
    
    if(isset($_POST['submit'])){
        $description = addslashes($_POST['description']);
        $prepare = $pdo->prepare("update tasks set description=? where id=?");
        $prepare->bindParam(1,$description);
        $prepare->bindParam(2,$id);
        $prepare->execute();
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TodoApp - Edit task</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form method="post">
        <div class="form-group">
            <input name="description" class="form-control" type="text" placeholder="New description">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Change task</button>
    </form>
</body>
</html>