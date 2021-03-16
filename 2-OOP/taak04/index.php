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

        class Scooter{
            public $kleur;
            public $merk;
            public $inhoudTank;

            function checkBrandstofTank(){
                if($this->inhoudTank == 6){
                    echo "De Piago brandstoftank is vol!";
                } elseif($this->inhoudTank == 7){
                    echo "De Peugeot brandstoftank is vol!";
                } else {
                    echo "De andere brandstoftank is niet vol";
                }
            }
        }

        $piago = new Scooter();
        $piago->kleur = "Piago";
        $piago->merk = "Rood";
        $piago->inhoudTank = 6;

        $peugeot = new Scooter();
        $peugeot->kleur = "Peugeot";
        $peugeot->merk = "Zwart";
        $peugeot->inhoudTank = 7;

        echo $piago->checkBrandstofTank();
        echo "<br>";
        echo $peugeot->checkBrandstofTank();


    ?>

</body>
</html>