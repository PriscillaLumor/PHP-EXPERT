<?php 

    require "database.php";
    $id = $_GET["id"];

    //VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
    $sql = "DELETE FROM users WHERE id = :ph_id";
    $stmt = $db_conn->prepare($sql); //stuur naar mysql.
    $stmt->bindParam(":ph_id", $id);
    $stmt->execute();

    header("location: user_index.php");

?>