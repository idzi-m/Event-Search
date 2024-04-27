<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj nowe wydarzenie</title>
</head>
<body>

<h2>Dodaj nowe wydarzenie</h2>
<form method="post" action= "../db_scripts/event/add_event.php">
    <input type="text" name="eventName" placeholder="Nazwa wydarzenia" required ><br>
    <input type="datetime-local" name="eventDate" placeholder="Data i godzina wydarzenia" required ><br>
    <input type="integer" name="eventCityId" placeholder="Miasto" required ><br>
    <input type="text" name="eventType" placeholder="Typ wydarzenia"><br>
    <input type="text" name="eventLocation" placeholder="Lokalizacja" required ><br>
    <input type="text" name="eventPrice" placeholder="Cena"><br>
    <input type="text" name="eventShortDesc" placeholder="Krótki opis"><br>
    <input type="text" name="eventLongDesc" placeholder="Długi opis wydarzenia"><br>

    <button type="submit" name="add">DODAJ</button>
    <button onclick="window.location.href='./event_details.php'" name="cancel">ANULUJ</button>
</form>

</body>
</html>
