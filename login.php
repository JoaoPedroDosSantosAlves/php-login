<?php
session_start();

if ($_POST['email'] === 'usuario@example.com' && $_POST['password'] === '123456') {
    // Criar a sessão
    $_SESSION['username'] = 'usuario'; 
    // Criar o cookie
    setcookie('username', 'usuario', time() + (86400 * 30), "/"); 
    header("Location: content.php");
    exit();
} else {
    header("Location: index.php?error=true");
    exit();
}
?>'

'
