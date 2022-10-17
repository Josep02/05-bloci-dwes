<?php

include_once ("CardCollection.php");
include_once ("Card.php");

$card1 = new Card("Spades", "A", 13);
$card2 = new Card("Hearts", "J", 10);
$card3 = new Card("Diamond", "2", 2);
$card4 = new Card("Spades", "9", 9);
$card5 = new Card("Diamond", "K", 12);
$card6 = new Card("Hearts", "5", 5);

$deck = array ($card1, $card2, $card3, $card4, $card5);

$cardCollection = new CardCollection($deck);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>308</title>
</head>
<body>
<pre>
    <?php
    print_r ($cardCollection);
    ?>

</pre>

</body>
</html>
