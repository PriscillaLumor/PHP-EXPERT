<?php

    require "database.php";

    $sql = "SELECT * FROM users";
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
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h4> Products</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>E-mail</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($database_gegevens as $item)  : ?>

                <tr>
                    <td><?php echo $item["id"]?></td>
                    <td><?php echo $item["firstname"]?></td>
                    <td><?php echo $item["lastname"]?></td>
                    <td><?php echo $item["email"]?></td>
                    <td><?php echo $item["password"]?></td>
                    <td><?php echo $item["role"]?></td>
                        
                    <td>
                        <a href="user_delete.php?id=<?php echo $item["id"]?>">Delete</a>
                    </td>
                </tr> 
                <?php endforeach; ?>  
            </tbody>

        </table>
    </div>
    
</body>
</html>