<?php
@session_start();
require_once('../../lib/funcs.php');

$con = conecta();

$numExperiencia = $_SESSION['experienciaCont'] + 1;
$_SESSION['experienciaCont'] = $numExperiencia;
?>

<div id="<?php echo"experienciaRow".$numExperiencia?>">
    <div class="form-row">
        <div class="form-group col-md">
            <label for="inputText">Empresa</label>
            <label for="" class="text-danger">*</label>
            <input name="<?php echo"empresa".$numExperiencia?>" type="text" class="form-control"
                id="<?php echo"empresa".$numExperiencia?>" placeholder="Empresa">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md">
            <label for="inputText">Cargo</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"cargoExperiencia".$numExperiencia?>" class="custom-select"
                id="<?php echo"cargoExperiencia".$numExperiencia?>">
                <option value="">Escolha</option>
                <?php
              $resCargos = mysqli_query ($con, 'SELECT * FROM cargos');
              while ($rowCargos = mysqli_fetch_assoc($resCargos)):
            ?>
                <option value="<?php echo $rowCargos['idcargos'] ?>"><?php echo utf8_encode($rowCargos['cargo']); ?>
                </option>
                <?php endwhile ?>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label class="radio-inline"><input type="radio" value="S" id="<?php echo"aindaTrabalha".$numExperiencia?>"
                    name="<?php echo"trabalho".$numExperiencia?>">Ainda trabalho</label>
        </div>
        <div class="form-group col-sm-6">
            <label class="radio-inline"><input type="radio" value="N" id="<?php echo"naoTrabalha".$numExperiencia?>"
                    name="<?php echo"trabalho".$numExperiencia?>">Não tranalho mais</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="inputInicio">Inicio</label>
            <label for="" class="text-danger">*</label>
            <input name="<?php echo"inicioExperiencia".$numExperiencia?>" type="date" class="form-control"
                id="<?php echo"inicioExperiencia".$numExperiencia?>" placeholder="Inicio">
        </div>
        <div class="form-group col-sm-6" id="conclusao">
            <label for="inputTermino" id="conclusaoLabel">Termino</label>
            <label for="" class="text-danger">*</label>
            <input name="<?php echo"terminoExperiencia".$numExperiencia?>" type="date" class="form-control"
                id="<?php echo"terminoExperiencia".$numExperiencia?>" placeholder="Termino">
            <input type="date" class="form-control hidden" id="<?php echo"terminoDisabled".$numExperiencia?>"
                placeholder="Conclusão" disabled>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md">
            <label>Nível hierárquico</label>
            <label class="text-danger">*</label>
            <select name="<?php echo"nivelHierarquicoExp".$numExperiencia?>" class="custom-select"
                id="<?php echo"nivelHierarquicoExp".$numExperiencia?>">
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
            <input name="<?php echo"salario".$numExperiencia?>" type="text" class="form-control"
                id="<?php echo"salario".$numExperiencia?>" placeholder="Salário">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md">
            <label for="inputState">País</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"id_pais_experiencia".$numExperiencia?>"
                id="<?php echo"id_pais_experiencia".$numExperiencia?>" class="form-control pais">
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
    <div id="<?php echo"estado_pais_exp".$numExperiencia?>" class="form-row hidden">
        <div class="form-group col-md">
            <label for="inputState">Estado</label>
            <label for="" class="text-danger">*</label>
            <select name="<?php echo"id_estado_experiencia".$numExperiencia?>"
                id="<?php echo"id_estado_experiencia".$numExperiencia?>" class="form-control">
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
        <div class="form-group col-sm-11">
            <label for="inputText">Cidade</label>
            <label for="" class="text-danger">*</label>
            <input name="<?php echo"cidadeExperiencia".$numExperiencia?>" type="text" class="form-control"
                id="<?php echo"cidadeExperiencia".$numExperiencia?>" placeholder="Cidade">
        </div>
        <div class="form-group col-md-1">
            <label class="text-white" for="">Remover</label>
            <button type="button" experiencia="<?php echo"experienciaRow".$numExperiencia?>"
                class="btn btn-danger btn-excluir-experiencia"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<hr>

<script>
    numExperiencias = "<?php echo$numExperiencia; ?>";
    $(document).ready(function () {
        $('#aindaTrabalha' + numExperiencias).change(function () {
            $("#terminoDisabled" + numExperiencias).hide();
            $("#terminoExperiencia" + numExperiencias).show();
        });
        $('#naoTrabalha' + numExperiencias).change(function () {
            $("#terminoDisabled" + numExperiencias).show();
            $("#terminoExperiencia" + numExperiencias).hide();
        });

        $('.pais').change(function () {
        var pais = $(this).val();

        if (pais == 26) {
            $('#estado_pais_exp'+numExperiencias).show();
        }else{
            // $("#estado_pais_formacao"+numFormacoes"+ option:contains("")").attr('selected', true);
            $('#estado_pais_exp'+numExperiencias).hide();
        }
        });

    });
</script>