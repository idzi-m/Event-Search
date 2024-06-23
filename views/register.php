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
    
    <header class="header">
        <h1>EventSearch - Wyszukiwarka eventów!</h1>
    </header>

    <form method="post" action= "../db_scripts/user/user_add.php" autocomplete="on" class="form_register">
        <fieldset class="section">
            <legend class="section_legend">Twoje dane:</legend>

            <div class="form_group">
                <label hidden for="name">Login</label>
                <input id="name" name= "userFirstName" type="text" placeholder="Pierwsze Imię" minlength="3" maxlength="20" size="12" required autofocus class="field_input">
            </div>

            <div class="form_group">
                <label hidden for="name">Login</label>
                <input id="name" name= "usersecondName" type="text" placeholder="Drugie Imię" minlength="3" maxlength="20" size="12" autofocus class="field_input">
            </div>
            
            <div class="form_group">
                <label hidden for="name">Login</label>
                <input id="name" name= "userLastName" type="text" placeholder="Nazwisko" minlength="3" maxlength="20" size="12" required autofocus class="field_input">
            </div>

            <div class="form_group">
                <label hidden for="name">Login</label>
                <input id="name" name= "userLogin" type="text" placeholder="Login" minlength="3" maxlength="20" size="12" required autofocus class="field_input">
            </div>

            <div class="form_group">
                <label hidden for="password">Hasło</label>
                <input id="password" name= "userPassword" type="password" placeholder="Hasło" minlength="8" required class="field_input">
            </div>

            <div class="form_group">
                <label hidden for="password_repeat">Powtórz hasło</label>
                <input id="password_repeat" placeholder="Powtórz Hasło" type="password" minlength="8" required class="field_input">
            </div>

            <div class="form_group">
                <label hidden for="phone">Numer telefonu</label>
                <input id="phone" name= "userPhone" type="tel" pattern="[0-9]{9}"  placeholder="Numer telefonu" title="wprowadź 9 cyfer" required class="field_input">
            </div>

            <div class="form_group">
                <label hidden for="miasto">Miasto</label>
                <input id="miasto" name= "userCity" type="text" class="field_input" placeholder="Miasto">
            </div>

            <div class="form_group">
                <label hidden for="email">Email</label>
                <input id="email" name= "userEmail" type="text" class="field_input" placeholder="Adres email">
            </div>
            
            <div class="form_group">
                <label hidden for="birth-date">Data urodzenia</label>
                <input id="birth-date" name="userBirthDate" type="date" min="1918-11-11" class="field_input">
            </div>

            <div class="form_group">
                <label>Płeć:</label>
                <input id="woman" type="radio" name="userGender" checked><label for="woman">Kobieta</label>
                <input id="man" type="radio" name="userGender"><label for="man">Mężczyzna</label>
                <input id="nb" type="radio" name="userGender"><label for="nb">No-binary</label>
            </div>

            <div class="form_group">
                <label for="file-field">Twój awatar:</label>
                <input id="file-field" type="file" accept="image/*">
            </div>

            <div class="form_group">
                <label for="favorite-color">Ulubiony kolor:</label>
                <input id="favorite-color" type="color" value="#000000" class="form_input">
            </div>
        </fieldset>
        <fieldset class="section section_action">
            <legend class="section_legend">Akcje</legend>
            <nav id="nav_profile" class="navigation">
            <ul class="navigation-list-buttons">
                <li class="navigation-list-li"><button type="submit" name="add" class="button_edit">ZAPISZ</button></li>
                <li class="navigation-list-li"><button type="reset" class="button_clear">RESETUJ FORMULARZ</button></li>
                <li class="navigation-list-li"><button type="button" onclick="window.location.href='login.php'" class="button">ANULUJ</button></li>
            </ul>
        <nav>
        </fieldset>
    </form>
    <footer class="footer">
        <p>&copy; 2024 EventSearch.</p>
        <p>Find me on <a href="https://github.com/idzi-m" target="_blank">GitHub</a></p>
    </footer>
</body>
</html>
