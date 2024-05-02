<?php
include '../../php_scripts/connection.php';
include '../../php_scripts/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_id = $_POST['event_id'];
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $city = $_POST['eventCity']; 
    $type = $_POST['eventType'];    
    $location = $_POST['eventLocation'];  
    $price = $_POST['eventPrice'];  
    $shortDesc = $_POST['eventShortDesc'];  
    $longDesc = $_POST['eventLongDesc'];    
    $creator_id = $_SESSION['user_id'];
    // Sprawdzenie, który przycisk został kliknięty
    if (isset($_POST['edit'])) {
        // Wywołanie stored procedure 'add_event'
        $stmt = $conn->prepare("CALL event_update(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssiss", $event_id, $eventName, $eventDate, $city, $type, $location, $price, $shortDesc, $longDesc);

        if ($stmt->execute()) {
            echo "<script>alert('Wydarzenie zostało zmodyfikowane'); window.location.href='../../views/event_details.php?event_id=$event_id';</script>";
        } else {
            echo "<script>alert('Błąd podczas dodawania wydarzenia'); window.location.href='../../views/index.php';</script>";
        }
    }else if(isset($_POST['cancel'])){
        echo "<script>window.location.href='../../views/event_details.php?event_id=$event_id';</script>";

    } 

        $stmt->close();
    
}
?>
