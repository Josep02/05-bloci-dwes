<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$url = $_POST["url"];

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 403 </title>
</head>
<body>
<table>
    <tr>
        <th>Nom:</th>
        <td><?= $name ?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <th>Telefon:</th>
        <td><?= $phone ?></td>
    </tr>
    <tr>
        <th>URL:</th>
        <td><?= $url ?></td>
    </tr>
</table>

</body>
</html>