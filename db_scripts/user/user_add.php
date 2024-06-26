<?php
include '../../php_scripts/connection.php';
include '../../php_scripts/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userFirstName = $_POST['userFirstName'];
    $userSecondName = $_POST['userSecondName'];
    $userLastName = $_POST['userLastName'];
    $userLogin = $_POST['userLogin'];
    $userPassword = $_POST['userPassword'];
    $userCity = $_POST['userCity']; 
    $userPhone = $_POST['userPhone'];
    $userEmail = $_POST['userEmail'];
    $userBirthDate = $_POST['userBirthDate'];
    $userGender = $_POST['userGender'];

    // Sprawdzenie, który przycisk został kliknięty
    if (isset($_POST['add'])) {
        // Wywołanie stored procedure 'user_event'
        $stmt = $conn->prepare("CALL user_add(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssisds", $userFirstName, $userSecondName, $userLastName, $userLogin, $userPassword, $userCity, $userPhone, $userEmail, $userBirthDate, $userGender);

        if ($stmt->execute()) {
            echo "<script>alert('Użytkownik został dodany! Zaloguj się!'); window.location.href='../../views/login.php';</script>";
        } else {
            echo "<script>alert('Błąd podczas dodawania użytkownika'); window.location.href='../../views/login.php';</script>";
        }

        $stmt->close();
    }
}
?>
