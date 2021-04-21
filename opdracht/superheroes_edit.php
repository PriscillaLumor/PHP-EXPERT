<?php

    require "database.php";

    if (isset($_POST["form-update"] ) && $_POST["form-id"] !="") {

        $ID = $_POST["form-id"];
        $Title = $_POST["form-title"];
        $Alignment = $_POST["form-alignment"];
        $Identity = $_POST["form-identity"];
        $PlaceOfBirth = $_POST["form-placeofbirth"];
        $Citizenship = $_POST["form-citizen"];
        $Occupation = $_POST["form-occupation"];
        $MaritalStatus = $_POST["form-maritalstatus"];
        $Gender = $_POST["form-gender"];
        $Height = $_POST["form-height"];
        $Weight = $_POST["form-weight"];
        $Eye = $_POST["form-eye"];
        $Hair = $_POST["form-hair"];
        $PlaceOfDeath = $_POST["form-placeofdeath"];

        $sql = "UPDATE superheroes SET Title = :ph_title, Alignment = :ph_alignment, Identity = :ph_identity, 
        PlaceOfBirth = :ph_placeofbirth, Citizenship = :ph_citizen, Occupation = :ph_occupation, MaritalStatus = :ph_maritalstatus,
        Gender = :ph_gender, Height = :ph_height; Weight = :ph_weight, Hair = :ph_hair, Eye = :ph_eye; PlaceOfDeath = :ph_placeofdeath WHERE ID = :id";
        $stmt = $db_conn->prepare($sql); 
        $stmt->bindParam(":id", $ID );
        $stmt->bindParam(":ph_title", $Title );
        $stmt->bindParam(":ph_alignment", $Alignment );
        $stmt->bindParam(":ph_identity", $Identity );
        $stmt->bindParam(":ph_PlaceOfBirth", $PlaceOfBirth );
        $stmt->bindParam(":ph_citizen", $Citizenship );
        $stmt->bindParam(":ph_occupation", $Occupation);
        $stmt->bindParam(":ph_maritalstatus", $MaritalStatus);
        $stmt->bindParam(":ph_gender", $Gender);
        $stmt->bindParam(":ph_height", $Height);
        $stmt->bindParam(":ph_weight", $Weight);
        $stmt->bindParam(":ph_eye", $Eye);
        $stmt->bindParam(":ph_hair", $Hair);
        $stmt->bindParam(":ph_placeofdeath", $PlaceOfDeath);
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
                <h1>Update Superheroes</h1>
                Id: <br> <input type = "number" name = "form-id" class= "form-id" id = "form-id"><br><br>
                Title: <br> <input type = "text" name = "form-title" class= "form-title" id = "form-title"><br><br>
                Alignment: <br> <input type = "text" name = "form-alignment" class= "form-alignment" id = "form-alignment"><br><br>
                Identity: <br> <input type = "text" name = "form-identity" class= "form-identity" id = "form-identity"><br><br>
                Place Of Birth: <br> <input type = "text" name = "form-placeofbirth" class= "form-placeofbirth" id = "form-placeofbirth"><br><br>
                Citizenship: <br> <input type = "text" name = "form-citizen" class= "form-citizen" id = "form-citizen"><br><br>
                Occupation: <br> <input type = "text" name = "form-occupation" class= "form-occupation" id = "form-occupation"><br><br>
                Marital Status: <br> <input type = "text" name = "form-maritalstatus" class= "form-maritalstatus" id = "form-maritalstatus"><br><br>
                Gender: <br> <input type = "text" name = "form-gender" class= "form-gender" id = "form-gender"><br><br>
                Height: <br> <input type = "number" name = "form-height" class= "form-height" id = "form-height"><br><br>
                Weight: <br> <input type = "number" name = "form-weight" class= "form-weight" id = "form-weight"><br><br>
                Eye Color: <br> <input type = "text" name = "form-eye" class= "form-eye" id = "form-eye"><br><br>
                Hair Color: <br> <input type = "text" name = "form-hair" class= "form-hair" id = "form-hair"><br><br>
                Place Of Death: <br> <input type = "text" name = "form-placeofdeath" class= "form-placeofdeath" id = "form-placeofdeath"><br><br>


                <button type = "submit" name = "form-update" class= "form-update">Update</button>
            </form>
        </div>
    </main>
</body>
</html>