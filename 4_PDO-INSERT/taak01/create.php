<?php

    require "database.php";

    if (isset($_POST["form-add"] ) && $_POST["form-firstname"] !="") {

        $firstname = $_POST["form-firstname"];
      
        //ZET WAARDE IN DATABASE
        $sql = "INSERT INTO users (firstname) VALUES (:ph_firstname)" ;
        $stmt = $db_conn->prepare($sql); //stuur naar mysql.
        $stmt->bindParam(":ph_firstname", $firstname );
       
        $stmt->execute();

        if ( insset ($_POST["form-add"] ) && $_POST["form-lastname"] != ""){

            $lastname = $_POST["form-lastname"];
      
            //ZET WAARDE IN DATABASE
            $sql = "INSERT INTO users (lastname) VALUES (:ph_lastname)" ;
            $stmt = $db_conn->prepare($sql); //stuur naar mysql.
            $stmt->bindParam(":ph_lastname", $lastname );
       
            $stmt->execute();

        }
    }
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
    
    
    <main class = "form-insert">
        <div>
            <form action = ""  method = "post">
        
                Firstname: <input type = "text" name = "form-firstname" class= "form-firstname" id = "form-firstname"><br>
                Lastname: <input type = "text" name = "form-lastname" class= "form-lastname" id = "form-lastname"><br>

                <button type = "submit" name = "form-add" class= "form-add">Vestuur</button>
            </form>
        </div>
    </main>
</body>
</html>