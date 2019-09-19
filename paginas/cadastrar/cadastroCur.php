<?php
@session_start();
$con = conecta();

$_SESSION['idiomasCont'] = 2;
$_SESSION['formacaoCont'] = 1;
$_SESSION['experienciaCont'] = 1;
$_SESSION['cargosCont'] = 1;
?>

<style type="text/css">
  .carregando {
    color: #ff0000;
    display: none;
  }

  .hidden {
    display: none;
  }
</style>

<div class="container-fluid">
  <div class="row justify-content-center bg-light">
    <div class="col-md-5 ml-md-4  border border-dark  shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px">
      <form id="formCurriculo" action="?pagina=salvarcurriculo" method="post">
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputEmail" class="control-label">Email</label>
            <label for="" class="text-danger">*</label>
            <input name="email" type="email" class="form-control obrigatorio" id="inputEmail" placeholder="Email"
              data-error="Por favor, informe um e-mail válido.">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputPassword4">Senha</label>
            <label for="" class="text-danger">*</label>
            <input type="password" class="form-control obrigatorio" name="senha" id="inputPassword" placeholder="Senha"
              data-minlength="6" data-maxlength="12">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputPassword4">Confirmar senha</label>
            <label for="" class="text-danger">*</label>
            <input name="confirmarSenha" type="password" class="form-control obrigatorio" id="confirmarSenha"
              data-match="#inputPassword" placeholder="Confirmar senha">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Nome</label>
            <label for="" class="text-danger">*</label>
            <input name="nome" data-error="Digite o seu nome" type="text" class="form-control obrigatorio" id="nome"
              placeholder="Nome">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">CPF</label>
            <label for="" class="text-danger">*</label>
            <input name="cpf" data-error="Digite o seu CPF" data-error="Digite o seu CPF" type="text"
              class="form-control obrigatorio" id="cpf" placeholder="CPF">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputZip">CEP</label>
            <label for="" class="text-danger">*</label>
            <input name="cep" type="text" data-error="Digite o seu CEP" class="form-control obrigatorio" id="cep"
              placeholder="CEP">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="id_estado" data-error="Selecione um estado" id="id_estado" class="form-control obrigatorio">
              <option value="">Escolha</option>
              <?php
              $resEstado = mysqli_query ($con, 'SELECT * FROM estado');
              while ($rowEstado = mysqli_fetch_assoc($resEstado)):
            ?>
              <option value="<?php echo $rowEstado['idestado'] ?>"><?php echo utf8_encode($rowEstado['estado']); ?>
              </option>
              <?php endwhile ?>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div id="cidadecom" class="form-row">
          <div class="form-group col-md">
            <label for="inputCity" id="cidade">Cidade</label>
            <label for="" class="text-danger">*</label>
            <span class="carregando text-danger">carregando...</span>
            <select name="id_cidade" data-error="Selecione uma cidade" id="id_cidade" class="form-control obrigatorio">
              <option value="">Escolha um estado primeiro</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Rua</label>
            <label for="" class="text-danger">*</label>
            <input name="rua" data-error="Digite seu endereço" type="text" class="form-control obrigatorio" id="rua"
              placeholder="Rua">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Número</label>
            <label for="" class="text-danger">*</label>
            <input name="numero" data-error="Digite o número do seu endereço" type="number"
              class="form-control obrigatorio" id="numero" placeholder="Número">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Complemento</label>
            <input name="complemento" type="text" class="form-control" id="complemento" placeholder="Complemento">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Deficiência</label>
            <label for="" class="text-danger">*</label>
            <select name="deficiencia" data-error="Selecione" id="deficiencia" class="form-control obrigatorio">
              <option selected value="1">Não tenho deficiência</option>
              <option value="2">Deficiência visual</option>
              <option value="3">Deficiência intelectual</option>
              <option value="4">Deficiência auditiva</option>
              <option value="5">Deficiência física</option>
              <option value="6">Deficiência mental/psicossocial</option>
              <option value="7">Deficiência múltipla</option>
              <option value="8">Deficiência Transtorno do Espectro Autista(TEA)</option>
              <option value="9">Reabilitado pelo INSS</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Gênero</label>
            <label for="" class="text-danger">*</label>
            <select name="genero" data-error="Selecione um gênero" id="genero" class="form-control obrigatorio">
              <option selected="selected" value="">Selecione</option>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
              <option value="O">Outro</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Estado civil</label>
            <label for="" class="text-danger">*</label>
            <select name="estadocivil" data-error="Selecione um estado civil" id="estadocivil"
              class="form-control obrigatorio">
              <option selected="selected" value="">Selecione</option>
              <option value="C">Casado</option>
              <option value="D">Divorciado</option>
              <option value="S">Separado</option>
              <option value="X">Solteiro</option>
              <option value="V">Viúvo</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Está empregado</label>
            <label for="" class="text-danger">*</label>
          </div>
          <div class="help-block with-errors text-danger"></div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label class="radio-inline"><input value="1" type="radio" name="empregado">Sim</label>
          </div>
          <div class="form-group col-sm-6">
            <label class="radio-inline"><input value="2" checked type="radio" name="empregado">Não</label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Objetico profissional</label>
            <label for="" class="text-danger">*</label>
            <input name="obj" type="text" data-error="Digite seu objetivo profissinal" class="form-control obrigatorio"
              id="obj" placeholder="Objetico profissional">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Jornada</label>
            <label class="text-danger">*</label>
            <select name="jornada" data-error="Selecione uma jornada" class=" custom-select obrigatorio" id="jornada">
              <option selected="selected" value="">Selecione</option>
              <option value="NO">Noturno</option>
              <option value="MA">Parcial manhãs</option>
              <option value="NI">Parcial noites</option>
              <option value="TR">Parcial tardes</option>
              <option value="IN">Período Integral</option>
              <option value="AL">Todas</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Tipo Contrato</label>
            <label class="text-danger">*</label>
            <select name="tipoContrato" data-error="Selecione um tipo de contrato" class="custom-select obrigatorio"
              id="tipoContrato">
              <option selected="selected" value="">Selecione</option>
              <option value="AU">Autônomo</option>
              <option value="CO">Cooperado</option>
              <option value="EF">Efetivo – CLT</option>
              <option value="ES">Estágio</option>
              <option value="OU">Outros</option>
              <option value="PS">Prestador de Serviços (PJ)</option>
              <option value="TM">Temporário</option>
              <option value="TR">Trainee</option>
              <option value="AL">Todos</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Nível hierárquico mínimo</label>
            <label class="text-danger">*</label>
            <select name="nivelHierarquicoMin" data-error="Selecione um nível hierárquico mínimo"
              class="custom-select obrigatorio" id="nivelHierarquicoMin">
              <option selected="selected" value="">Selecione</option>
              <option value="ES">Estagiário</option>
              <option value="OP">Operacional</option>
              <option value="AU">Auxiliar</option>
              <option value="AS">Assistente</option>
              <option value="TR">Trainee</option>
              <option value="AN">Analista</option>
              <option value="EN">Encarregado</option>
              <option value="SU">Supervisor</option>
              <option value="CO">Consultor</option>
              <option value="EP">Especialista</option>
              <option value="CR">Coordenador</option>
              <option value="GE">Gerente</option>
              <option value="DI">Diretor</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Nível hierárquico máximo</label>
            <label class="text-danger">*</label>
            <select name="nivelHierarquicoMax" data-error="Selecione um nível hierárquico máximo"
              class="custom-select obrigatorio" id="nivelHierarquicoMax">
              <option selected="selected" value="">Selecione</option>
              <option value="ES">Estagiário</option>
              <option value="OP">Operacional</option>
              <option value="AU">Auxiliar</option>
              <option value="AS">Assistente</option>
              <option value="TR">Trainee</option>
              <option value="AN">Analista</option>
              <option value="EN">Encarregado</option>
              <option value="SU">Supervisor</option>
              <option value="CO">Consultor</option>
              <option value="EP">Especialista</option>
              <option value="CR">Coordenador</option>
              <option value="GE">Gerente</option>
              <option value="DI">Diretor</option>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Cargo almejado</label>
            <label class="text-danger">*</label>
            <select name="cargoAlmejado" data-error="Selecione um cargo almejado" class="custom-select obrigatorio"
              id="cargoAlmejado">
              <option value="">Escolha</option>
              <?php
              $resCargos = mysqli_query ($con, 'SELECT * FROM cargos');
              while ($rowCargos = mysqli_fetch_assoc($resCargos)):
            ?>
              <option value="<?php echo $rowCargos['idcargos'] ?>"><?php echo utf8_encode($rowCargos['cargo']); ?>
              </option>
              <?php endwhile ?>
            </select>
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div id="novosCargos"></div>
        <div class="form-row">
          <button type="button" id="addCargoAlmejado" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar Cargo 
          Almejado</button>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputIdioma">Pretensão salarial</label>
            <label for="" class="text-danger">*</label>
            <select name="pretensao" data-error="Selecione a pretensão salarial" class="custom-select obrigatorio"
              id="pretensao">
              <option selected="selected" value="">Selecione</option>
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
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Telefone</label>
            <label for="" class="text-danger">*</label>
            <input name="telefone" type="text" data-error="Digite seu telefone" class="form-control obrigatorio"
              id="telefone" placeholder="Telefone">
            <div class="help-block with-errors text-danger"></div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <h5>Idiomas</h5>
          </div>
        </div>

        <div id="idiomas">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputIdioma">Idioma</label>
              <label for="" class="text-danger">*</label>
              <select name="idioma" class="custom-select" id="idioma">
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
              <select name="nivel" class="custom-select" id="inlineFormCustomSelect">
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

        <div id="novasFormacoes"></div>

        <div class="form-row">
          <div class="form-group col-md">
            <button type="button" id="addformacao" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar
              formação acadêmica</button>
          </div>
        </div>
        <div class="form-row">
          <div class="col-sm-4">
            <h5>Já trabalhou?</h5>
          </div>
          <div class="col-sm-2">
            <button type="button" id="trabalhouNao" class="btn btn-danger btn-excluir-formcao">Não</button>
          </div>
          <div class="col-sm-3">
            <button type="button" id="trabalhouSim" class="btn btn-danger btn-excluir-formcao">Sim</button>
          </div>
        </div>
        <div class="form-row">
          <hr>
        </div>

        <div id="trabalhos" class="hidden">
          <div class="form-row">
            <div class="form-group col-md">
              <h5>Experiência Profissional</h5>
            </div>
          </div>
          <div id="novasexperiencias"></div>
          <div class="form-row">
            <div class="form-group col-md">
            <button type="button" id="addexperienciaprof" class="btn btn-dark btn-lg btn-block btn-sm">experiência 
              Profissional</button>
          </div>
        </div>
      </div>
          
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <button type="reset" class="btn btn-danger btn-lg btn-block">Limpar</button>
          </div>
          <div class="form-group col-md-6">
            <button type="submit" id="proximo" class="btn btn-dark btn-lg btn-block">Próximo</button>
          </div>
        </div>
      </form>
        <script>
          grecaptcha.ready(function() {
            grecaptcha.execute('6Lc3xrgUAAAAAIPwfWwxR5VSOfAjmsaD_UGfyYfO', {action: 'homepage'}).then(function(token) {
          console.log(token);
            });
          });
        </script>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    $("#cpf").mask("000.000.000-00");
    $("#telefone").mask("(00) 0000-0000");
    $("#cep").mask("00.000-000");
    $("#salario").mask("999.999.990,00", { reverse: true });

    // function imprimirIdioma(idioma)
    // {
    //   //O método $.ajax(); é o responsável pela requisição
    //   $.ajax({
    //     //Configurações
    //     type: 'POST',//Método que está sendo utilizado.
    //     dataType: 'html',//É o tipo de dado que a página vai retornar.
    //     url: 'http://localhost/BuscaEmp3/paginas/add/idiomas.php',//Indica a página que está sendo solicitada.
    //     data: {idioma: idioma},//Dados para consulta
    //     //função que será executada quando a solicitação for finalizada.
    //     success: function (idiomas)
    //     {
    //       $("#novosIdiomas").html(idiomas);
    //       }
    //       });
    //   }
    
    // $("#incluirIdioma").click(function(){
    //   buscar($("#idioma").val());
    // });

    $('body').on('click', '.btn-excluir-idioma', function() {
      var idiomaRow = "#"+$(this).attr("idioma") ;
      $(idiomaRow).remove();
    });

    $('body').on('click', '.btn-excluir-formcao', function() {
      var formacaoRow = "#"+$(this).attr("formacao") ;
      $(formacaoRow).remove();
    });
    
    $('body').on('click', '.btn-excluir-cargo', function() {
      var cargoRow = "#"+$(this).attr("cargoAlmejado") ;
      $(cargoRow).remove();
    });

    $('body').on('click', '.btn-excluir-experiencia', function() {
      var experienciaRow = "#"+$(this).attr("experiencia") ;
      $(experienciaRow).remove();
    });
    
    $("#trabalhouSim").click(function () {
      $('#trabalhos').show();
    });

    $("#addCargoAlmejado").click(function () {
      $.ajax({
        dataType: 'html',
        url: 'http://localhost/BuscaEmp3/paginas/add/cargoAlmejado.php',
        success: function(curso){
          $("#novosCargos").append(curso);
        }
      });
    });

    $("#addexperienciaprof").click(function () {
      $.ajax({
        dataType: 'html',
        url: 'http://localhost/BuscaEmp3/paginas/add/experienciaProfissinal.php',
        success: function(experiencia){
          $("#novasexperiencias").append(experiencia);
        }
      });
    });

    $("#addformacao").click(function () {
      $.ajax({
        dataType: 'html',
        url: 'http://localhost/BuscaEmp3/paginas/add/formacaoAcademica.php',
        success: function(formacao){
          $("#novasFormacoes").append(formacao);
        }
      });
    });

    $("#addIdioma").click(function () {
      // $("#idiomas").append('<h2>asdasd</h2>');
      $.ajax({
        dataType: 'html',
        url: 'http://localhost/BuscaEmp3/paginas/add/idiomas.php',
        success: function(idiomas){
          $("#novosIdiomas").append(idiomas);
        }
      });
    });

    function validar(evento, this_element){
      if( this_element.val() == "" ){
          // Busca o próximo "span" depois do campo e altera o texto
          var text = this_element.attr("data-error");
          this_element.next("div").text(text);
          this_element.addClass("border-danger");

          // Para a submissão do form
          evento.preventDefault();

          }else{
            // Limpa o texto do span
            this_element.next("div").text("");
            this_element.removeClass("border-danger");
          }
    }

    // Quando o formulário for submetido...
    // $("#formCurriculo").submit(function(evento){
      $('body').on('blur', '.obrigatorio', function(evento){
        validar(evento, $(this));
      });

      // $('body').on('click', '#proximo', function(evento){
      // $(".obrigatorio").each(function(){
      //   // Se o valor do campo for vazio...
      //   validar(evento, $(this));

      //     var tamanhomin = $(this).attr('data-minlength');
      //     var tamonhomax = $(this).attr('data-maxlength');

      //     if(parseInt(tamanhomin) > $(this).val().trim().length){
      //       $(this).next("div").text("A senha precisa ter, pelo menos, "+ tamanhomin + " caracteres.");
      //       $(this).addClass("border-danger");
      //     }else if(parseInt(tamonhomax) < $(this).val().trim().length){
      //       $(this).next("div").text("A senha pode ter  até "+ tamonhomax + " caracteres.");
      //       $(this).addClass("border-danger");
      //     }

      //   });
      // });

    $('#concluido').change(function () {
      $('#inputConclusaoDisabled').hide();
      $('#inputConclusao').show();
      $('#conclusaoLabel2').hide();
      $('#conclusaoLabel').show();
    });
    $('#cursando').change(function () {
      $('#inputConclusaoDisabled').hide();
      $('#inputConclusao').show();
      $('#conclusaoLabel').hide();
      $('#conclusaoLabel2').show();
    });
    $('#trancado').change(function () {
      $('#inputConclusaoDisabled').show();
      $('#inputConclusao').hide();
    });

    // $("#trabalhouNao").click(function () {
    //   $('#trabalhos').hide();
    // });

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
          $('#id_cidade').html('<option value="">Escolha</option>');
        }
      });
    });
  });

  $(function () {

  });

  $(function () {
    $('#id_pais2').change(function () {
      var pais = document.getElementById("id_pais2");
      var paisSelect = pais.options[pais.selectedIndex].value;

      if (paisSelect == 26) {
        $('#estado_pais2').show();
      }

    });
  });

</script>