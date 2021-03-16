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
    
        class Auto {
            public $merk;
            public $kleur;
            public $type;
            public $uitvoering;
            public $brandstof;
        }
              
        $nieuweAuto = new Auto();
        $nieuweAuto->merk = "Tesla";
        $nieuweAuto->kleur = "Rood";
        $nieuweAuto->type = "Model 3";
        $nieuweAuto->uitvoering = "Cabrio";
        $nieuweAuto->brandstof = "Elektrisch"; 

    
        echo $nieuweAuto->merk;
        echo "<br>";
        echo $nieuweAuto->kleur;
        echo "<br>";
        echo $nieuweAuto->type;
        echo "<br>";
        echo $nieuweAuto->uitvoering;
        echo "<br>";
        echo $nieuweAuto->brandstof;


        $nogEenNieuweAuto = new Auto();
    
    ?>


</body>
</html>