<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat 210</title>
</head>
<body>
<?php

    $edad = 16;

    if ($edad < 3) {
        echo "Nadó";
    }

    if ($edad >=3 && $edad <=12) {
        echo "Nen";
    }

    if ($edad >=13 && $edad <=17) {
        echo "Adolescent";
    }

    if ($edad >=18 && $edad <=66) {
        echo "Adult";
    }

    if ($edad >=67 ) {
        echo "Jubilat";
    }

?>

</body>
</html>