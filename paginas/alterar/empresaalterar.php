<?php
$con = conecta();

$idempresa = trim($_GET['idempresa']);
$resempresa = mysqli_query($con, "SELECT * FROM empresa WHERE idempresa=$idempresa");
$empresas = mysqli_fetch_assoc($resempresa);
?>
<style type="text/css">
  .carregando {
    color: #ff0000;
    display: none;
  }
</style>
<div class="container">
  <form action="?pagina=alterarempresa" method="post">
    <div class="form-row">
      <hr>
    </div>
    <input id="idempresa" name="idempresa" value="<?php echo $empresas['idempresa']; ?>" type="hidden">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <label for="" class="text-danger">*</label>
        <input name="email" value="<?php echo $empresas['email']; ?>" type="email" class="form-control" id="email" placeholder="Email">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-10">
        <label for="inputAddress">Endereço</label>
        <label for="" class="text-danger">*</label>
        <input name="endereco" value="<?php echo $empresas['rua']; ?>" type="text" class="form-control" id="endereco" placeholder="Endereço">
      </div>
      <div class="form-group col-sm-2">
        <label for="inputAddress">Número</label>
        <label for="" class="text-danger">*</label>
        <input name="numero" value="<?php echo $empresas['numero']; ?>"  type="number" class="form-control" id="numero" placeholder="Número">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputState">Estado</label>
        <label for="" class="text-danger">*</label>
        <select name="estado" id="estado" class="form-control">
          <option value="0" selected>Escolha</option>
          <?php
                      $resEstado = mysqli_query ($con, 'SELECT * FROM estado');
                      while ($rowEstado = mysqli_fetch_assoc($resEstado)):
                        ?>
          <option value="<?php echo $rowEstado['idestado'] ?>"><?php echo utf8_encode($rowEstado['idestado']); ?></option>
          <?php endwhile ?>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade</label>
        <label for="" class="text-danger">*</label>
        <span class="carregando text-danger">carregando...</span>
        <select name="id_cidade" id="id_cidade" class="form-control">
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">CEP</label>
        <input name="cep"  value="<?php echo $empresas['cep']; ?>" type="text" class="form-control" id="cep" placeholder="CEP">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputText">Nome da Empresa</label>
        <label for="" class="text-danger">*</label>
        <input name="empNome"  value="<?php echo $empresas['nome']; ?>" type="text" class="form-control" id="empNome" placeholder="Nome da Empresa">
      </div>
      <div class="form-group col-md">
        <label for="inputText">CNPJ</label>
        <input name="cnpj"  value="<?php echo $empresas['cnpj']; ?>" type="text" class="form-control" id="cnpj" placeholder="CNPJ">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="inputText">Ramo de atividade</label>
        <label for="" class="text-danger">*</label>
        <input name="ramo"  value="<?php echo $empresas['ramoAtividade']; ?>" type="text" class="form-control" id="ramo" placeholder="Ramo de atividae">
      </div>
      <!-- <div class="form-group col-md-4">
        <label for="inputText">Telefone</label>
        <label for="" class="text-danger">*</label>
        <input name="telefone"  value="<?//php echo $empresas['telefone']; ?>" type="text" class="form-control" id="telefone" placeholder="Telefone">
      </div> -->
    </div>
    <div class="form-row">
      <div class="form-group col-md">
        <hr>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <button type="reset" class="btn btn-danger btn-lg btn-block">Limpar</button>
      </div>
      <div class="form-group col-md-6">
        <button type="submit" class="btn btn-dark btn-lg btn-block">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  $(function () {
    $('#id_estado').change(function () {
      if ($(this).val()) {
        $('#id_cidade').hide();
        $('.carregando').show();
        $.getJSON('cidade_post.php?search=', { id_estado: $(this).val(), ajax: 'true' }, function (j) { 
          var options = '<option value="">Escolha</option>';
          for (var i = 0; i < j.length; i++) {
            options += '<option value="' + j[i].id + '">' + j[i].cidade + '</option>';
          }
          $('#id_cidade').html(options).show();
          $('.carregando').hide();
        });
      } else {
        $('#id_cidade').html('<option value="">– Escolha –</option>');
      }
    });
  });
  </script>

  <script type="text/javascript">
      $(document).ready(function () {
        $("#cnpj").mask("00.000.000/0000-00")
        $("#telefone").mask("(00) 0000-0000")
        $("#cep").mask("00.000-000")
      });
  </script>