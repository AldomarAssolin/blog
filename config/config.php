<?php

// URL base do seu site
define('URI', 'http://localhost/');
define('BASE_URL', 'http://localhost/blog/');
define('VIEW_URL', BASE_URL.'/app/views/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('ASSETS_URL', BASE_URL . 'assets/');
define('STYLES_URL', BASE_URL . 'css/');

// Caminho para o Bootstrap
$bootstrap = ASSETS_URL . 'dist/css/bootstrap.min.css';
$dashboardCSS = PUBLIC_URL . 'dashboard/dashboard.css';
$dashboardJS = PUBLIC_URL . 'dashboard/dashboard.js';

// Caminho para imagens e logos
$logo = ASSETS_URL . 'images/logos/2.png';
$imgAboutSection = ASSETS_URL . 'images/aldomarassolin-vercel-app.jpeg';

// Informações gerais do site
$author_name = 'Aldomar Assolin';
$site_name = $author_name . ' | BLOG';

// Verifica qual vista será acessada
/*
if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = 'blog';  // Padrão é o blog
}
*/