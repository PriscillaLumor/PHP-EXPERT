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

        $sql = 'SELECT * FROM users WHERE id = 1';
        $statement = $db_conn->prepare($sql);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $user = $statement->fetch();

        //echo $user["email"];
        echo $user["firstname"]. "<br>";
        echo $user["lastname"]. "<br>";
        echo $user["email"]. "<br>";
        echo $user["password"]. "<br>";
        echo $user["role"];
        

    ?>

</body>
</html>