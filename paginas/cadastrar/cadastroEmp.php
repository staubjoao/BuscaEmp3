<?php
$con = conecta();
?>

<style type="text/css">
  .carregando {
    color: #ff0000;
    display: none;
  }
</style>

<div class="container-fluid">
  <div class="row justify-content-center bg-light">
    <div class="col-md-5 ml-md-4  border border-dark  shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px">
      <form action="?pagina=salvaremp" method="post">
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputEmail4">Email</label>
            <label for="" class="text-danger">*</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputPassword4">Senha</label>
            <label for="" class="text-danger">*</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputAddress">Endereço</label>
            <label for="" class="text-danger">*</label>
            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Endereço">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputAddress">Número</label>
            <label for="" class="text-danger">*</label>
            <input name="numero" type="number" class="form-control" id="numero" placeholder="Número">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="id_estado" id="id_estado" class="form-control">
              <option value="0" selected>Escolha</option>
              <?php
                              $resEstado = mysqli_query ($con, 'SELECT * FROM estado');
                              while ($rowEstado = mysqli_fetch_assoc($resEstado)):
                                ?>
              <option value="<?php echo $rowEstado['idestado']; ?>"><?php echo utf8_encode($rowEstado['estado']); ?>
              </option>
              <?php endwhile ?>
            </select>
          </div>
        </div>
        <div id="cidadecom" class="form-row">
          <div class="form-group col-sm">
            <label for="inputCity">Cidade</label>
            <label for="" class="text-danger">*</label>
            <span class="carregando text-danger">carregando...</span>
            <select name="id_cidade" id="id_cidade" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputZip">CEP</label>
            <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Nome da Empresa</label>
            <label for="" class="text-danger">*</label>
            <input name="empNome" type="text" class="form-control" id="empNome" placeholder="Nome da Empresa">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">CNPJ</label>
            <input name="cnpj" type="text" class="form-control" id="cnpj" placeholder="CNPJ">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Ramo de atividade</label>
            <label for="" class="text-danger">*</label>
            <input name="ramo" type="text" class="form-control" id="ramo" placeholder="Ramo de atividae">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Telefone</label>
            <label for="" class="text-danger">*</label>
            <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Ramo de atividade</label>
            <label for="" class="text-danger">*</label>
            <input name="ramo" type="text" class="form-control" id="ramo" placeholder="Ramo de atividae">
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
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#id_cidade').hide();
    $('#cidade').hide();
    $('#cidadecom').hide();

    $(function () {
      $('#id_estado').change(function () {
        if ($(this).val()) {
          $('.carregando').show();
          $('#cidade').show();
          $('#cidadecom').show();
          $.getJSON('http://localhost/BuscaEmp/paginas/fks/cidade_post.php', { id_estado: $(this).val(), ajax: 'true' }, function (j) {
            var options = '<option value="">Escolha</option>';
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].idcidade + '">' + j[i].cidade + '</option>';
            }
            $('#id_cidade').html(options).show();
            $('.carregando').hide();
          });
        } else {
          $('#id_cidade').html('<option value="">– Escolha –</option>');
        }
      });
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