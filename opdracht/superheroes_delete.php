<?php 

    require "database.php";
    $id = $_GET["ID"];

    //VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
    $sql = "DELETE FROM superheroes WHERE ID = :ph_id";
    $stmt = $db_conn->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_id", $id);
    $stmt->execute();

    header("location: superheroes_index.php");

?>