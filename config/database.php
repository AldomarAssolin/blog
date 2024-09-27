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
$db_name = $_ENV['DB_NAME2'];

// Conexão com o banco de dados usando as variáveis do .env
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>
