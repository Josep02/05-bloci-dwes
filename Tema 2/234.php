<?php

    $quantitat = 222;
    $quantitatInicial = $quantitat;

    $valorBitllets = [
        "bitllet de 500" => 500,
        "bitllet de 200" => 200,
        "bitllet de 100" => 100,
        "bitllet de 50" => 50,
        "bitllet de 20" => 20,
        "bitllet de 10" => 10,
        "bitllet de 5" => 5,
        "moneda de 2" => 2,
        "moneda de 1" => 1,
    ];

    $quantitatBillets = [
        "bitllet de 500" => 0,
        "bitllet de 200" => 0,
        "bitllet de 100" => 0,
        "bitllet de 50" => 0,
        "bitllet de 20" => 0,
        "bitllet de 10" => 0,
        "bitllet de 5" => 0,
        "moneda de 2" => 0,
        "moneda de 1" => 0,
    ];

    $billets500 = intdiv($quantitat, 500);
    $quantitat = $quantitat % 500;

    $billets200 = intdiv($quantitat, 200);
    $quantitat = $quantitat % 200 + $billets200;

    $billets100 = intdiv($quantitat, 100);
    $quantitat = $quantitat % 100 + $billets100;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>234</title>
</head>
<body>

</body>
</html>