<?php

require_once './config/database.php';

// Executa a query da variável $sql
$sql = "SELECT id, nome, descricao, status, data, created_at FROM tarefa ORDER BY data LIMIT 3";
$resultado = $conn->query($sql);
// Verifica se a query retornou registros
if ($resultado->num_rows > 0) {

    $registros = [];
    $registro = $resultado->fetch_assoc();
    $descricao = nl2br($registro['descricao']);
    $describe = str_replace('\r\n', '', $descricao);
    $Descb = str_replace('\\', '', $describe);
    $descricao = str_replace('"', '', $Descb);

    $dateString = $registro['created_at'];
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $dateString);
    $formattedDate = $date->format("M d");
    


    ?>

<main class="container">
    
<div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between px-5">
      <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
    </nav>
  </div>
</div>

  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic"><?php echo $registro['nome'] ?></h1>
      <p class="lead my-3">Subtítulo</p>
      <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Verifique se o arquivo vendor/autoload.php está sendo incluído no início do seu projeto. Isso é necessário para que o 
        Composer carregue automaticamente todas as classes de suas dependências.</a></p>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
          <h3 class="mb-0"><?php echo $registro['nome'] ?></h3>
          <div class="mb-1 text-body-secondary"><?php echo $formattedDate?></div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">

          <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
          <h3 class="mb-0"><?php echo $registro['nome'] ?></h3>
          <div class="mb-1 text-body-secondary"><?php echo $formattedDate?></div>
          <p class="mb-auto">Verifique se o arquivo vendor/autoload.php está sendo incluído no início do seu projeto.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
          <?php
}
?>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      
      <?php

      include ('./public/blog/pages/postsList.php')

?>

      <nav class="blog-pagination mb-3" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div>
          <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Example blog post title</h6>
                  <small class="text-body-secondary">January 15, 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">This is another blog post title</h6>
                  <small class="text-body-secondary">January 14, 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                  <small class="text-body-secondary">January 13, 2023</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
