<?php

    $persones = [
            [
                'nom' => 'Pepe',
                'altura' => 182,
                'email' => 'pepe182@gmail.com'
            ],
            [
                'nom' => 'Aitor',
                'altura' => 210,
                'email' => 'aitor210@gmail.com'
            ],
            [
                'nom' => 'Maria',
                'altura' => 15,
                'email' => 'maria154@gmail.com'
            ],
            [
                'nom' => 'Lluis',
                'altura' => 174,
                'email' => 'lluis174@gmail.com'
            ],
            [
                'nom' => 'Carla',
                'altura' => 165,
                'email' => 'carla165@gmail.com'
            ]
    ];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat  236</title>
</head>
<body>
<table border="1px">
    <th>Nom</th>
    <th>Altura</th>
    <th>Email</th>

    <?php
    foreach ($persones as $index => $valor) {

    ?>
    <tr>
        <td>
            <?= $valor['nom'] ?>
        </td>
        <td>
            <?= $valor['altura'] ?>
        </td>
        <td>
            <?= $valor['email'] ?>
        </td>
    </tr>
    <?php
    }
    ?>

</table>
</body>
</html>