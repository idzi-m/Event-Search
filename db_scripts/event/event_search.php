<?php
include '../php_scripts/connection.php';
$searchValue = "";
$whereClause = "is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $searchValue = $_GET['search'];
    $whereClause .= " AND (name LIKE '%$searchValue%' OR event_city LIKE '%$searchValue%' OR type LIKE '%$searchValue%' OR location LIKE '%$searchValue%' OR short_desc LIKE '%$searchValue%' OR cena LIKE '%$searchValue%')";
}

// Warunki dla filtrów
if(isset($_GET['city']) && !empty($_GET['city'])) {
    $city = $_GET['city'];
    $whereClause .= " AND event_city = '$city'";
}

if(isset($_GET['type']) && !empty($_GET['type'])) {
    $type = $_GET['type'];
    $whereClause .= " AND type = '$type'";
}

if(isset($_GET['date_from']) && !empty($_GET['date_from'])) {
    $date_from = $_GET['date_from'];
    $whereClause .= " AND event_date >= '$date_from'";
}

if(isset($_GET['date_to']) && !empty($_GET['date_to'])) {
    $date_to = $_GET['date_to'];
    $whereClause .= " AND event_date <= '$date_to'";
}

if(isset($_GET['price_from']) && !empty($_GET['price_from'])) {
    $price_from = $_GET['price_from'];
    $whereClause .= " AND cena >= $price_from";
}

if(isset($_GET['price_to']) && !empty($_GET['price_to'])) {
    $price_to = $_GET['price_to'];
    $whereClause .= " AND cena <= $price_to";
}

$sql = "SELECT * FROM Events WHERE $whereClause ORDER BY event_date DESC";
$result = $conn->query($sql);
$conn->close();
?>
