<?php

    require "database.php";

    $sql = "SELECT * FROM products";
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
                    <th>Name</th>
                    <th>Purchase_price</th>
                    <th>Selling_price</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($database_gegevens as $item)  : ?>

                <tr>
                    <td><?php echo $item["id"]?></td>
                    <td><?php echo $item["name"]?></td>
                    <td><?php echo $item["purchase_price"]?></td>
                    <td><?php echo $item["selling_price"]?></td>
                        
                    <td>
                        <a href="products_delete.php?id=<?php echo $item["id"]?>">Delete</a>
                    </td>
                </tr> 
                <?php endforeach; ?>  
            </tbody>

        </table>
    </div>
    
</body>
</html>