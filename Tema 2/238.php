<?php

const ROWS = 6;
const COLS = 9;

$numbers = [];
$selectNumbers = [];

for ($i = 0; $i < ROWS; $i++) {
    for ($j = 0; $j < COLS; $j++) {
        do {
            $number = rand(100, 153);
        } while (in_array ($number, $selectNumbers)) {
            $selectNumbers[] = $number;
            $numbers[$i][$j] = $number;
        }
        }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1px">

    <?php
    for ($i = 0; $i < ROWS; $i++) : ?>
        <tr
            <?php for ($j = 0;
            $j < COLS;
            $j++) : ?>
        >
            <td><?= $numbers[$i][$j] = rand(100, 999); ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>


</body>
</html>