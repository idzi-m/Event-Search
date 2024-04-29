<?php
include '../../php_scripts/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $city = $_POST['eventCity']; 
    $type = $_POST['eventType'];    
    $location = $_POST['eventLocation'];  
    $price = $_POST['eventPrice'];  
    $shortDesc = $_POST['eventShortDesc'];  
    $longDesc = $_POST['eventLongDesc'];    
    // Sprawdzenie, który przycisk został kliknięty
    if (isset($_POST['add'])) {
        // Wywołanie stored procedure 'add_event'
        $stmt = $conn->prepare("CALL event_add(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssississ", $eventName, $eventDate, $city, $type, $location, $price, $shortDesc, $longDesc);

        if ($stmt->execute()) {
            echo "<script>alert('Wydarzenie zostało dodane'); window.location.href='../../views/index.php';</script>";
        } else {
            echo "<script>alert('Błąd podczas dodawania wydarzenia'); window.location.href='../../views/index.php';</script>";
        }

        $stmt->close();
    }
}
?>
