<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <div class="row">
                <div class="col-sm">
                    <label>Cargo ofertado</label>
                    <select name="cargo" data-error="Selecione um cargo"
                        class="custom-select obrigatorio" id="cargo">
                        <option value="">Escolha</option>
                        <?php
                            $con = conecta();
                            $resCargos = mysqli_query ($con, 'SELECT * FROM cargos');
                            while ($rowCargos = mysqli_fetch_assoc($resCargos)):
                          ?>
                        <option value="<?php echo $rowCargos['idcargos'] ?>">
                            <?php echo utf8_encode($rowCargos['cargo']); ?>
                        </option>
                        <?php endwhile ?>
                    </select>
                    <div class="help-block with-errors text-danger"></div>
                </div>
            </div>
            <div class="row">
                <br>
            </div>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <button type="submit" id="buscar" class="btn btn-primary btn-lg btn-block">Buscar</button>
                </div>
            </div>
            <div id="curriculos">
            </div>
        </div>
    </div>
</div>

<script>
    function buscar(cargo) {
        //O método $.ajax(); é o responsável pela requisição
        $.ajax
            ({
                //Configurações
                type: 'POST',//Método que está sendo utilizado.
                dataType: 'html',//É o tipo de dado que a página vai retornar.
                url: 'paginas/buscarcurriculosbdCargo.php',//Indica a página que está sendo solicitada.
                //função que vai ser executada assim que a requisição for enviada
                beforeSend: function () {
                    $("#curriculos").html("Carregando...");
                },
                data: {
                    "cargo": cargo
                },//Dados para consulta
                //função que será executada quando a solicitação for finalizada.
                success: function (msg) {
                    $("#curriculos").html(msg);
                }
            });
    }

    $('#buscar').click(function () {
        buscar($("#cargo").val());
    });
</script>