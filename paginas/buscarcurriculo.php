<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <div class="row">
                <div class="col-sm-4">
                    <label>Jornada</label>
                    <select name="jornada" data-error="Selecione uma jornada" class=" custom-select obrigatorio"
                        id="jornada">
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
                <div class="col-sm-4">
                    <label>Tipo Contrato</label>
                    <select name="tipoContrato" data-error="Selecione um tipo de contrato"
                        class="custom-select obrigatorio" id="tipoContrato">
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
                <div class="col-sm">
                    <label for="inputIdioma">Pretensão salarial</label>
                    <select name="pretensao" data-error="Selecione a pretensão salarial"
                        class="custom-select obrigatorio" id="pretensao">
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
            <!-- <div class="row">
                    <div class="col-sm">
                        <label class="radio-inline"><input value="1" type="radio" name="empregado">Sim</label>
                    </div>
                    <div class="col-sm">
                        <label class="radio-inline"><input value="2" checked type="radio" name="empregado">Não</label>
                    </div>
                </div> -->
            <div class="row">
                <div class="col-sm-4">
                    <label>Nível hierárquico da vaga</label>
                    <select name="nivelHierarquico" data-error="Selecione um nível hierárquico mínimo"
                        class="custom-select obrigatorio" id="nivelHierarquico">
                        <option selected="selected" value="">Selecione</option>
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
                    <div class="help-block with-errors text-danger"></div>
                </div>
                <div class="col-sm-8">
                    <label>Cargo ofertado</label>
                    <select name="cargoAlmejado" data-error="Selecione um cargo almejado"
                        class="custom-select obrigatorio" id="cargoAlmejado">
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
            <div class="row" id="pergunta">

                <div class="col-sm-3">
                <label>Trabalho em equipe:</label>
                    <div class="range-slider">
                        <input name="competencia1" class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
                <div class="col-sm-3">
                <label>Adaptação: </label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
                <div class="col-sm-3">
                <label >Aceitação:</label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
                <div class="col-sm-3">
                <label>Proatividade:</label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
            </div>
            <div class="row" id="pergunta2">

                <div class="col-sm-3">
                <label>Comprometimento:</label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
                <div class="col-sm-3">
                <label>Autocontrole:</label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
                <div class="col-sm-3">
                <label >Habilidade de Comunicação:</label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
                </div>
                <div class="col-sm-3">
                <label>Conhecimento Técnico:</label>
                    <div class="range-slider">
                        <input class="custom-range" type="range" value="0" min="0" max="10">
                    </div>
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
    function buscar(jornada, tipoContrato, pretensao, nivelHierarquico, cargoAlmejado) {
        //O método $.ajax(); é o responsável pela requisição
        $.ajax
            ({
                //Configurações
                type: 'POST',//Método que está sendo utilizado.
                dataType: 'html',//É o tipo de dado que a página vai retornar.
                url: 'paginas/buscarcurriculosbd.php',//Indica a página que está sendo solicitada.
                //função que vai ser executada assim que a requisição for enviada
                beforeSend: function () {
                    $("#curriculos").html("Carregando...");
                },
                data: {
                    "jornada": jornada, "tipoContrato": tipoContrato, "pretensao": pretensao,
                    "nivelHierarquico": nivelHierarquico, "cargoAlmejado": cargoAlmejado
                },//Dados para consulta
                //função que será executada quando a solicitação for finalizada.
                success: function (msg) {
                    $("#curriculos").html(msg);
                }
            });
    }

    $('#buscar').click(function () {
        buscar($("#jornada").val(), $("#tipoContrato").val(), $("#pretensao").val(), $("#nivelHierarquico").val(),
            $("#cargoAlmejado").val());
    });
</script>