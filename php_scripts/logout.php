<?php
// Rozpocznij sesję
session_start();

// Zniszcz wszystkie dane sesji
session_unset();

// Zniszcz sesję
session_destroy();

// Przekieruj użytkownika na stronę logowania lub inną stronę po wylogowaniu
header("Location: ../views/index.php");
exit();
?>