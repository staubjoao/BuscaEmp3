<?php
@session_start();
require_once('../../lib/funcs.php');

$con = conecta();

$numFormacoes = $_SESSION['formacaoCont'];
?>

<div id="formacaoAcademica">
    <div class="form-row">
        <div class="form-group col-sm">
            <h5>Formação Acadêmica</h5>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm">
            <label for="inputText">Nome da Instituição</label>
            <label for="" class="text-danger">*</label>
            <input name="<?php echo"instituicao".$numFormacoes?>" type="text" class="form-control" id="<?php echo"instituicao".$numFormacoes?>"
                placeholder="Nome da Instituição">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md">
            <label for="inputState">País</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"pais".$numFormacoes?>" id="<?php echo"pais".$numFormacoes?>" class="form-control pais">
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
    <div id="estado_pais" class="form-row estado">
        <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"estadoFormacao".$numFormacoes?>" id="<?php echo"estadoFormacao".$numFormacoes?>" class="form-control">
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
        <div class="form-group col-sm">
            <label for="inputText">Cidade</label>
            <label for="" class="text-danger">*</label>
            <input name="<?php echo"cidadeFormacao".$numFormacoes?>" type="text" class="form-control" id="<?php echo"cidadeFormacao".$numFormacoes?>" placeholder="Cidade">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md">
            <label for="inputState">Nível</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"nivelFormacao".$numFormacoes?>" id="<?php echo"nivelFormacao".$numFormacoes?>" class="form-control nivel">
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
    <div id="curso" class="form-row hidden">
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
        <div class="form-group col-sm">
            <label>EAD</label>
            <label class="text-danger">*</label>
            <select name="ead" id="ead" class="form-control">
                <option value="">Escolha</option>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputInicio">Inicio</label>
            <input name="inicio" type="date" class="form-control" id="inputInicio" placeholder="Inicio">
        </div>
        <div class="form-group col-sm-5" id="conclusao">
            <label for="inputTermino" id="conclusaoLabel">Conclusão</label>
            <label class="hidden" for="inputTermino" id="conclusaoLabel2">Conclusão esperada</label>
            <input name="termino" type="date" class="form-control" id="inputConclusao" placeholder="Conclusão">
            <input type="date" class="form-control hidden" id="inputConclusaoDisabled" placeholder="Conclusão" disabled>
        </div>
        <div class="form-group col-md-1">
            <label class="text-white" for="">R</label>
            <button type="button" id="excluirFormacao" class="btn btn-danger btn-excluir-formcao"><i class="fa fa-trash"
                    aria-hidden="true"></i></button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    $('.nivel').change(function () {
      if ($(this).val()) {
        $('#curso').show();
        $.getJSON('http://localhost/BuscaEmp3/paginas/fks/curso_post.php', { id_nivel: $(this).val(), ajax: 'true' }, function (j) {
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
    $('.estado').hide();
        
    $('.pais').change(function () {
    var pais = $(this).val();

    if (pais == 26) {
        $('.estado').show();
    }
    });

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
        $('#conclusaoLabel2').hide();
        $('#conclusaoLabel').show();
    });
    
});
</script>

<?php
$_SESSION['formacaoCont'] = $numFormacoes + 1;
?>