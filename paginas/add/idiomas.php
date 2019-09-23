<?php
@session_start();
require_once('../../lib/funcs.php');

$con = conecta();

$numIdiomas = $_SESSION['idiomasCont'] + 1;
$_SESSION['idiomasCont'] = $numIdiomas;
?>
<div class="form-row" style="display: none" id="<?php echo"idiomaRow".$numIdiomas?>">
    <div class="form-group col-md-6">
        <label for="inputIdioma">Idioma</label>
        <label for="" class="text-danger">*</label>
        <select name="<?php echo"idioma".$numIdiomas?>" class="custom-select obrigatorio" id="<?php echo"idioma".$numIdiomas?>">
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
    <div class="form-group col-md-5">
        <label for="inputIdioma">Nível</label>
        <label for="" class="text-danger">*</label>
        <select name="<?php echo"nivel".$numIdiomas?>" class="custom-select obrigatorio" id="<?php echo"idioma".$numIdiomas?>">
            <option value="0">Nível</option>
            <option value="Basico">Básico</option>
            <option value="Intermediario">Intermediário</option>
            <option value="Avancado">Avançado</option>
            <option value="Nativo">Nativo</option>
        </select>
    </div>
    <div class="form-group col-md-1">
        <label class="text-white">Remove</label>
        <button idioma="<?php echo"idiomaRow".$numIdiomas?>" type="button" class="btn btn-danger btn-excluir-idioma" numIdioma=""><i class="fa fa-trash" aria-hidden="true"></i></button>
    </div>
</div>