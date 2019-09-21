<?php
@session_start();
require_once('../../lib/funcs.php');

$con = conecta();

$numCargos = $_SESSION['cargosCont'] + 1;
$_SESSION['cargosCont'] = $numCargos;

?>
<div id="<?php echo"cargoRow".$numCargos?>">
<div class="form-row">
    <div class="form-group col-md-11">
        <label>Cargo almejado</label>
        <label class="text-danger">*</label>
        <select name="<?php echo"cargoAlmejado".$numCargos?>" data-error="Selecione um cargo almejado"
            class="custom-select obrigatorio" id="<?php echo"cargoAlmejado".$numCargos?>">
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
        <div class="help-block with-errors text-danger"></div>
        <div class="form-group col-md-1">
            <label class="text-white">Remove</label>
            <button cargoAlmejado="<?php echo"cargoRow".$numCargos?>" type="button" class="btn btn-danger btn-excluir-cargo"
                numIdioma=""><i class="fa fa-trash" aria-hidden="true"></i></button>
    </div>
</div>
</div>