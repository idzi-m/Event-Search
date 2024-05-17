<?php
// Rozpocznij sesję
session_start();

// Sprawdź, czy sesja istnieje
if(isset($_SESSION['login'])) {echo "Użytkownik:" .$_SESSION['login'];}    
if (!isset($_SESSION['last_activity'])) {
    echo "Brak sesji";
} else {
    // Sprawdź czas ostatniej aktywności
    if (time() - $_SESSION['last_activity'] > 600) { //czas sesji
        // Sesja wygasła z powodu braku aktywności, przekieruj na stronę wylogowania lub zakończ sesję
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    } else {
        // Odśwież czas ostatniej aktywności
        $_SESSION['last_activity'] = time();
    }
}
?>