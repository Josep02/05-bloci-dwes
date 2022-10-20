<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    $name = "";
    $email = "";
    $phone = "";
    $url = "";
    $genre = "";
    $hobbies = [];
    $contact_time = "";

    if (!empty($_POST["name"])) {
        $name = trim(htmlspecialchars($_POST["name"]));
        if (strlen($name) > 99)
            $errors[] = "Nom massa extens";
    } else
        $errors[] = "El nom es obligatori";

    if (!empty($_POST["email"])) {
        if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) == false)
            $errors[] = "Email incorrecte";
        else
            $email = trim(htmlspecialchars($_POST["email"]));
    } else
        $errors[] = "El email es obligatori";

    if (!empty($_POST["phone"])) {
        $phone = trim(htmlspecialchars($_POST["phone"]));
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
            $url = trim(htmlspecialchars($_POST["url"]));
    } else
        $errors[] = "La URL es obligatoria";

    if (!empty($_POST["genre"])) {
        $genre = $_POST["genre"];
    } else
        $errors[] = "El genere es obligatori";

    if (!empty($_POST["hobbies"])) {
        $hobbies = $_POST["hobbies"];
    } else
        $errors[] = "El hobbie es obligatori";

    if (!empty($_POST["contact_time"])) {
        $contact_time = $_POST["contact_time"];
    } else
        $errors[] = "El contact time es obligatori";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 406 </title>
</head>
<body>

<h1> Formulari </h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <p>
            <label for="name"> Nom: </label>
            <input type="text" id="name" name="name" value="<?= $name ?>">
        </p>
        <p>
            <label for="email"> Email: </label>
            <input type="email" id="email" name="email" value="<?= $email ?>">
        </p>
        <p>
            <label for="phone"> Telefon: </label>
            <input type="phone" id="phone" name="phone" value="<?= $phone ?>">
        </p>
        <p>
            <label for="url"> URL: </label>
            <input type="url" id="url" name="url" value="<?= $url ?>">
        </p>
        <p>
            <label> Genere: </label>
            <input type="radio" name="genre" value="Home"/>
            <label> Home </label>
            <input type="radio" name="genre" value="Dona"/>
            <label> Dona </label>
            <input type="radio" name="genre" value="No binari"/>
            <label> No binari </label>
        </p>
        <p>
            <label> Hobbies: </label>
            <input type="checkbox" name="hobbies[]" value="Lectura"/>
            <label> Lectura </label>
            <input type="checkbox" name="hobbies[]" value="Programacio"/>
            <label> Programacio </label>
            <input type="checkbox" name="hobbies[]" value="Ciclisme"/>
            <label> Ciclisme </label>
            <input type="checkbox" name="hobbies[]" value="Correr"/>
            <label> Correr </label>
        </p>
        <p>
            <label> Contact time: </label>
            <select name="contact_time">
                <option value="Primer hora"> Primer hora (08:00 a 10:00)</option>
                <option value="Abans de dinar"> Abans de dinar (12:00 a 13:00)</option>
                <option value="Despres de dinar"> Després de dinar (14:00 a 16:00)</option>
                <option value="A la nit"> A la nit (20:00 a 22:00)</option>
            </select>
        </p>
        <button type="submit"> Enviar</button>
</form>
</div>

<hr/>

<h1> Taula </h1>

<div>
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
            <td><?php foreach ($hobbies as $hobby): ?>
                    <?= $hobby . "<br/> " ?>
                <?php endforeach; ?></td>
        </tr>
        <tr>
            <th>Contact time:</th>
            <td><?= $contact_time ?></td>
        </tr>
    </table>
</div>

</body>
</html>