<?php
session_start();
session_unset();
session_destroy();
setcookie('username', '', time() - 3600, "/"); // Expirar o cookie
header("Location: index.php");
exit();
?>