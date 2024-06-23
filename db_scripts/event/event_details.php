<?php
include '../php_scripts/connection.php';

// Sprawdź czy przekazano parametr event_id przez GET
if (!isset($_GET['event_id'])) {
    echo "Brak ID wydarzenia.";
    exit;
}

// Pobierz ID wydarzenia z parametru URL
$event_id = $_GET['event_id'];

// Przygotuj zapytanie SQL do pobrania szczegółów wydarzenia
$sql = "SELECT * FROM events WHERE event_id = :event_id";

// Przygotuj zapytanie
$query = $pdo->prepare($sql);

// Przypisz parametr ID wydarzenia
$query->bindParam(':event_id', $event_id, PDO::PARAM_INT);

// Wykonaj zapytanie
$query->execute();

// Pobierz szczegóły wydarzenia
$event = $query->fetch(PDO::FETCH_ASSOC);

// Sprawdź, czy wydarzenie istnieje
if (!$event) {
    // Wydarzenie nie istnieje, obsłuż błąd
    echo "Wydarzenie o podanym ID nie istnieje.";
    exit;
}

// Wyświetl szczegóły wydarzenia
?>

<!DOCTYPE html>
<html lang="pl" class="document">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły Wydarzenia</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="content">
    
    <header class="header">
        <h1>Szczegóły Wydarzenia</h1>
    </header>

    <fieldset class="section">
        <legend class="section_legend">Szczegóły wydarzenia</legend>
        <div class="event_details">
            <p>ID wydarzenia: <?php echo $event['event_id']; ?></p>
            <p>Nazwa wydarzenia: <?php echo $event['event_name']; ?></p>
            <p>Data wydarzenia: <?php echo $event['event_date']; ?></p>
            <p>Lokalizacja wydarzenia: <?php echo $event['event_location']; ?></p>
            <p>Opis wydarzenia: <?php echo $event['event_description']; ?></p>
        </div>
    </fieldset>

</body>
</html>
