<?php
@session_start();
require_once('../../lib/funcs.php');

$con = conecta();

$numFormacoes = $_SESSION['formacaoCont'];
?>

<div id="<?php echo"formacaoRow".$numFormacoes?>">
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
                <option value="">Escolha</option>
                <?php
              $resPais = mysqli_query ($con, 'SELECT * FROM pais');
              while ($rowPais = mysqli_fetch_assoc($resPais)):
            ?>
                <option value="<?php echo $rowPais['idpais'] ?>"><?php echo utf8_encode($rowPais['pais']); ?>
                </option>
                <?php endwhile ?>
            </select>
        </div>
        <div id="<?php echo"estado_pais_formacao".$numFormacoes?>" class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"estadoFormacao".$numFormacoes?>" id="<?php echo"estadoFormacao".$numFormacoes?>" class="form-control">
                <option value="">Escolha</option>
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
                <option value="">Escolha</option>
                <?php
              $resnivel = mysqli_query ($con, 'SELECT * FROM nivel');
              while ($rowNivel = mysqli_fetch_assoc($resnivel)):
            ?>
                <option value="<?php echo $rowNivel['idnivel'] ?>"><?php echo utf8_encode($rowNivel['nivel']); ?>
                </option>
                <?php endwhile ?>
            </select>
        </div>
        <div id="<?php echo"curso".$numFormacoes?>" class="form-group col-md hidden">
            <label for="inputCity">Curso</label>
            <label for="" class="text-danger">*</label>
            <span class="carregando text-danger">carregando...</span>
            <select name="<?php echo"id_curso".$numFormacoes?>" id="<?php echo"id_curso".$numFormacoes?>" class="form-control">
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-sm-4">
            <label class="radio-inline"><input type="radio" id="<?php echo"concluido".$numFormacoes?>" name="estadoCurso">Concluído</label>
        </div>
        <div class="form-group col-sm-4">
            <label class="radio-inline"><input type="radio" id="<?php echo"cursando".$numFormacoes?>" name="estadoCurso">Cursando</label>
        </div>
        <div class="form-group col-sm-4">
            <label class="radio-inline"><input type="radio" id="<?php echo"trancado".$numFormacoes?>" name="estadoCurso">Trancado</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm">
            <label>EAD</label>
            <label class="text-danger">*</label>
            <select name="<?php echo"ead".$numFormacoes?>" id="<?php echo"ead".$numFormacoes?>" class="form-control">
                <option value="">Escolha</option>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputInicio">Inicio</label>
            <input name="<?php echo"inicio".$numFormacoes?>" type="date" class="form-control" id="<?php echo"inicio".$numFormacoes?>" placeholder="Inicio">
        </div>
        <div class="form-group col-sm-5" id="conclusao">
            <label for="inputTermino" id="<?php echo"conclusaoLabel".$numFormacoes?>">Conclusão</label>
            <label class="hidden" for="inputTermino" id="<?php echo"conclusaoEsperadaLabel".$numFormacoes?>">Conclusão esperada</label>
            <input name="<?php echo"termino".$numFormacoes?>" type="date" class="form-control" id="<?php echo"conclusao".$numFormacoes?>" placeholder="Conclusão">
            <input type="date" class="form-control hidden" id="<?php echo"conclusaoDisabled".$numFormacoes?>" placeholder="Conclusão" disabled>
        </div>
        <div class="form-group col-md-1">
            <label class="text-white" for="">Remove</label>
            <button type="button" formacao="<?php echo"formacaoRow".$numFormacoes?>" class="btn btn-danger btn-excluir-formcao"><i class="fa fa-trash"
                    aria-hidden="true"></i></button>
        </div>
    </div>
    <hr>
</div>

<script>
    $(document).ready(function () {
    
    numFormacoes = "<?php echo$numFormacoes; ?>";
    $('#nivelFormacao'+numFormacoes).change(function () {
      if ($(this).val()) {
        $('#curso'+numFormacoes).show();
        $.getJSON('http://localhost/BuscaEmp3/paginas/fks/curso_post.php', { id_nivel: $(this).val(), ajax: 'true' }, function (j) {
          var options = '<option value="">Escolha</option>';
          for (var i = 0; i < j.length; i++) {
            options += '<option value="' + j[i].idccurso + '">' + j[i].curso + '</option>';
          }
          $('#id_curso'+numFormacoes).html(options).show();
        });
      } else {
        $('#id_curso'+numFormacoes).html('<option value="">– Escolha –</option>');
      }
    });
    $('#estado_pais_formacao'+numFormacoes).hide();

    $('.pais').change(function () {
    var pais = $(this).val();

    if (pais == 26) {
        $('#estado_pais_formacao'+numFormacoes).show();
    }else{
        // $("#estado_pais_formacao"+numFormacoes"+ option:contains("")").attr('selected', true);
        $('#estado_pais_formacao'+numFormacoes).hide();
    }
    });

    $('#concluido'+numFormacoes).change(function () {
        $('#conclusaoDisabled'+numFormacoes).hide();
        $('#conclusao'+numFormacoes).show();
        $('#conclusaoEsperadaLabel'+numFormacoes).hide();
        $('#conclusaoLabel'+numFormacoes).show();
    });
    $('#cursando'+numFormacoes).change(function () {
        $('#conclusaoDisabled'+numFormacoes).hide();
        $('#conclusao'+numFormacoes).show();
        $('#conclusaoLabel'+numFormacoes).hide();
        $('#conclusaoEsperadaLabel'+numFormacoes).show();
    });
    $('#trancado'+numFormacoes).change(function () {
        $('#conclusaoDisabled'+numFormacoes).show();
        $('#conclusao'+numFormacoes).hide();
        $('#conclusaoEsperadaLabel'+numFormacoes).hide();
        $('#conclusaoLabel'+numFormacoes).show();
    });
    
});
</script>

<?php
$_SESSION['formacaoCont'] = $numFormacoes + 1;
?>