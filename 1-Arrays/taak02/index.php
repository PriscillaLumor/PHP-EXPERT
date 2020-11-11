<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $medewerkers = [
                [
                    'voornaam' => 'Willem',
                    'achternaam' => ' van Oranje',
                    'functie'  => 'koning'
                ],
                [
                    'voornaam' => 'Donald',
                    'achternaam' => ' Trump',
                    'functie'  => 'president'
                ],
                [
                    'voornaam' => 'Homer',
                    'achternaam' => ' Simpson',
                    'functie'  => 'fabrieksarbeider'
                ],
                [
                    'voornaam' => 'Johan',
                    'achternaam' => ' Cruyff',
                    'functie'  => 'voetbalicoon'
                ],
                [
                    'voornaam' => 'Badr',
                    'achternaam' => ' Hari',
                    'functie'  => 'Kickboxer'
                ]
            ];

            //echo $medewerkers[0]['voornaam']; 
            //echo $medewerkers[1]['voornaam'];

            for ($row = 0; $row < 5; $row++) {
                //echo "<p><b> Array  $row</b></p>";
                echo "<ul>";
                //for ($col = 0; $col < 3; $col++) {
                echo "<li>".$medewerkers[$row]['voornaam'].$medewerkers[$row]['achternaam'].' is een '.$medewerkers[$row]['functie']."</li>";
                //}
                echo "</ul>";
            }
        ?>

        
    </body>
</html>