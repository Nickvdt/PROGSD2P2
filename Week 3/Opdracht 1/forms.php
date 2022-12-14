<?php
/*
 * 1. Header en Footer komen uit de gezamenlijke header en footer bestanden.
 * 2. Stijl (css) moet correct werken.
 * 3. Houdt de standaard directory structuur aan, private en public.
 * 4. Maak het formulier af zoals gevraagd.
 * 5. Maak het script af zodat het fomulier wordt verwerkt.
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo 'Voorbeeld formulier'; ?>></title>
</head>


<form action="" method="post">
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
    <?php
    /*
     * Invoer velden:
     * 1. Naam
     * 2. E-mail
     * 3. Opmerking
     */

    /*
     * Resultaat:
     * 1. Controle op script invoer
     * 2. Controle op geldig e-mail adres
     * 3. Opmerkingen en naam veld controle niet toegestane reacties
     */

    if (!isset($_POST['user'], $_POST['email'],$_POST['message'],$_POST['button'])) {
        die;
    } {
        if (empty(trim(stripslashes(htmlspecialchars($_POST['user']))))) {
            echo'Ongeldige gebruikersnaam';
        }
    
        if (empty(trim(stripslashes(htmlspecialchars($_POST['email']))))) {
            echo'Ongeldige email';
        }
    
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)) {
            echo 'Ongeldig email formaat';
        }
        if (empty(trim(stripslashes(htmlspecialchars($_POST['message']))))) {
            echo'Ongeldige bericht';
        }
    }

    ?>
</form>

<body>

</body>
</html>