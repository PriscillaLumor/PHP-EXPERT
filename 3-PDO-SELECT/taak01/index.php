<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        require "database.php";

        $sql = "SELECT * FROM users";
        $statement = $db_conn->prepare($sql); 
        $statement->execute();
        $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

        //foreach($database_gegevens as $gebruiker){  
            //echo $gebruiker['naam'] . "<br>";
        //}

        foreach ($database_gegevens as $key => $value){
            echo $value['firstname'];
            echo $value['lastname'];
            echo $value['email'];
            echo $value['password'];
            echo $value['role']. "<br>";
        }
            
    

    
        
    ?>

</body>
</html>