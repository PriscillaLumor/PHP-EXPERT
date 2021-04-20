<?php

    require "database.php";

    if (isset($_POST["form-update"] ) && $_POST["form-id"] !="") {

        $id = $_POST["form-id"];
        $firstname = $_POST["form-firstname"];
        $lastname = $_POST["form-lastname"];
        $email = $_POST["form-email"];
        $password = $_POST["form-password"];
        $role = $_POST["form-role"];

        $sql = "UPDATE users SET firstname = :ph_firstname, lastname = :ph_lastname, email = :ph_email, 
        password = :ph_password, role = :ph_role WHERE id = :id";
        $stmt = $db_conn->prepare($sql); 
        $stmt->bindParam(":id", $id );
        $stmt->bindParam(":ph_firstname", $firstname );
        $stmt->bindParam(":ph_lastname", $lastname );
        $stmt->bindParam(":ph_email", $email );
        $stmt->bindParam(":ph_password", $password );
        $stmt->bindParam(":ph_role", $role );
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

                Id: <input type = "number" name = "form-id" class= "form-id" id = "form-id"><br>
                Firstname: <input type = "text" name = "form-firstname" class= "form-firstname" id = "form-firstname"><br>
                Lastname: <input type = "text" name = "form-lastname" class= "form-lastname" id = "form-lastname"><br>
                Email: <input type = "text" name = "form-email" class= "form-email" id = "form-email"><br>
                Password: <input type = "password" name = "form-password" class= "form-password" id = "form-password"><br>
                Role: <input type = "number" name = "form-role" class= "form-role" id = "form-role"><br>


                <button type = "submit" name = "form-update" class= "form-update">Update</button>
            </form>
        </div>
    </main>

</body>
</html>