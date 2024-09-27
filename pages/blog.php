
<?php



include_once './config/config.php'; //configuração
include_once './config/database.php';  // Conexão com BD



// Receber a URL do .htaccess. Se não existir o nome da página, carregar a página inicial (home).
$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input(INPUT_GET, 'url', FILTER_DEFAULT) : 'home');
//var_dump($url);

// Converter a URL de uma string para um array.
$url = array_filter(explode('/', $url));
//var_dump($url);

// Criar o caminho da página com o nome que está na primeira posição do array criado acima e atribuir a extensão .php.
$posts = 'public/blog/pages/' . $url[0] . '.php';
//var_dump($posts);


?>



<?php

include('./public/blog/commons/header.php');

//include('./public/blog/pages/home.php');



//var_dump($posts);
// Roteamento básico
switch (is_file($posts)) {
    case 'home':
      include $posts;
      break;
    case 'allPosts':
      include $posts;
      break;
    case 'posts':
      include $posts;
      break;
    default:
      include './pages/home.php';  // Fallback para o blog
      break;
}


// Apenas admins e autores podem acessar o dashboard
        //if (isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'author')) {
            //include './app/views/layoutDashboard.php';
        //} else {
            //echo "Acesso negado.";
        //}
        //break;


include('./public/blog/commons/footer.php');

?>