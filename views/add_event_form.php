<?php
include '../php_scripts/session.php';
?>
<!DOCTYPE html>
<html lang="pl" class="document">
<head>
    <meta charset="UTF-8">
    <title>Dodaj nowe wydarzenie</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class='content'>

<header class="header">
        <h1>EventSearch - Wyszukiwarka eventów!</h1>
        <p><?php echo $user_message; ?></p>
    </header>

<form method="post" action= "../db_scripts/event/event_add.php">
<fieldset class="section">
        <legend class="section_legend">Dodaj nowe wydarzenie!</legend>
    <input class="field_input" type="text" name="eventName" placeholder="Nazwa wydarzenia" required ><br>
    <input class="field_input" type="datetime-local" name="eventDate" placeholder="Data i godzina wydarzenia" required ><br>
    <input class="field_input" type="text" name="eventCity" placeholder="Miasto" required ><br>
    <input class="field_input" type="text" name="eventType" placeholder="Typ wydarzenia"><br>
    <input class="field_input" type="text" name="eventLocation" placeholder="Lokalizacja" required ><br>
    <input class="field_input" type="number" name="eventPrice" placeholder="Cena"><br>
    <input class="field_input" type="textarea" name="eventShortDesc" placeholder="Krótki opis"><br>
    <input class="field_input" type="textarea" name="eventLongDesc" placeholder="Długi opis wydarzenia"><br>

</fieldset> 
<fieldset class="section section_action">
    <legend class="section_legend">Akcje</legend>        
    <button class="button_edit" type="submit" name="add">DODAJ</button>
    <button type="reset" class="button_clear">RESETUJ FORMULARZ</button>
    <button class="button" onclick="window.location.href='index.php'" name="cancel">ANULUJ</button>
</fieldset>
</form>
<footer class="footer">
        <p>&copy; 2024 EventSearch.</p>
        <p>Find me on <a href="https://github.com/idzi-m" target="_blank">GitHub</a></p>
    </footer>
</body>
</html>
