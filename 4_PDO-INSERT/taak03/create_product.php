<?php

    require "database.php";

    if (isset($_POST["form-addprice"] ) && $_POST["form-name"] !="") {

        $name = $_POST["form-name"];
        $purchase_price = $_POST["form-purchase_price"];
        $selling_price = $_POST["form-selling_price"];
      
        //ZET WAARDE IN DATABASE
        $sql = "INSERT INTO products (name, purchase_price, selling_price) VALUES (:ph_name, :ph_purchase_price, :ph_selling_price)" ;
        $stmt = $db_conn->prepare($sql); //stuur naar mysql.
        $stmt->bindParam(":ph_name", $name );
        $stmt->bindParam(":ph_purchase_price", $purchase_price );
        $stmt->bindParam(":ph_selling_price", $selling_price );
       
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
                Purchase-price: <input type = "text" name = "form-purchase_price" class= "form-purchase_price" id = "form-purchase_price"><br>
                Selling-price: <input type = "text" name = "form-selling_price" class= "form-selling_price" id = "form-selling_price"><br>

                <button type = "submit" name = "form-addprice" class= "form-addprice">Vestuur</button>
            </form>
        </div>
    </main>
</body>
</html>