<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>TodoApp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center bg-secondary">
        <h1>TODO APP WITH PHP</h1>
        <form class="w-100 mt-4" action="addtask.php" method="post">
            <div class="input-group">
                <input name="description" class="form-control" type="text" placeholder="Add description for your task">
                <button type="submit" class="btn btn-primary ml-2">Add task</button>
            </div>
        </form>
        <table class="table table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Description</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("connection.php");
                    $rs = $pdo->query("select * from tasks");
                    $rs = $rs->fetchAll();
                    foreach($rs as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td>
                                <a href="http://localhost/TodoApp/delete.php?id=<?php echo $row['id'] ?>">Deletar</a>
                                <a href="http://localhost/TodoApp/edit.php?id=<?php echo $row['id'] ?>">Editar</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>     
    </div>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>