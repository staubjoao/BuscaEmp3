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
      <form name="formEmpresa" id="formEmpresa" data-toggle="validator" role="form" action="?pagina=salvaremp" method="post">
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputEmail" class="control-label">Email</label>
            <label for="" class="text-danger">*</label>
            <input name="email" type="email" class="form-control obrigatorio" id="inputEmail" placeholder="Email" data-error="Por favor, informe um e-mail válido." >
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputPassword4">Senha</label>
            <label for="" class="text-danger">*</label>
            <input type="password" class="form-control obrigatorio" name="senha" id="inputPassword" placeholder="Senha" data-minlength="6" data-maxlength="12">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputPassword4">Confirmar senha</label>
            <label for="" class="text-danger">*</label>
            <input name="confirmarSenha" type="password" class="form-control obrigatorio" id="confirmarSenha" data-match="#inputPassword" placeholder="Confirmar senha">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputAddress">Endereço</label>
            <label for="" class="text-danger">*</label>
            <input name="endereco" type="text" data-error="Digite o endereço da empresa" class="form-control obrigatorio" id="endereco" placeholder="Endereço">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputAddress">Número</label>
            <label for="" class="text-danger">*</label>
            <input name="numero" type="number" data-error="Digite o número de endereço da empresa" class="form-control obrigatorio" id="numero" placeholder="Número">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="id_estado" data-error="Selecione um estado" id="id_estado" class="form-control obrigatorio">
              <option value="" selected>Escolha</option>
              <?php
                $resEstado = mysqli_query ($con, 'SELECT * FROM estado');
                while ($rowEstado = mysqli_fetch_assoc($resEstado)):
              ?>
              <option value="<?php echo $rowEstado['idestado']; ?>"><?php echo utf8_encode($rowEstado['estado']); ?>
              </option>
              <?php endwhile ?>
            </select>
            <div class="help-block with-errors text-danger"></div>
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
            <input name="cep" data-error="Digite o CEP da empresa" type="text" class="form-control obrigatorio" id="cep" placeholder="CEP">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText" class="control-label">Nome da Empresa</label>
            <label for="" class="text-danger">*</label>
            <input name="empNome" id="empNome" class="form-control obrigatorio" placeholder="Nome da Empresa" type="text" data-error="Escreva o nome da empresa">
            <div class="help-block with-errors text-danger"></div>
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
            <input name="ramo" type="text" data-error="Digite o ramo de atividade da empresa" class="form-control obrigatorio" id="ramo" placeholder="Ramo de atividae">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Telefone</label>
            <label for="" class="text-danger">*</label>
            <input name="telefone" type="text" data-error="Digite o telefone para contado da empresa"  class="form-control obrigatorio" id="telefone" placeholder="Telefone">
            <div class="help-block with-errors text-danger"></div>
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


<script>
 $(document).ready(function () {
    $("#cnpj").mask("00.000.000/0000-00");
    $("#telefone").mask("(00) 0000-0000");
    $("#cep").mask("00.000-000");

    $('#cidadecom').hide();

    $(function () {
      $('#id_estado').change(function () {
        if ($(this).val()) {
          $('.carregando').show();
          $('#cidadecom').show();
          $.getJSON('http://localhost/BuscaEmp3/paginas/fks/cidade_post.php', { id_estado: $(this).val(), ajax: 'true' }, function (j) {
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


     // Quando o formulário for submetido...
     $("#formEmpresa").submit(function(evento){
          // Para cada elemento com a classe "obrigatorio"
          $(".obrigatorio").each(function(){
              
              // Se o valor do campo for vazio...
              if( $(this).val() == "" ){
                  
                  // Busca o próximo "span" depois do campo e altera o texto
                  var text = $(this).attr("data-error");
                  $(this).next("div").text(text);
                  $(this).addClass("border-danger");

                  // Para a submissão do form
                  evento.preventDefault();
              
              } else {
                  // Limpa o texto do span
                  $(this).next("div").text("");
                  $(this).removeClass("border-danger");
              }

              var tamanhomin = $(this).attr('data-minlength');
              var tamonhomax = $(this).attr('data-maxlength');

              if(parseInt(tamanhomin) > $(this).val().trim().length){
                $(this).next("div").text("A senha precisa ter, pelo menos, "+ tamanhomin + " caracteres.");
                $(this).addClass("border-danger");
              }else if(parseInt(tamonhomax) < $(this).val().trim().length){
                alert("teste");
                $(this).next("div").text("A senha pode ter  até "+ tamonhomax + " caracteres.");
                $(this).addClass("border-danger");
              }
          });

      });


  });
</script>