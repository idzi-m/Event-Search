<?php
include "../php_scripts/connection.php";
$searchValue = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $searchValue = $_GET['search'];
    $sql = "SELECT * FROM Events WHERE is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND (name LIKE '%$searchValue%' OR event_city LIKE '%$searchValue%' OR type LIKE '%$searchValue%' OR location LIKE '%$searchValue%' OR short_desc LIKE '%$searchValue%' OR cena LIKE '%$searchValue%') ORDER BY event_date DESC";
} else {
    $sql = "SELECT * FROM Events WHERE is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY) ORDER BY event_date DESC";
}
$result = $conn->query($sql);
$conn->close();
