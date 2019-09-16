<?php
@session_start();
?>

  <div class="container-fluid">
    <div class="row justify-content-center bg-light">
      <div class="col-md-3 ml-md-4  border border-dark  shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px">

      <!-- <form class="form-signin">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form> -->

        <form  method="post" action="?pagina=validarlogin">
          <div class="form-row">
            <h2>Login</h2>
          </div>
          <div class="form-row">  
            <?php
                if (isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
                ?>
          </div>
          <div class="form-row">
            <label for="inputEmail4">Email</label>
            <input name="email" type="text" class="form-control obrigatorio" id="email" placeholder="Email">
            <span class="text-danger"></span>
            <br>
          </div>

          <div class="form-row">
            <label for="inputPassword4">Senha</label>
            <input name="senha" type="password" class="form-control obrigatorio" id="senha" placeholder="Senha">
            <span class="text-danger"></span>
            <br>
          </div>

          <div class="form-row">
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ac" id="ac1" value="empresa">
                <label class="form-check-label" for="gridRadios1">
                  Empresa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ac" id="ac2" value="curriculo">
                <label class="form-check-label" for="gridRadios2">
                  Currículo
                </label>
              </div>

              <div class="form-row">
                <br>
                <button type="submit" name="btnlogin"class="btn btn-dark btn-lg btn-block">Entrar</button>
              </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>

</html>