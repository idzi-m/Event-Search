<?php
include '../php_scripts/connection.php';
include '../php_scripts/session.php';

// Pobranie danych użytkownika
$user_id = $_SESSION['user_id'];  // Zakładamy, że przechowujesz ID użytkownika w sesji po zalogowaniu
$sql_user = "SELECT * FROM Users WHERE id = $user_id";
$result_user = $conn->query($sql_user);
$user_data = $result_user->fetch_assoc();

// Pobranie listy wydarzeń użytkownika
$sql_events = "SELECT * FROM Events WHERE creator_id = $user_id AND is_deleted = 0 ORDER BY event_date DESC";
$result_events = $conn->query($sql_events);

$conn->close();
?>

<!DOCTYPE html>
<html lang="pl" class="document">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil użytkownika</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="content">
<fieldset class="section">
    <legend class="section_legend">Profil użytkownika: <?php echo $user_data['first_name'] . ' ' . $user_data['last_name']; ?></legend>
    <p>Login użytkownika: <?php echo $user_data['login']; ?></p>
    <p>Miasto: Ponzań</p>
    <p>NUmer telefonu: 34444134</p>
    <p>Adres email: test@dsdasd</p>
    <p>Data urodzenia: 1994-93-23</p>
    <p>Płeć: test</p>
</fieldset> 

<fieldset class="section">
    <legend class="section_legend">Lista wydarzeń utworzonych przez użytkownika</legend>
    <table class="results_table">
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
                echo "<td><button onclick=\"window.location.href='event_details.php?event_id=" . $row["id"] . "'\" class='button'>SZCZEGÓŁY</button>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Brak wydarzeń</td></tr>";
        }
        ?>
    </table>
</fieldset>

<fieldset class="section section_action">
    <legend class="section_legend">Akcje</legend>
    <button onclick="window.location.href='index.php'" class="button">POWRÓT DO LISTY WYDARZEŃ</button>
    <button <?php if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != $user_data['id']) {echo "hidden";}?> onclick="window.location.href='edit_user_form.php?user_id=<?php echo $user_data['id']; ?>'" class="button_edit">EDYTUJ DANE UŻYTKOWNIKA</button>
    <form action="../db_scripts/user/user_delete.php" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user_data['id']; ?>">
        <button <?php if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != $user_data['id']) {echo "hidden";}?> type="submit" name="user_delete" class="button_delete" onclick="return confirm('Czy na pewno chcesz usunąć swoje konto?')">USUŃ KONTO</button>
    </form>
</fieldset>

</body>
</html>

