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

        class Lamp{
            public $kleur;
            public $helderheid;
            public $isAan;

            function setStatus($status){
                $this->isAan = false;
            }
        }

        $woonkamerLamp = new Lamp();
        $woonkamerLamp->kleur = "geel";
        $woonkamerLamp->helderheid = "zacht";
        $woonkamerLamp->setStatus(false);

        $keukenLamp = new Lamp();
        $keukenLamp->kleur = "wit";
        $keukenLamp->helderheid = "vel";
        $keukenLamp->isAan = false;

        echo $woonkamerLamp->isAan;

    ?>

</body>
</html>