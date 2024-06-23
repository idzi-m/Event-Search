<?php
include '../php_scripts/connection.php';
include '../php_scripts/session_eventdetails.php';

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
    $sql_1 = "SELECT first_name, last_name FROM Users WHERE id = {$event_data['creator_id']}";
    $result_1 = $conn->query($sql_1);

    if ($result_1->num_rows > 0) {
        $creator_data = $result_1->fetch_assoc();
        $creator = $creator_data['first_name'] . ' ' . $creator_data['last_name'];
    } else {
        $creator = "Nieznany"; // Domyślna wartość, jeśli twórca nie zostanie znaleziony
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
    <header class="header">
        <h1>Wyszukiwarka Eventów</h1>
        <p><?php echo $user_message; ?></p>
    </header>

    <fieldset class="section event_details">
        <legend class="section_legend">Szczegóły wydarzenia: <?php echo $event_data['name']; ?></legend>
        <div class="event-details-grid">
            <div class="event-details-data">
                <p class="field_label">Data wydarzenia: <?php echo $event_data['event_date']; ?></p>
                <p class="field_label">Miasto: <?php echo $event_data['event_city']; ?></p>
                <p class="field_label">Typ: <?php echo $event_data['type']; ?></p>
                <p class="field_label">Lokalizacja: <?php echo $event_data['location']; ?></p>
                <p class="field_label">Krótki opis: <?php echo $event_data['short_desc']; ?></p>
                <p class="field_label">Długi opis: <?php echo $event_data['long_desc']; ?></p>
                <p class="field_label">Cena: <?php echo $event_data['cena']; ?></p>
                <p class="field_label">Twórca: <?php echo $creator; ?></p>
            </div>
        </div>
    </fieldset>

    <fieldset class="section section_action">
        <legend class="section_legend">Akcje</legend>
        <button onclick="window.location.href='index.php'" class="button">POWRÓT DO LISTY WYDARZEŃ</button>
        <button <?php if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != $event_data['creator_id']) {echo "hidden";}?> onclick="window.location.href='edit_event_form.php?event_id=<?php echo $event_data['id']; ?>'" class="button_edit">EDYTUJ WYDARZENIE</button>
        <form action="../db_scripts/event/event_delete.php" method="post">
            <input type="hidden" name="event_id" value="<?php echo $event_data['id']; ?>">
            <button <?php if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != $event_data['creator_id']) {echo "hidden";}?> type="submit" name="event_delete" class="button_delete" onclick="return confirm('Czy na pewno chcesz usunąć to wydarzenie?')">USUŃ WYDARZENIE</button>
        </form>
    </fieldset>

</body> 
</html>
