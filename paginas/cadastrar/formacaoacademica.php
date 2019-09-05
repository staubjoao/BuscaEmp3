<div class="form-row">
    <div class="form-group col-sm">
        <label for="inputText">Nome da Instituição</label>
        <label for="" class="text-danger">*</label>
        <input name="instituicao" type="text" class="form-control" id="instituicao" placeholder="Nome da Instituição">
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
    <div class="form-group col-md-1">
        <label class="text-white">Remover</label>
        <button type="button" class="btn btn-danger btn-excluir-idioma"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
    </div>
</div>