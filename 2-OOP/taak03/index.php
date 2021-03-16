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
        class Product{
            public $merk;
            public $prijs;
            public $type;
            public $kleur;
        }

        $dweil = new Product();
        $dweil->merk = "Hema";
        $dweil->prijs = 10;
        $dweil->type = "Lang";
        $dweil->kleur = "Rood";

        $stofzuiger = new Product();
        $stofzuiger->merk = "Aegon";
        $stofzuiger->prijs = 50;
        $stofzuiger->type = "Gfs505";
        $stofzuiger->kleur = "Grijs";
    ?>

</body>
</html>