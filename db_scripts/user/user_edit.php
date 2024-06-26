<?php

// Pobierz dane użytkownika do edycji
$user_id = $_GET['user_id']; // Przykładowe pobranie identyfikatora użytkownika z parametru URL

// Sprawdź, czy formularz został przesłany
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobierz dane z formularza
    $name = $_POST['name'];
    $email = $_POST['email'];
    // ... pozostałe pola formularza

    // Waliduj dane (opcjonalnie)

    // Zaktualizuj dane użytkownika w bazie danych
    // ...

    // Przekieruj użytkownika na stronę sukcesu
    header('Location: user_list.php');
    exit;
}

// Pobierz dane użytkownika z bazy danych na podstawie $user_id
// ...

// Wyświetl formularz edycji użytkownika
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edytuj użytkownika</title>
</head>
<body>
    <h1>Edytuj użytkownika</h1>
    <form method="POST" action="">
        <label for="name">Imię:</label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>

        <!-- Pozostałe pola formularza -->

        <input type="submit" value="Zapisz zmiany">
    </form>
</body>
</html>