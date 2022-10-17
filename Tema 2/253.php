<?php
declare(strict_types=1);

    function suma(int $a, int $b): int {
        return ($a + $b);
    }

    function resta(int $a, int $b): int {
        return ($a - $b);
    }

    function multiplicacio(int $a, int $b): int {
        return ($a * $b);
    }

    function divisio(int $a, int $b): int {
        return ($a / $b);
    }

    $funcions = ["suma", "resta", "multiplicacio", "divisio"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>253</title>
</head>
<body>
<?php

    $num1 = 24;
    $num2 = 4;

    echo "<p> Suma: " . suma($num1,$num2) . "</p>";
    echo "<p> Resta: " . resta($num1,$num2) . "</p>";
    echo "<p> Multiplicació: " . multiplicacio($num1,$num2) . "</p>";
    echo "<p> Divisió: " . divisio($num1,$num2) . "</p>";

?>
</body>
</html>