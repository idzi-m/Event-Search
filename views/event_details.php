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
<html lang="pl" class='document'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły wydarzenia</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="content">
<fieldset class="section" class="event_details">
    <legend class="section-legend">Szczegóły wydarzenia: <?php echo $event_data['name']; ?></legend>
    <table class="results-table">
        <tr>
            <td class="event-details-image" rowspan="2">
                <!-- miejsce na zdjęcie wydarzenia -->
            </td>
            <td class="event-details-data">
                <p class="field-label">Data wydarzenia: <?php echo $event_data['event_date']; ?></p>
                <p class="field-label">Miasto: <?php echo $event_data['event_city']; ?></p>
                <p class="field-label">Typ: <?php echo $event_data['type']; ?></p>
                <p class="field-label">Lokalizacja: <?php echo $event_data['location']; ?></p>
                <p class="field-label">Krótki opis: <?php echo $event_data['short_desc']; ?></p>
                <p class="field-label">Długi opis: <?php echo $event_data['long_desc']; ?></p>
                <p class="field-label">Cena: <?php echo $event_data['cena']; ?></p>
                <p class="field-label">Twórca: <?php echo $event_data['creator_id']; ?></p>
            </td>
        </tr>
    </table>
</fieldset>

<fieldset class="section">
    <legend class="section-legend">Akcje</legend>
    <button onclick="window.location.href='index.php'" class="button">POWRÓT DO LISTY WYDARZEŃ</button>
    <button onclick="window.location.href='edit_event.php?event_id=<?php echo $event_data['id']; ?>'" class="button__edit">EDYTUJ WYDARZENIE</button>
    <button onclick="if(confirm('Czy na pewno chcesz usunąć to wydarzenie?')) window.location.href='delete_event.php?event_id=<?php echo $event_data['id']; ?>'" class="button__delete">USUŃ WYDARZENIE</button>
    
</fieldset>

</body>
</html>
