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
            <label for="inputAddress">Gênero</label>
            <label for="" class="text-danger">*</label>
            <select name="genero" id="genero" class="form-control">
              <option selected="selected" value="0">Selecione</option>
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
              <option value="O">Outro</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputAddress">Estado civil</label>
            <label for="" class="text-danger">*</label>
            <select name="estadocivil" id="estadocivil" class="form-control">
              <option selected="selected" value="0">Selecione</option>
              <option value="C">Casado</option>
              <option value="D">Divorciado</option>
              <option value="S">Separado</option>
              <option value="X">Solteiro</option>
              <option value="V">Viúvo</option>
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
            <label>Jornada</label>
            <label class="text-danger">*</label>
            <select name="jornada" class="custom-select" id="jornada">
              <option selected="selected" value="0">Selecione</option>
              <option value="NO">Noturno</option>
              <option value="MA">Parcial manhãs</option>
              <option value="NI">Parcial noites</option>
              <option value="TR">Parcial tardes</option>
              <option value="IN">Período Integral</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Tipo Contrato</label>
            <label class="text-danger">*</label>
            <select name="tipoContrato" class="custom-select" id="tipoContrato">
              <option selected="selected" value="0">Selecione</option>
              <option value="AU">Autônomo</option>
              <option value="CO">Cooperado</option>
              <option value="EF">Efetivo – CLT</option>
              <option value="ES">Estágio</option>
              <option value="OU">Outros</option>
              <option value="PS">Prestador de Serviços (PJ)</option>
              <option value="TM">Temporário</option>
              <option value="TR">Trainee</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Nível hierárquico mínimo</label>
            <label class="text-danger">*</label>
            <select name="nivelHierarquicoMin" class="custom-select" id="nivelHierarquicoMin">
              <option selected="selected" value="0">Selecione</option>
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
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <label>Nível hierárquico máximo</label>
            <label class="text-danger">*</label>
            <select name="nivelHierarquicoMax" class="custom-select" id="nivelHierarquicoMax">
              <option selected="selected" value="0">Selecione</option>
              <option selected="selected" value="0">Selecione</option>
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
        <div class="form-row">
          <div class="form-group col-sm">
            <label for="inputText">Nome da Instituição</label>
            <label for="" class="text-danger">*</label>
            <input name="instituicao" type="text" class="form-control" id="instituicao"
              placeholder="Nome da Instituição">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">País</label>
            <label for="" class="text-danger">*</label>
            <select name="id_pais" id="id_pais" class="form-control">
              <option value="0">Escolha</option>
              <?php
              $resPais = mysqli_query ($con, 'SELECT * FROM pais');
              while ($rowPais = mysqli_fetch_assoc($resPais)):
            ?>
              <option value="<?php echo $rowPais['idpais'] ?>"><?php echo utf8_encode($rowPais['pais']); ?>
              </option>
              <?php endwhile ?>
            </select>
          </div>
        </div>
        <div id="estado_pais" class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="id_estado2" id="id_estado2" class="form-control">
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
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Nível</label>
            <label for="" class="text-danger">*</label>
            <select name="id_nivel" id="id_nivel" class="form-control">
              <option value="0">Escolha</option>
              <?php
              $resnivel = mysqli_query ($con, 'SELECT * FROM nivel');
              while ($rowNivel = mysqli_fetch_assoc($resnivel)):
            ?>
              <option value="<?php echo $rowNivel['idnivel'] ?>"><?php echo utf8_encode($rowNivel['nivel']); ?>
              </option>
              <?php endwhile ?>
            </select>
          </div>
        </div>
        <div id="curso" class="form-row">
          <div class="form-group col-md">
            <label for="inputCity">Curso</label>
            <label for="" class="text-danger">*</label>
            <span class="carregando text-danger">carregando...</span>
            <select name="id_curso" id="id_curso" class="form-control">
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-4">
            <label class="radio-inline"><input type="radio" id="concluido" name="estadoCurso">Concluído</label>
          </div>
          <div class="form-group col-sm-4">
            <label class="radio-inline"><input type="radio" id="cursando" name="estadoCurso">Cursando</label>
          </div>
          <div class="form-group col-sm-4">
            <label class="radio-inline"><input type="radio" id="trancado" name="estadoCurso">Trancado</label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="inputInicio">Inicio</label>
            <input name="inicio" type="date" class="form-control" id="inputInicio" placeholder="Inicio">
          </div>
          <div class="form-group col-sm-6" id="conclusao">
            <label for="inputTermino" id="conclusaoLabel">Conclusão</label>
            <label for="inputTermino" id="conclusaoLabel2">Conclusão esperada</label>
            <input name="termino" type="date" class="form-control" id="inputConclusao" placeholder="Conclusão">
          </div>
          <div class="form-group col-md">
            <button type="button" class="btn btn-danger btn-excluir-formcao"><i class="fa fa-trash"
                aria-hidden="true"></i></button>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <button type="button" id="addformacao" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar
              formação acadêmica</button>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm">
            <h5>Experiência Profissional</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Empresa</label>
            <label for="" class="text-danger">*</label>
            <input name="empresa" type="text" class="form-control" id="empresa" placeholder="Empresa">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Cargo</label>
            <label for="" class="text-danger">*</label>
            <input name="cargo" type="text" class="form-control" id="cargo" placeholder="Cargo">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label for="inputInicio">Inicio</label>
            <label for="" class="text-danger">*</label>
            <input name="inicioExp" type="date" class="form-control" id="inicioExp" placeholder="Inicio">
          </div>
          <div class="form-group col-sm-6" id="conclusao">
            <label for="inputTermino" id="conclusaoLabel">Termino</label>
            <label for="" class="text-danger">*</label>
            <input name="terminoExp" type="date" class="form-control" id="terminoExp" placeholder="Termino">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label>Nível hierárquico</label>
            <label class="text-danger">*</label>
            <select name="nivelHierarquicoExp" class="custom-select" id="nivelHierarquicoExp">
              <option selected="selected" value="0">Selecione</option>
              <option value="1">Estagiário</option>
              <option value="2">Operacional</option>
              <option value="3">Auxiliar</option>
              <option value="4">Assistente</option>
              <option value="5">Trainee</option>
              <option value="6">Analista</option>
              <option value="7">Encarregado</option>
              <option value="8">Supervisor</option>
              <option value="9">Consultor</option>
              <option value="10">Especialista</option>
              <option value="11">Coordenador</option>
              <option value="12">Gerente</option>
              <option value="13">Diretor</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputText">Salário</label>
            <label for="" class="text-danger">*</label>
            <input name="salario" type="text" class="form-control" id="salario" placeholder="Salário">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <label for="inputState">País</label>
            <label for="" class="text-danger">*</label>
            <select name="id_pais2" id="id_pais2" class="form-control">
              <option value="0">Escolha</option>
              <?php
              $resPais = mysqli_query ($con, 'SELECT * FROM pais');
              while ($rowPais = mysqli_fetch_assoc($resPais)):
            ?>
              <option value="<?php echo $rowPais['idpais'] ?>"><?php echo utf8_encode($rowPais['pais']); ?>
              </option>
              <?php endwhile ?>
            </select>
          </div>
        </div>
        <div id="estado_pais2" class="form-row">
          <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="id_estado3" id="id_estado3" class="form-control">
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
    $("#cpf").mask("000.000.000-00");
    $("#telefone").mask("(00) 0000-0000");
    $("#cep").mask("00.000-000");
    $("#salario").mask("999.999.990,00", { reverse: true });

    $('#id_cidade').hide();
    $('#cidade').hide();
    $('#cidadecom').hide();
    $('.carregando').hide();
    $('#estadocom').hide();
    $('#estado_pais').hide();
    $('#estado_pais2').hide();
    $('#curso').hide();
    $('#conclusaoLabel2').hide();

    $(function () {
      $('#concluido').change(function () {
        $('#conclusao').show();
        $('#conclusaoLabel2').hide();
        $('#conclusaoLabel').show();
      });
      $('#cursando').change(function () {
        $('#conclusao').show();
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

    $(function () {
      $('#id_pais2').change(function () {
        var pais = document.getElementById("id_pais2");
        var paisSelect = pais.options[pais.selectedIndex].value;

        if (paisSelect == 26) {
          $('#estado_pais2').show();
        }

      });
    });

    // $("#addformacao").click(function (e) { 
    //   e.preventDefault();
    //   $.get("http://localhost/BuscaEmp/paginas/cadastrar/formacaoacademica.php", 
    //     function (data, textStatus, jqXHR) {
    //       $("#formacaoacademica").html(data);
    //     },
    //     "html"
    //   );

    // });

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