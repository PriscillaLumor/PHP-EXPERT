<?php

    require "database.php";
    $id = $_GET["ID"];


    $sql = "SELECT Title FROM superheroes WHERE ID = :ph_id";
    $stmt = $db_conn->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_id", $id);
    $stmt->execute();
    $item = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //header("location: superheroes_show.php");

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
        <h1> Heroes</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Alignment</th>
                    <th>Gender</th>
                    <th>Identity</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>

                 <tr>
                    <td><?php echo $item["ID"]?></td>
                    <td><?php echo $item["Title"]?></td>
                    <td><?php echo $item["Alignment"]?></td>
                    <td><?php echo $item["Identity"]?></td>
                    <td><?php echo $item["PlaceOfBirth"]?></td>
                    <td><?php echo $item["Citizenship"]?></td>
                    <td><?php echo $item["Occupation"]?></td>
                    <td><?php echo $item["PlaceOfDeath"]?></td>
                    <td><?php echo $item["MaritalStatus"]?></td>
                    <td><?php echo $item["Gender"]?></td>
                    <td><?php echo $item["Height"]?></td>
                    <td><?php echo $item["Weight"]?></td>
                    <td><?php echo $item["Eyes"]?></td>
                    <td><?php echo $item["Hair"]?></td>
                    
                    <td>
                        <a href="superheroes_show.php?ID=<?php echo $item["ID"]?>">More</a>
                    </td>
                </tr>

            </tbody>

        </table>
    </div>
    

</body>
</html>