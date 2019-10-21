<div class="container-fluid">
      <!-- <a href="?pagina=admtest">tabelaTestes</a>
      <a href="?pagina=teste">tabelaTestes2</a>
      <a href="?pagina=estado">tabelaTestes3</a> -->

      <?php
      @session_start();
      $con = conecta();

      if(isset($_SESSION['cadastrado'])){
        $idcurriculo = $_SESSION['idcurriculo'];
        $selcurriculo = "SELECT nome FROM curriculo WHERE idcurriculo='$idcurriculo' LIMIT 1";
        $rescurriculo = mysqli_query($con, $selcurriculo);
        $rowcurriculo = mysqli_fetch_assoc($rescurriculo);
        if($rescurriculo){
          echo "<h1>Cadastrado com sucesso. Seja bem vindo(a) ".$rowcurriculo['nome'];
          unset($_SESSION['cadastrado']);
          unset($_SESSION['idcurriculo']);
        }else{

        }
      }else{

      }
      ?>

      <div class="row justify-content-center bg-light">

        <div class="col-md-3 border border-dark shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px">
          <h2>Candidato</h2>
          <h4><li>Cadastre seu currículo</li></h4>
          <h4><li>Sempre a disposição</li></h4>
          <a class="btn btn-secondary btn-lg btn-block" href="?pagina=cadastrardados" role="button">Cadastrar</a>
        </div>

        <div class="col-md-3 ml-md-4  border border-dark  shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px">
          <h2>Empresa</h2>
          <h4><li>Busque um candidato</li></h4>
          <h4><li>Sempre a disposição</li></h4>
          <a class="btn btn-secondary btn-lg btn-block" href="?pagina=cadastroempresa" role="button">Cadastrar</a>
        </div>
      </div>

    </div>