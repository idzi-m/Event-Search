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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły wydarzenia</title>
</head>

<body>
<fieldset>
    <legend>Szczegóły wydarzenia: <?php echo $event_data['name']; ?></legend>
    <p>Data wydarzenia: <?php echo $event_data['event_date']; ?></p>
    <p>Miasto: <?php echo $event_data['event_city']; ?></p>
    <p>Typ: <?php echo $event_data['type']; ?></p>
    <p>Lokalizacja: <?php echo $event_data['location']; ?></p>
    <p>Krótki opis: <?php echo $event_data['short_desc']; ?></p>
    <p>Cena: <?php echo $event_data['cena']; ?></p>
</fieldset>

<fieldset>
    <legend>Akcje</legend>
    <!-- Tutaj możesz dodać dodatkowe akcje, np. edycja wydarzenia, usunięcie wydarzenia, etc. -->
    <button onclick="window.location.href='./index.php'">Powrót do listy wydarzeń</button>
</fieldset>

</body>
</html>
