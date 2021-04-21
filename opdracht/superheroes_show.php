<?php

    require "database.php";
    $id = $_GET["ID"];


    $sql = "SELECT * FROM superheroes WHERE ID = :ph_id";
    $stmt = $db_conn->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_id", $id);
    $stmt->execute();
    $database_gegevens = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <h1>Discription of <?php echo $database_gegevens["Title"]?></h1>

    <dl>
        <dt><b>ID</b></dt>
        <dd><?php echo $database_gegevens["ID"]?></dd>
        <dt><b>Title</b></dt>
        <dd><?php echo $database_gegevens["Title"]?></dd>
        <dt><b>Alignment</b></dt>
        <dd><?php echo $database_gegevens["Alignment"]?></dd>
        <dt><b>Identity</b></dt>
        <dd><?php echo $database_gegevens["Identity"]?></dd>
        <dt><b>Place Of Birth</b></dt>
        <dd><?php echo $database_gegevens["PlaceOfBirth"]?></dd>
        <dt><b>Citizenship</b></dt>
        <dd><?php echo $database_gegevens["Citizenship"]?></dd>
        <dt><b>Occupation</b></dt>
        <dd><?php echo $database_gegevens["Occupation"]?></dd>
        <dt><b>Marital Status</b></dt>
        <dd><?php echo $database_gegevens["MaritalStatus"]?></dd>
        <dt><b>Gender</b></dt>
        <dd><?php echo $database_gegevens["Gender"]?></dd>
        <dt><b>Height</b></dt>
        <dd><?php echo $database_gegevens["Height"]?></dd>
        <dt><b>Weight</b></dt>
        <dd><?php echo $database_gegevens["Weight"]?></dd>
        <dt><b>Eyes Color</b></dt>
        <dd><?php echo $database_gegevens["Eyes"]?></dd>
        <dt><b>Hair Color</b></dt>
        <dd><?php echo $database_gegevens["Hair"]?></dd>
        <dt><b>Place Of Death</b></dt>
        <dd><?php echo $database_gegevens["PlaceOfDeath"]?></dd>
    </dl>

        
</div>
    

</body>
</html>