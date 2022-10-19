<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$url = $_POST["url"];
$genre = $_POST["genre"];
$hobbies = $_POST["hobbies"];
$contact_time = $_POST["contact_time"];

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 405 </title>
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
    <tr>
        <th>Genre:</th>
        <td><?= $genre ?></td>
    </tr>
    <tr>
        <th>Hobbies:</th>
        <td><?= $hobbies ?></td>
    </tr>
    <tr>
        <th>Contact time:</th>
        <td><?= $contact_time ?></td>
    </tr>
</table>

</body>
</html>