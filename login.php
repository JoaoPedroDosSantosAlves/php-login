<?php
session_start();

if ($_POST['email'] === 'usuario@example.com' && $_POST['password'] === '123456') {
    $_SESSION['username'] = 'usuario'; // Criar a sessão
    setcookie('username', 'usuario', time() + (86400 * 30), "/"); // Criar o cookie com o nome do usuário (válido por 30 dias)
    header("Location: content.php");
    exit();
} else {
    header("Location: index.php?error=true");
    exit();
}
?>'

'
