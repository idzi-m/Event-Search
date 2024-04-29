<?php
include '../php_scripts/connection.php';
?>

<!DOCTYPE html>
<html lang="pl" class="document">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utwórz konto</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="content">
    <form action="script.php" autocomplete="on" method="post" enctype="multipart/form-data" class="form__register">
        <h2 class="form__title">Utwórz konto</h2>
        <fieldset class="section">
            <legend class="section-legend">Twoje dane:</legend>

            <div class="form__group">
                <label for="name">Imię lub nick</label>
                <input id="name" type="text" placeholder="np. Barnaba" minlength="3" maxlength="20" size="12" required autofocus class="form_input">
            </div>

            <div class="form__group">
                <label for="password">Hasło</label>
                <input id="password" type="password" placeholder="np. ABc!@DSA#+" minlength="8" required class="form_input">
            </div>

            <div class="form__group">
                <label for="password_repeat">Powtórz hasło</label>
                <input id="password_repeat" type="password" minlength="8" required class="form_input">
            </div>

            <div class="form__group">
                <label for="phone">Numer telefonu</label>
                <input id="phone" type="tel" pattern="[0-9]{9}" title="wprowadź 9 cyfer" required class="form_input">
            </div>

            <div class="form__group">
                <label for="birth-date">Data urodzenia</label>
                <input id="birth-date" type="date" min="1918-11-11" class="form_input">
            </div>

            <div class="form__group">
                <label>Płeć:</label>
                <input id="woman" type="radio" name="gender" checked>
                <label for="woman">Kobieta</label>

                <input id="man" type="radio" name="gender">
                <label for="man">Mężczyzna</label>
            </div>

            <div class="form__group">
                <label for="file-field">Twój awatar:</label>
                <input id="file-field" type="file" accept="image/*">
            </div>
        </fieldset>

        <fieldset class="section">
            <legend class="section-legend">Ulubiony kolor</legend>
            <div class="form__group">
                <input id="favorite-color" type="color" value="#000000" class="form_input">
            </div>
        </fieldset>

        <div class="form__buttons">
            <button type="submit" class="button__edit">ZAPISZ</button>
            <button type="reset" class="button__clear">RESETUJ FORMULARZ</button>
            <button type="button" onclick="window.location.href='index.php'" class="button">ANULUJ</button>
        </div>
    </form>
</body>
</html>