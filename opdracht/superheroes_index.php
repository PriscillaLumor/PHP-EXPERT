<?php

    require "database.php";

    $sql = "SELECT * FROM superheroes";
    $statement = $db_conn->prepare($sql); 
    $statement->execute();
    $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</table>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1> Superheroes Table </h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Alignment</th>
                    <th>Gender</th>
                    <th>Identity</th>
                    <th>More</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($database_gegevens as $item)  : ?>

                <tr>
                    <td><?php echo $item["ID"]?></td>
                    <td><?php echo $item["Title"]?></td>
                    <td><?php echo $item["Alignment"]?></td>
                    <td><?php echo $item["Gender"]?></td>
                    <td><?php echo $item["Identity"]?></td>
                    <td>
                        <a href="superheroes_show.php/?ID=<?php echo $item["ID"]?>">More</a>
                    </td>

                    <td>
                        <a href="superheroes_edit.php/?ID=<?php echo $item["ID"]?>">Update</a>
                    </td>

                    <td>
                        <a href="superheroes_delete.php?id=<?php echo $item["ID"]?>">Delete</a>
                    </td>
                </tr>

                <?php endforeach; ?>  
            </tbody>

        </table>
    </div>
    
</body>
</html>