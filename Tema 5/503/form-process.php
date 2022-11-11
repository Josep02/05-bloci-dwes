<?php
declare(strict_types=1);
session_start();

$isPost = false;
$errors = [];

$data["name"] = "";
$data["email"] = "";
$data["phone"] = "";
$data["url"] = "";
$data["selectedGenre"] = "";
$data["selectedHobbies"] = [];
$data["selectedTime"] = [];

require 'inc/data.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isPost = true;
    if (!empty($_POST["name"])) {

        $name = trim(htmlspecialchars($_POST["name"]));

        if (strlen($name) > 99)
            $errors[] = "Nom massa extens";
        else
            $data["name"] = $name;
    } else
        $errors[] = "El nom es obligatori";

    if (!empty($_POST["email"])) {
        if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) == false)
            $errors[] = "Email incorrecte";
        else
            $data["email"] = trim(htmlspecialchars($_POST["email"]));
    } else
        $errors[] = "El email es obligatori";

    if (!empty($_POST["phone"])) {
        $phone = trim(htmlspecialchars($_POST["phone"]));
        $data["phone"] = $phone;
        if (is_string($phone) == true) {
            if (preg_match("/^\d{9}$/", $phone) == 0) {
                $errors[] = "El telèfon ha de contindre 9 digits";
            }
        } else
            $errors[] = "Telèfon incorrecte";
    } else
        $errors[] = "El telèfon es obligatori";


    if (!empty($_POST["url"])) {
        if (filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL) == false)
            $errors[] = "URL incorrecta";
        else
            $data["url"] = trim(htmlspecialchars($_POST["url"]));

    } else
        $errors[] = "La URL es obligatoria";

    if (!empty($_POST["genre"])) {
        $selectedGenre = $_POST["genre"];
        // array_keys, array_intersect
        if (!array_key_exists($selectedGenre, $genres)) {
            $errors[] = "El gènere seleccionat no existeix!";
        } else
            $data["selectedGenre"] = $selectedGenre;
    } else
        $errors[] = "El genere es obligatori";

    if (!empty($_POST["hobbies"])) {
        $selectedHobbies = $_POST["hobbies"];
        foreach ($selectedHobbies as $hobby) {
            // array_keys, array_intersect
            if (!array_key_exists($hobby, $hobbies)) {
                $errors[] = "L'afició seleccionada no existeix!";
            } else
                $data["selectedHobbies"][] = $hobby;
        }
    } else
        $errors[] = "El hobbie es obligatori";

    if (!empty($_POST["contact_time"])) {
        $selectedTime = $_POST["contact_time"];
        foreach ($selectedTime as $time) {
            // array_keys, array_intersect
            if (!array_key_exists($time, $contact_time)) {
                $errors[] = "L'hora seleccionada no existeix!";
            } else
                $data["selectedTime"][] = $time;
        }
    } else
        $errors[] = "El contact time es obligatori";
}

 if ($isPost == false || !empty($errors)) {
     $_SESSION["errors"] = $errors;
     $_SESSION["data"] = $data;
     header('Location: form.php');
     exit();
 } else {
     $_SESSION["data"] = $data;
     header('Location: form-success.php');
     exit();
 }


