<?php
session_start();

// Verificar se o email e a senha estão corretos (pode ser feito através de um banco de dados)

// Exemplo de verificação estática
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