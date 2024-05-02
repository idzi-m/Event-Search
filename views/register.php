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
            <legend class="section__legend">Twoje dane:</legend>

            <div class="form__group">
                <label hidden for="name">Imię lub nick</label>
                <input id="name" type="text" placeholder="Login" minlength="3" maxlength="20" size="12" required autofocus class="field-input">
            </div>

            <div class="form__group">
                <label hidden for="password">Hasło</label>
                <input id="password" type="password" placeholder="Hasło" minlength="8" required class="field-input">
            </div>

            <div class="form__group">
                <label hidden for="password_repeat">Powtórz hasło</label>
                <input id="password_repeat" placeholder="Powtórz Hasło" type="password" minlength="8" required class="field-input">
            </div>

            <div class="form__group">
                <label hidden for="phone">Numer telefonu</label>
                <input id="phone" type="tel" pattern="[0-9]{9}"  placeholder="Numer telefonu" title="wprowadź 9 cyfer" required class="field-input">
            </div>

            <div class="form__group">
                <label hidden for="miasto">Miasto</label>
                <input id="miasto" type="text" class="field-input" placeholder="Miasto">
            </div>

            <div class="form__group">
                <label hidden for="email">Email</label>
                <input id="email" type="text" class="field-input" placeholder="Adres email">
            </div>
            
            <div class="form__group">
                <label hidden for="birth-date">Data urodzenia</label>
                <input id="birth-date" type="date" min="1918-11-11" class="field-input">
            </div>

            <div class="form__group">
                <label>Płeć:</label>
                <input id="woman" type="radio" name="gender" checked>
                <label for="woman">Kobieta</label>

                <input id="man" type="radio" name="gender">
                <label for="man">Mężczyzna</label>

                <input id="nb" type="radio" name="gender">
                <label for="nb">No-binary</label>
            </div>

            <div class="form__group">
                <label for="file-field">Twój awatar:</label>
                <input id="file-field" type="file" accept="image/*">
            </div>
            <div class="form__group">
                <label for="favorite-color">Ulubiony kolor:</label>
                <input id="favorite-color" type="color" value="#000000" class="form_input">
            </div>
        </fieldset>
        <fieldset class="section section__action">
            <legend class="section__legend">Akcje</legend>
            <button type="submit" class="button__edit">ZAPISZ</button>
            <button type="reset" class="button__clear">RESETUJ FORMULARZ</button>
            <button type="button" onclick="window.location.href='index.php'" class="button">ANULUJ</button>
        </fieldset>
    </form>
</body>
</html>