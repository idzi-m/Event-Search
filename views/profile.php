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

    <header class="header">
        <h1>EventSearch - Wyszukiwarka eventów!</h1>
        <p><?php echo $user_message; ?></p>
    </header>

<fieldset class="section">
    <legend class="section_legend">Profil użytkownika: <?php echo $user_data['first_name'] . ' ' . $user_data['last_name']; ?></legend>
    <div class="profile_card">
    <p><strong>Login użytkownika:</strong> <?php echo $user_data['login']; ?></p>
    <p><strong>Miasto:</strong> <?php echo $user_data['city']; ?></p>
    <p><strong>Numer telefonu:</strong> <?php echo $user_data['phone']; ?></p>
    <p><strong>Adres email:</strong> <?php echo $user_data['email']; ?></p>
    <p><strong>Data urodzenia:</strong> <?php echo $user_data['birth_date']; ?></p>
    <p><strong>Płeć:</strong> <?php echo $user_data['gender']; ?></p>
    </div>
</fieldset> 

<fieldset class="section section_action">
    <legend class="section_legend">Akcje</legend>
    <nav id="nav_profile" class="navigation">
        <ul class="navigation-list-buttons">
            <li class="navigation-list-li"><button onclick="window.location.href='index.php'" class="button">POWRÓT DO LISTY WYDARZEŃ</button></li>
            <!-- <li class="navigation-list-li"><button onclick="window.location.href='edit_user_form.php?user_id=<?php echo $user_data['id']; ?>'" class="button_edit">EDYTUJ DANE UŻYTKOWNIKA</button></li>
            <li class="navigation-list-li">
                <form action="../db_scripts/user/user_delete.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user_data['id']; ?>">
                    <button type="submit" name="user_delete" class="button_delete" onclick="return confirm('Czy na pewno chcesz usunąć swoje konto?')">USUŃ KONTO</button>
                </form>
            </li> -->
        </ul>
    </nav>
</fieldset>

<fieldset class="section">
    <legend class="section_legend">Lista wydarzeń utworzonych przez użytkownika</legend>
    <div class="events-grid">
        <?php
        if ($result_events->num_rows > 0) {
            while($row = $result_events->fetch_assoc()) {
                echo "<div class='event-card'>";
                echo "<h2>{$row["name"]}</h2>";
                echo "<p><strong>Data:</strong> {$row["event_date"]}</p>";
                echo "<p><strong>Miasto:</strong> {$row["event_city"]}</p>";
                echo "<p><strong>Typ:</strong> {$row["type"]}</p>";
                echo "<p><strong>Lokalizacja:</strong> {$row["location"]}</p>";
                echo "<p><strong>Opis:</strong> {$row["short_desc"]}</p>";
                echo "<p><strong>Cena:</strong> {$row["cena"]}</p>";
                echo "<button onclick=\"window.location.href='event_details.php?event_id={$row["id"]}'\">SZCZEGÓŁY</button>";
                echo "</div>";
            }
        } else {
            echo "<div class='results_item'>Brak wydarzeń</div>";
        }
        ?>
    </div>
</fieldset>
<footer class="footer">
        <p>&copy; 2024 EventSearch.</p>
        <p>Find me on <a href="https://github.com/idzi-m" target="_blank">GitHub</a></p>
    </footer>
</body>
</html>
