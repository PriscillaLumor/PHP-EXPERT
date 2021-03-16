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

        class Robot{
            public $naam;
            public $geluid;
            public $voortstuwing;

            function getSound(){
                return $this->geluid;
            }
        }

        $wally = new Robot();
        $wally->naam = "wal-e";
        $wally->geluid = "beepboop";
        $wally->voortstuwing = "rollend";

        $wolly = new Robot();
        $wolly->naam = "wol-e";
        $wolly->geluid = "boopbeep";
        $wolly->voortstuwing = "lopend";

        echo $wally->geluid;
        echo "<br>";
        echo $wolly->geluid;

    ?>

</body>
</html>