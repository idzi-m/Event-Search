<?php
// Rozpocznij sesję
session_start();

// Sprawdź, czy sesja istnieje
if(isset($_SESSION['login'])) {$user_message = "Użytkownik:".$_SESSION['login'];}
if (!isset($_SESSION['last_activity'])) {$user_message =  "Nie jesteś zalogowany! Przejdź do listy wydarzeń i zaloguj się, żeby móc zarządzać swoimi wyddarzeniami";}     
else {
    // Sprawdź czas ostatniej aktywności
    if (time() - $_SESSION['last_activity'] > 600) { //czas sesji
        // Sesja wygasła z powodu braku aktywności, przekieruj na stronę wylogowania lub zakończ sesję
        session_unset();
        session_destroy();
        //header("Location: login.php");
        exit();
    } else {
        // Odśwież czas ostatniej aktywności
        $_SESSION['last_activity'] = time();
    }    
}
?>