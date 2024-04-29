<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj nowe wydarzenie</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class='content'>
<fieldset class="section">
        <legend class="section-legend">Dodaj nowe wydarzenie!</legend>        
<form method="post" action= "../db_scripts/event/event_add.php">
    <input class="field-input" type="text" name="eventName" placeholder="Nazwa wydarzenia" required ><br>
    <input class="field-input" type="datetime-local" name="eventDate" placeholder="Data i godzina wydarzenia" required ><br>
    <input class="field-input" type="integer" name="eventCity" placeholder="Miasto" required ><br>
    <input class="field-input" type="text" name="eventType" placeholder="Typ wydarzenia"><br>
    <input class="field-input" type="text" name="eventLocation" placeholder="Lokalizacja" required ><br>
    <input class="field-input" type="text" name="eventPrice" placeholder="Cena"><br>
    <input class="field-input" type="textbox" name="eventShortDesc" placeholder="Krótki opis"><br>
    <input class="field-input" type="textbox" name="eventLongDesc" placeholder="Długi opis wydarzenia"><br>

    <button class="button__edit" type="submit" name="add">DODAJ</button>
    <button type="reset" class="button__clear">RESETUJ FORMULARZ</button>
    <button class="button" onclick="window.location.href='index.php'" name="cancel">ANULUJ</button>
</form>

    </fieldset>

</body>
</html>
