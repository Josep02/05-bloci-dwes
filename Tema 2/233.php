<?php

    $counter = array(
        "M" => 0,
        "F" => 0,
    );

    for ($i = 0; $i < 100; $i++) {
        $people[$i] = rand(0,1);

        if ($people[$i] == 1) {
            $people[$i] = "M";
        } else {
            $people[$i] = "F";
        }
    }

    print_r($people);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat 233</title>
</head>
<body>
</body>
</html>