<?php

    require "database.php";

    if (isset($_POST["form-addlocate"] ) && $_POST["form-name"] !="") {

        $name = $_POST["form-name"];
        $address = $_POST["form-address"];
        $city = $_POST["form-city"];
      
        //ZET WAARDE IN DATABASE
        $sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name, :ph_address, :ph_city)" ;
        $stmt = $db_conn->prepare($sql); //stuur naar mysql.
        $stmt->bindParam(":ph_name", $name );
        $stmt->bindParam(":ph_address", $address );
        $stmt->bindParam(":ph_city", $city );
       
        $stmt->execute();

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
        
                Name: <input type = "text" name = "form-name" class= "form-name" id = "form-name"><br>
                Address: <input type = "text" name = "form-address" class= "form-address" id = "form-address"><br>
                City: <input type = "text" name = "form-city" class= "form-city" id = "form-city"><br>

                <button type = "submit" name = "form-addlocate" class= "form-addlocate">Vestuur</button>
            </form>
        </div>
    </main>
</body>
</html>