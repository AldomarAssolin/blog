
<?php

include('./pages/commons/head.php');

?>

<main class="container">

    <form action="<?php echo BASE_URL ?>app/controllers/LoginController.php" method="POST" class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">

        <div class="col-sm-12 col-md-6 mb-3">
          <label for="validationServer01" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationServer01" name="email" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <label for="validationServer02" class="form-label">Senha</label>
          <input type="password" class="form-control" id="validationServer02" name="senha" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

    
      <div class="col-6 d-flex flex-column align-items-center justify-content-center mt-3">
        <a class="btn btn-sm link-outline-secondary m-2" href="<?php echo BASE_URL?>index.php?url=register">Não é cadastrado?</a>
        <button class="btn btn-primary" type="submit">Efetuar login</button>
      </div>
    </form>
  </div>
</main>