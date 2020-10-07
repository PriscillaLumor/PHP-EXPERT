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
                    'achternaam' => 'van Oranje',
                    'functie'  => 'koning'
                ],
                [
                    'voornaam' => 'Donald',
                    'achternaam' => 'Trump',
                    'functie'  => 'president'
                ],
                [
                    'voornaam' => 'Homer',
                    'achternaam' => 'Simpson',
                    'functie'  => 'fabrieksarbeider'
                ],
                [
                    'voornaam' => 'Johan',
                    'achternaam' => 'Cruyff',
                    'functie'  => 'voetbalicoon'
                ],
                [
                    'voornaam' => 'Badr',
                    'achternaam' => 'Hari',
                    'functie'  => 'Kickboxer'
                ]
            ];
        ?>

        <table>
            <tr>
                <th>voornaam</th>
                <th>Achternaam</th>
                <th>Functie</th>
            </tr>
            <?php foreach ($medewerkers as $value)  : ?>
            <tr>
                <td><?php echo $value[0]?></td>
                <td><?php echo $value[1]?></td>
                <td><?php echo $value[2]?></td>
            </tr>
            <tr>
                <td><?php echo $value[0]?></td>
                <td><?php echo $value[1]?></td>
                <td><?php echo $value[2]?></td>
            </tr>
            <tr>
                <td><?php echo $value[0]?></td>
                <td><?php echo $value[1]?></td>
                <td><?php echo $value[2]?></td>
            </tr>
            <tr>
                <td><?php echo $value[0]?></td>
                <td><?php echo $value[1]?></td>
                <td><?php echo $value[2]?></td>
            </tr>
            <tr>
                <td><?php echo $value[0]?></td>
                <td><?php echo $value[1]?></td>
                <td><?php echo $value[2]?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>