<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat 205</title>
</head>
<body>
<?php

    $edad = 33;
    $currentYear = date ("Y");

?>

    <p>La persona te <?= $edad ?> anys.</p>
    <p>En 10 anys la persona tindrà <?= $edad + 10 ?> anys.</p>
    <p>Fa 10 anys la persona tenia <?= $edad - 10 ?> anys.</p>
    <p>Si tot va be la persona es jubilarà en l'any <?= ($currentYear + (67 - $edad)) ?></p>

</body>
</html>