<?php
declare(strict_types=1);

function esParell(int $num): bool {

    if ($num%2 == 0) {
        return true;
    } else {
        return false;
    }
    }

    $n = rand(0,99);

    echo "<p>$n</p>";

    $result = esParell($n);

    if ($result == true) {
        echo "Es parell";
    } else {
        echo "No es parell";
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

</body>
</html>