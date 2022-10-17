<?php

include_once "employee.php";

/*
$name = $_GET["name"];
$lastname = $_GET["lastname"];
$salary = $_GET["salary"];
*/

$name = "carlos";
$lastname = "femenia";
$salary = 3400;

$employee1 = new Employee($name, $lastname, $salary);

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

<?php

echo "<p>" . $employee1->getFullName() . "</p>";

$employee1->mustPayTaxes()

?>

</body>
</html>