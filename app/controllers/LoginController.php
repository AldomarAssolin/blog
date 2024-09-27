<?php
session_start();
require_once '../../DBConn/conn.php';

// Verifique se o usuário já está logado
if (isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redireciona para a página principal se estiver logado
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['email'];
    $password = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM tb_usuarios WHERE nome = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $successMsg = "Login bem-sucedido!";
        header("Location: ../../../../../blog/index.php?url=blog");
        exit;
    } else {
        $errorMsg = "Credenciais inválidas.";
        header("Location: ../../../../../blog/index.php?url=blog");
        exit;
    }
}
