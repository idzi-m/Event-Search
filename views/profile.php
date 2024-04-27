<?php
include '../php_scripts/connection.php';

// Pobranie danych użytkownika
//session_start();
//$user_id = $_SESSION['user_id'];  // Zakładamy, że przechowujesz ID użytkownika w sesji po zalogowaniu
$user_id = 1;  // Zakładamy, że ID użytkownika to 1
$sql_user = "SELECT * FROM Users WHERE id = $user_id";
$result_user = $conn->query($sql_user);
$user_data = $result_user->fetch_assoc();

// Pobranie listy wydarzeń użytkownika
$sql_events = "SELECT * FROM Events WHERE creator_id = $user_id AND is_deleted = 0 ORDER BY event_date DESC";
$result_events = $conn->query($sql_events);

$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil użytkownika</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<fieldset>
    <legend>Profil użytkownika: <?php echo $user_data['first_name'] . ' ' . $user_data['last_name']; ?></legend>
    <p>ID użytkownika: <?php echo $user_data['id']; ?></p>
</fieldset>

<fieldset>
    <legend>Lista wydarzeń utworzonych przez użytkownika</legend>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nazwa wydarzenia</th>
            <th>Data wydarzenia</th>
            <th>Miasto</th>
            <th>Typ</th>
            <th>Lokalizacja</th>
            <th>Krótki opis</th>
            <th>Cena</th>
            <th>Akcje</th>
        </tr>

        <?php
        if ($result_events->num_rows > 0) {
            while($row = $result_events->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["event_date"] . "</td>";
                echo "<td>" . $row["event_city"] . "</td>";
                echo "<td>" . $row["type"] . "</td>";
                echo "<td>" . $row["location"] . "</td>";
                echo "<td>" . $row["short_desc"] . "</td>";
                echo "<td>" . $row["cena"] . "</td>";
                echo "<td><button onclick=\"window.location.href='event_details.php?event_id=" . $row["id"] . "'\">PODGLĄD</button>";
                echo "<td><button onclick=\"window.location.href='event_edit.php?event_id=" . $row["id"] . "'\">EDYCJA</button>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Brak wydarzeń</td></tr>";
        }
        ?>
    </table>
</fieldset>

</body>
</html>
