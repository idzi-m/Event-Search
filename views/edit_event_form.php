<?php
include '../php_scripts/connection.php';

if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    
    $sql = "SELECT * FROM Events WHERE id = $event_id AND is_deleted = 0";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $event_data = $result->fetch_assoc();
    } else {
        header("Location: index.php");  // Przekierowanie do strony wyszukiwania, jeśli wydarzenie nie istnieje
        exit();
    }
} else {
    header("Location: index.php");  // Przekierowanie do strony wyszukiwania, jeśli nie podano ID wydarzenia
    exit();
}

$conn->close();
?> 

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
    <form method="post" action="../db_scripts/event/event_update.php">
        <input class="field-input" type="hidden" name="event_id" value="<?php echo $event_data['id']; ?>">
        <input class="field-input" type="text" name="eventName" value="<?php echo $event_data['name']; ?>" placeholder="Nazwa wydarzenia" required ><br>
        <input class="field-input" type="datetime-local" name="eventDate" value="<?php echo $event_data['event_date']; ?>" placeholder="Data i godzina wydarzenia" required ><br>
        <input class="field-input" type="integer" name="eventCity" value="<?php echo $event_data['event_city']; ?>" placeholder="Miasto" required ><br>
        <input class="field-input" type="text" name="eventType" value="<?php echo $event_data['type']; ?>" placeholder="Typ wydarzenia"><br>
        <input class="field-input" type="text" name="eventLocation" value="<?php echo $event_data['location']; ?>" placeholder="Lokalizacja" required ><br>
        <input class="field-input" type="text" name="eventPrice" value="<?php echo $event_data['cena']; ?>" placeholder="Cena"><br>
        <input class="field-input" type="textbox" name="eventShortDesc" value="<?php echo $event_data['short_desc']; ?>" placeholder="Krótki opis"><br>
        <input class="field-input" type="textbox" name="eventLongDesc" value="<?php echo $event_data['long_desc']; ?>" placeholder="Długi opis wydarzenia"><br>

        <button class="button__edit" type="submit" name="edit">ZAPISZ</button>
        <button type="reset" class="button__clear">RESETUJ FORMULARZ</button>
        <button class="button" onclick="window.location.href='event_details.php?event_id=<?php echo $event_data['id']; ?>'" name="cancel">ANULUJ</button>
    </form>
</fieldset>

</body>
</html>