<?php

require_once __DIR__ . '/../vendor/autoload.php';  // Certifique-se de carregar o autoloader

use Dotenv\Dotenv;

// Inicialize o Dotenv para carregar as variáveis do arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Agora você pode acessar as variáveis de ambiente usando getenv() ou $_ENV
$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];
$db_name = $_ENV['DB_NAME'];

// Conexão com o banco de dados usando as variáveis do .env
try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}



?>