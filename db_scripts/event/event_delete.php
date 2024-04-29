<?php
include '../../php_scripts/connection.php';

if (isset($_POST['event_delete'])) {
    $event_id = $_POST['event_id']; 
    // Wywołanie stored procedure 'event_delete'
    $stmt = $conn->prepare("CALL event_delete(?)");
    $stmt->bind_param("i", $event_id);

    if ($stmt->execute()) {
        echo "<script>alert('Wydarzenie zostało usunięte'); window.location.href='../../views/index.php';</script>";
    } else {
        echo "<script>alert('Błąd podczas usuwania wydarzenia'); window.location.href='../../views/index.php';</script>";
    }

    $stmt->close();
} else {
    header("Location: ../../views/index.php"); // Przekierowanie w przypadku braku zatwierdzenia usunięcia
    exit();
}
?>
