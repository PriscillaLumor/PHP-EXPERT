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

        $provincies = [

            [
                'provincie' => 'Groningen',
                'hoofdstad' => 'Groningen',
                'bevolking'  => 585.866,
                'meeste inwoners'  => 'Groningen'
            ],
            [
                'provincie' => 'Friesland',
                'hoofdstad' => 'Leeuwarden',
                'bevolking'  => 649.957,
                'meeste inwoners'  => 'Leeuwarden'
            ],
            [
                'provincie' => 'Drenthe',
                'hoofdstad' => 'Assen',
                'bevolking'  => 493.682,
                'meeste inwoners'  => 'Emmen'
            ],
            [
                'provincie' => 'Overijssel',
                'hoofdstad' => 'Zwolle',
                'bevolking'  => 1.162406, 
                'meeste inwoners'  => 'Enschede'
            ],
            [
                'provincie' => 'Flevoland',
                'hoofdstad' => 'Lelystad',
                'bevolking'  => 423.021,
                'meeste inwoners'  => 'Almere'
            ],
            [
                'provincie' => 'Gelderland',
                'hoofdstad' => 'Arnhem',
                'bevolking'  => 2.085952,
                'meeste inwoners'  => 'Nijmegen'
            ],
            [
                'provincie' => 'Utrecht',
                'hoofdstad' => 'Utrecht',
                'bevolking'  => 1.354834,
                'meeste inwoners'  => 'Utrecht'
            ],
            [
                'provincie' => 'Noord-Holland',
                'hoofdstad' => 'Haarlem',
                'bevolking'  => 2.879527,
                'meeste inwoners'  => 'Amsterdam'
            ],
            [
                'provincie' => 'Zuid-Holland',
                'hoofdstad' => 'Den Haag',
                'bevolking'  => 3.708696,
                'meeste inwoners'  => 'Rotterdam'
            ],
            [
                'provincie' => 'Zeeland',
                'hoofdstad' => 'Middelburg',
                'bevolking'  => 383.488,
                'meeste inwoners'  => 'Terneuzen'
            ],
            [
                'provincie' => 'Noord-Brabant',
                'hoofdstad' => 's-Hertogenbosch',
                'bevolking'  => 2.562955,
                'meeste inwoners'  => 'Eindhoven'
            ],
            [
                'provincie' => 'Limburg',
                'hoofdstad' => 'Maastricht',
                'bevolking'  => 1.117201,
                'meeste inwoners'  => 'Maastricht'
            ],

        ];

        foreach($provincies as $provincie ){
            echo '<h2>' . $provincie['provincie']. '</h2>';
            echo '<ul>';
            echo '<li>Hoofdstad: ' . $provincie['hoofdstad']. '</li>';
            echo '<li>Bevolking: ' . $provincie['bevolking']. '</li>';
            echo '<li>Gemeente met het meeste inwoners: ' . $provincie['meeste inwoners']. '</li>';
            echo '</ul>';

        }


    ?>

</body>
</html>