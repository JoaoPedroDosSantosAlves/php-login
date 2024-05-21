<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content-container">
        <h2>Conteúdo</h2>
        <p>Bem-vindo, <?php echo $username; ?>!</p>
        <!-- Adicione aqui qualquer informação adicional -->
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>