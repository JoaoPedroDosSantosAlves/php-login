<?php
session_start();

if ($_POST['email'] === 'joao@etec.com' && $_POST['password'] === '123456') {
    // Criar a sessão
    $_SESSION['username'] = 'joao'; 
    // Criar o cookie
    setcookie('username', 'joao', time() + (86400 * 30), "/"); 
    header("Location: content.php");
    exit();
} else {
    header("Location: index.php?error=true");
    exit();
}
?>'

'
