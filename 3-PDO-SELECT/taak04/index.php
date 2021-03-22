<?php

    require "database.php";

    $sql = 'SELECT * FROM locations WHERE id = 2';
    $statement = $db_conn->prepare($sql);
    $statement->bindParam(":name", $name);
    $statement->execute();
    $user = $statement->fetch();

    //echo $user["email"];
    echo $user["name"]. "<br>";
    echo $user["address"]. "<br>";
    echo $user["city"];
        
?>