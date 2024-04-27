<?php
include '../php_scripts/connection.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
        <form action="script.php" autocomplete="on" method="post" enctype="multipart/form-data">
            <h2>Utwórz konto</h2>
            <fieldset>
                <legend>Twoje dane:</legend>

                <label for="name">Imię lub nick</label>
                <input id="name" type="text" placeholder="np. Barnaba" minlength="3" maxlength="20" size="12" required autofocus ><br>

                <label for="password">Hasło</label>
                <input id="password" type="password" placeholder="np. ABc!@DSA#+" minlength="8" required ><br>

                <label for="password_repeat">Powtórz hasło</label>
                <input id="password_repeat" type="password" minlength="8" required ><br>

                <label for="phone">Numer telefonu</label>
                <input id="phone" type="tel" pattern="[0-9]{9}" title="wprowadź 9 cyfer" required ><br>

                <label for="birth-date">Data urodzenia</label>
                <input id="birth-date" type="date" min="1918-11-11" ><br>

                <label>Płeć:</label>
                <input id="woman" type="radio" name="gender"  checked >
                <label for="woman">Kobieta</label>

                <input id="man" type="radio" name="gender">
                <label for="man">Mężczyzna</label><br>

                <label for="file-field">Twój awatar:</label>
                <input id="file-field" type="file" accept="image/*">
            </fieldset>
            <fieldset>
                         <label for="favorite-color">Ulubiony kolor</label>
                <input id="favorite-color" type="color" value="#000000" ><br>

                
            <button type="submit">Zapisz</button>
            <button type="reset">resetuj formularz</button>
            <button type="button" onclick="window.location.href='index.php'">Anuluj</button>
        </form>
</body>
</html>