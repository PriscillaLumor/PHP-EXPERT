<?php

    require "database.php";

    $sql = "SELECT * FROM locations";
    $statement = $db_conn->prepare($sql);
    $statement->execute();
    $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($database_gegevens as $key){
        echo $key["name"];
        echo $key["address"];
        echo $key["city"]. "<br>";
    }

?>