<?php

// Sprawdź, czy został przesłany identyfikator użytkownika
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    // Połącz z bazą danych
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');

    // Sprawdź, czy udało się połączyć z bazą danych
    if ($conn->connect_error) {
        die("Błąd połączenia z bazą danych: " . $conn->connect_error);
    }

    // Przygotuj zapytanie SQL do usunięcia użytkownika
    $sql = "DELETE FROM users WHERE id = $user_id";

    // Wykonaj zapytanie
    if ($conn->query($sql) === TRUE) {
        echo "Użytkownik został pomyślnie usunięty.";
    } else {
        echo "Błąd podczas usuwania użytkownika: " . $conn->error;
    }

    // Zamknij połączenie z bazą danych
    $conn->close();
} else {
    echo "Nieprawidłowe żądanie.";
}