<?php
session_start();

if ($_POST['email'] === 'joao@etec.com' && $_POST['password'] === '123456') {
    // Criar a sessão
    $_SESSION['usuarios'] = 'joao'; 
    // Criar o cookie
    setcookie('usuarios', 'joao', time() + (86400 * 30), "/"); 
    header("Location: content.php");
    exit();
} else {
    header("Location: index.php?error=true");
    exit();
}
?>'

'
