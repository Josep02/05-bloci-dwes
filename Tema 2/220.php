<?php

    $inici = $_GET["inici"];
    $final = $_GET["final"];

    for ($i = $inici ; $i <= $final ; $i++) {
        if (($i%2) == 0) {
            echo "<p>  $i  </p>";
        }
    }

/*
    $range = range($inici, $final);

    for ($i = 0 ; $i <= $final ; $i++) {
        if (($range[$i]%2) == 0) {
            echo "<p>  $range[$i]  </p>";
        }
    }
*/

?>

<head>
    <meta charset="UTF-8">
    <title>Activitat 220</title>
</head>
<body>


</body>
</html>