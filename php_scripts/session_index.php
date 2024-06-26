<?php
// Rozpocznij sesję
session_start();

// Sprawdź, czy sesja istnieje
if(isset($_SESSION['login'])) {$user_message =  " Zalogowany użytkownik: " .$_SESSION['login'];}    
if (!isset($_SESSION['last_activity'])) {$user_message =  "Nie jesteś zalogowany! Zaloguj się używając przycisku ZALOGUJ!";}
else {
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