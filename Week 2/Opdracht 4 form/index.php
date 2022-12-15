<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="formulier" method="POST" action="">
        <h2 class="form__h2">PHP formulier Week 2</h2>
        <div>
            <label for="naam">Naam</label>
            <input type="text" name="user" id="user" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="email">Commentaar</label>
            <input type="text" name="message" id="message" required>
        </div>
        <input class="submit" type="submit" name="button" value="Verzenden">
    </form>
</body>

<?php
if (!isset($_POST['user'], $_POST['email'],$_POST['message'],$_POST['button'])) {
    die;
} {
    if (empty(trim(stripslashes(htmlspecialchars($_POST['user']))))) {
        echo'Ongeldige gebruikersnaam';
    }

    if (empty(trim(stripslashes(htmlspecialchars($_POST['email']))))) {
        echo'Ongeldige email';
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL, )) {
        echo 'Ongeldig email formaat';
    }
    if (empty(trim(stripslashes(htmlspecialchars($_POST['message']))))) {
        echo'Ongeldige bericht';
    }
}

?>
</html>