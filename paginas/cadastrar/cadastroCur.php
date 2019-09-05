<?php
$con = conecta();
$res = mysqli_query ($con, 'SELECT * FROM estado');
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
      <form action="?pagina=questionario" method="post">
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputEmail4">Email</label>
            <label for="" class="text-danger">*</label>
            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
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
          <div class="form-group col-md">
            <label for="inputText">Nome</label>
            <label for="" class="text-danger">*</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">CPF</label>
            <label for="" class="text-danger">*</label>
            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="id_estado" id="id_estado" class="form-control">
              <option value="0">Escolha</option>
              <?php
              $resEstado = mysqli_query ($con, 'SELECT * FROM estado');
              while ($rowEstado = mysqli_fetch_assoc($resEstado)):
            ?>
              <option value="<?php echo $rowEstado['idestado'] ?>"><?php echo utf8_encode($rowEstado['estado']); ?>
              </option>
              <?php endwhile ?>
            </select>
          </div>
        </div>
        <div id="cidadecom" class="form-row">
          <div class="form-group col-md">
            <label for="inputCity" id="cidade">Cidade</label>
            <label for="" class="text-danger">*</label>
            <span class="carregando text-danger">carregando...</span>
            <select name="id_cidade" id="id_cidade" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputZip">CEP</label>
            <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Endereço">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Número</label>
            <input name="numero" type="number" class="form-control" id="numero" placeholder="Número">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Deficiência</label>
            <label for="" class="text-danger">*</label>
            <select name="deficiencia" id="deficiencia" class="form-control">
              <option selected="selected" value="0">Selecione</option>
              <option value="1">Não tenho deficiência</option>
              <option value="2">Deficiência visual</option>
              <option value="3">Deficiência intelectual</option>
              <option value="4">Deficiência auditiva</option>
              <option value="5">Deficiência física</option>
              <option value="6">Deficiência mental/psicossocial</option>
              <option value="7">Deficiência múltipla</option>
              <option value="8">Deficiência Transtorno do Espectro Autista(TEA)</option>
              <option value="9">Reabilitado pelo INSS</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Sexo</label>
            <label for="" class="text-danger">*</label>
            <select name="sexo" id="sexo" class="form-control">
              <option selected="selected" value="0">Selecione</option>
              <option value="Homem">Homem</option>
              <option value="Mulher">Mulher</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Estado civil</label>
            <label for="" class="text-danger">*</label>
            <select name="estadocivil" id="estadocivil" class="form-control">
              <option selected="selected" value="0">Selecione</option>
              <option value="Casado">Casado</option>
              <option value="Divorciado">Divorciado</option>
              <option value="Separado">Separado</option>
              <option value="Solteiro">Solteiro</option>
              <option value="Viuvo">Viúvo</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Está empregado</label>
            <label for="" class="text-danger">*</label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label class="radio-inline"><input value="1" type="radio" name="empregado">Sim</label>
          </div>
          <div class="form-group col-sm-6">
            <label class="radio-inline"><input value="2" type="radio" name="empregado">Não</label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Objetico profissional</label>
            <label for="" class="text-danger">*</label>
            <input name="obj" type="text" class="form-control" id="obj" placeholder="Objetico profissional">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputIdioma">Pretensão salarial</label>
            <label for="" class="text-danger">*</label>
            <select name="pretensao" class="custom-select" id="pretensao">
              <option selected="selected" value="0">Selecione</option>
              <option value="1">Até R$ 1.000,00</option>
              <option value="2">A partir de R$ 1.000,00</option>
              <option value="3">A partir de R$ 2.000,00</option>
              <option value="4">A partir de R$ 3.000,00</option>
              <option value="5">A partir de R$ 4.000,00</option>
              <option value="6">A partir de R$ 5.000,00</option>
              <option value="7">A partir de R$ 6.000,00</option>
              <option value="8">A partir de R$ 7.000,00</option>
              <option value="9">A partir de R$ 8.000,00</option>
              <option value="10">A partir de R$ 9.000,00</option>
              <option value="11">A partir de R$ 10.000,00</option>
              <option value="12">A partir de R$ 15.000,00</option>
              <option value="13">Acima de R$ 20.000,00</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Telefone</label>
            <label for="" class="text-danger">*</label>
            <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Telefone">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <h5>Idiomas</h5>
          </div>
        </div>
        <div class="form-row">
          <input type="hidden" id="qtdeIdiomas" name="qtdeIdiomas" value="1">
          <div class="form-group col-md-6">
            <label for="inputIdioma">Idioma</label>
            <label for="" class="text-danger">*</label>
            <select name="idioma1" class="custom-select" id="inlineFormCustomSelect">
              <option selected value="0">Escolha</option>
              <?php
              $resIdiomas = mysqli_query ($con, 'SELECT * FROM idiomas');
              while ($rowIdiomas = mysqli_fetch_assoc($resIdiomas)):
              ?>
              <option value="<?php echo $rowIdiomas['ididiomas'] ?>"><?php echo utf8_encode($rowIdiomas['idioma']); ?>
              </option>
              <?php endwhile ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputIdioma">Nível</label>
            <label for="" class="text-danger">*</label>
            <select name="nivel1" class="custom-select" id="inlineFormCustomSelect">
              <option value="0">Nível</option>
              <option value="Basico">Básico</option>
              <option value="Intermediario">Intermediário</option>
              <option value="Avancado">Avançado</option>
              <option value="Nativo">Nativo</option>
            </select>
          </div>
        </div>
        <div id="novosIdiomas"></div>
        <div class="form-row">
          <div class="form-group col-sm">
            <button type="button" id="addIdioma" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar outro
              idioma</button>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <h5>Formação Acadêmica</h5>
          </div>
        </div>
        <input type="hidden" id="qtdeFormacao" name="qtdeFormacao" value="0">
        <div id="formacaoacademica">
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <button type="button" id="addformacao" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar
              formação acadêmica</button>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <button type="reset" class="btn btn-danger btn-lg btn-block">Limpar</button>
          </div>
          <div class="form-group col-md-6">
            <button type="submit" class="btn btn-dark btn-lg btn-block">Próximo</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    $("#cpf").mask("000.000.000-00")
    $("#telefone").mask("(00) 0000-0000")
    $("#cep").mask("00.000-000")

    $('#id_cidade').hide();
    $('#cidade').hide();
    $('#cidadecom').hide();
    $('.carregando').hide();
    $('#estadocom').hide();
    $('#estado_pais').hide();
    $('#curso').hide();
    $('#conclusaoLabel2').hide();

    $(function () {
      $('#concluido').change(function () {
        $('#conclusao').show();
        $('#conclusaoLabel2').hide();
        $('#conclusaoLabel').show();
      });
      $('#cursando').change(function () {
        $('#conclusaoLabel').hide();
        $('#conclusaoLabel2').show();
      });
      $('#trancado').change(function () {
        $('#conclusao').hide();
      });
    });

    $(function () {
      $('#id_pais').change(function () {
        var pais = document.getElementById("id_pais");
        var paisSelect = pais.options[pais.selectedIndex].value;

        if (paisSelect == 26) {
          $('#estado_pais').show();
        }

      });
    });

    $("#addformacao").click(function (e) { 
      e.preventDefault();
      $.get("http://localhost/BuscaEmp/paginas/cadastrar/formacaoacademica.php", 
        function (data, textStatus, jqXHR) {
          $("#formacaoacademica").html(data);
        },
        "html"
      );

    });

    $(function () {
      $('#id_nivel').change(function () {
        if ($(this).val()) {
          $('#curso').show();
          $.getJSON('http://localhost/BuscaEmp/paginas/fks/curso_post.php', { id_nivel: $(this).val(), ajax: 'true' }, function (j) {
            var options = '<option value="">Escolha</option>';
            for (var i = 0; i < j.length; i++) {
              options += '<option value="' + j[i].idccurso + '">' + j[i].curso + '</option>';
            }
            $('#id_curso').html(options).show();
          });
        } else {
          $('#id_curso').html('<option value="">– Escolha –</option>');
        }
      });
    });


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

    $("#addIdioma").click(function () {

      // Buscar propriedade: var num = ...attr('numIdioma');

      //if( isset($_REQUEST['idiomaX']) ){}

      // alert("ok");
      // recebe o valor atual do qtdeIdiomas
      var qtde = parseInt($("#qtdeIdiomas").val()) + 1;
      // incrementa o valor e atualiza o campo .val(..+1)
      $("#qtdeIdiomas").val("" + qtde);

      var nameIdioma = 'idioma' + qtde;
      var nameNivel = 'nivel' + qtde;

      var idiomas = $("#novosIdiomas").html();

      idiomas += '' +
        '<div class="form-row" id="idioma' + qtde + '">' +
        '<div class="form-group col-md-5" >' +
        '<label for="inputIdioma">Idioma</label>' +
        '<select class="custom-select" name="' + nameIdioma + '">' +
        '<option selected value="0">Escolha</option>' +
          <?php
            $resIdiomas = mysqli_query($con, 'SELECT * FROM idiomas');
      while ($rowIdiomas = mysqli_fetch_assoc($resIdiomas)):
          ?>
          '<option value="<?php echo $rowIdiomas['ididiomas'] ?>"><?php echo utf8_encode($rowIdiomas['idioma']); ?></option>' +
          <?php endwhile ?>
        '</select>' +
        '</div >' +
        '<div class="form-group col-md-5">' +
        '<label for="inputIdioma">Nível</label>' +
        '<select class="custom-select" name="' + nameNivel + '">' +
        '<option value="0">Nível</option>' +
        '<option value="Basico">Básico</option>' +
        '<option value="Intermediario">Intermediário</option>' +
        '<option value="Avancado">Avançado</option>' +
        '<option value="Nativo">Nativo</option>' +
        '</select>' +
        '</div>' +
        '<div class="form-group col-md-1">' +
        '<label class="text-white">Remover</label>' +
        '<button type="button" class="btn btn-danger btn-excluir-idioma" numIdioma="' + qtde + '"><i class="fa fa-trash" aria-hidden="true"></i></button>' +
        '</div>' +
        '</div>' +
        '';

      $("#novosIdiomas").html(idiomas);

    });

    $('#novosIdiomas').on('click', '.btn-excluir-idioma', function () {
      var idDiv = "#idioma" + $(this).attr("numIdioma");
      $(idDiv).remove();
    });

    
      $("#addformacao").click(function () {
    
      });
  });

  

</script>