<?php

require_once '../../DBConn/conn.php';

if (!isset($pdo)) {
    die("Erro: a conexão com o banco de dados não foi estabelecida.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    //$email = $_POST['email'];
    $role = 'user';  // Padrão para novos usuários

    $stmt = $pdo->prepare("INSERT INTO tb_usuarios (email, senha, role) VALUES (?, ?, ?)");
    if ($stmt->execute([$email, $senha, $role])) {
        $successMsg = "Usuário registrado com sucesso!";
        header("Location: ../../../../../blog/index.php?url=login");
        exit;
    } else {
        $errorMsg = "Erro ao registrar usuário.";
    }
}

?>
