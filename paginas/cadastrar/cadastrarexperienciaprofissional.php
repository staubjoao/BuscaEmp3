<?php
@session_start();
$con = conecta();

$_SESSION['experienciaCont'] = 0;
?>

<style type="text/css">
    .hidden {
        display: none;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <form id="formPretencao" action="?pagina=gravarexperienciaprofissional" method="post">
                <div id="trabalhou" class="hidden"></div>
                <div class="form-row">
                    <div class="col-sm-4">
                        <h5>Já trabalhou?</h5>
                    </div>
                    <div class="col-sm-2">
                        <button type="button" id="trabalhouNao" name="trabalhouNao" class="btn btn-danger">Não</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" id="trabalhouSim" class="btn btn-danger">Sim</button>
                    </div>
                </div>
                <div id="experienciaHidden" class="hidden">
                    <div id="">
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="inputText">Empresa</label>
                                <label for="" class="text-danger">*</label>
                                <input name="" type="text" class="form-control" id="" placeholder="Empresa" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="inputText">Cargo</label>
                                <label for="" class="text-danger">*</label>
                                <select name="" class="custom-select" id="" disabled>
                                    <option value="">Escolha</option>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label class="radio-inline"><input type="radio" id="" name="trabalho" disabled>Ainda
                                    trabalho</label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="radio-inline"><input type="radio" id="" name="trabalho" disabled>Não
                                    trabalho
                                    mais</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="inputInicio">Inicio</label>
                                <label for="" class="text-danger">*</label>
                                <input name="" type="date" class="form-control" id="" placeholder="Inicio" disabled>
                            </div>
                            <div class="form-group col-sm-6" id="conclusao">
                                <label for="inputTermino" id="conclusaoLabel">Termino</label>
                                <label for="" class="text-danger">*</label>
                                <input type="date" class="form-control" id="" placeholder="Conclusão" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label>Nível hierárquico</label>
                                <label class="text-danger">*</label>
                                <select name="" class="custom-select" id="" disabled>
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
                                <input name="" type="text" class="form-control" id="" disabled>
                            </div>
                        </div>
                        <div id="" class="form-row">
                            <div class="form-group col-md">
                                <label for="inputState">País</label>
                                <label for="" class="text-danger">*</label>
                                <select name="" id="" class="form-control" disabled>
                                    <option value="0">Escolha</option>
                                </select>
                            </div>
                        </div>
                        <div id="" class="form-row">
                            <div class="form-group col-md">
                                <label for="inputState">Estado</label>
                                <label for="" class="text-danger">*</label>
                                <select name="" id="" class="form-control" disabled>
                                    <option value="0">Escolha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label for="inputText">Cidade</label>
                                <label for="" class="text-danger">*</label>
                                <input name="" type="text" class="form-control" id="" placeholder="Cidade" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div id="novasexp" class="hidden">
                    <div id="novasexperiencias"></div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <button type="button" id="addexperienciaprof"
                                class="btn btn-dark btn-lg btn-block btn-sm">Adicionar Experiência
                                Profissional</button>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-8"></div>
                    <div class="form-group col-md-4">
                        <button type="submit" id="proximo" class="btn btn-primary btn-lg btn-block">Próximo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#trabalhouNao").click(function () {
            $("#experienciaHidden").show("slow");
            $("#novasexp").hide("slow");
            // $("#trabalhou").html('<input name="trabalhou" type="text" value="N" disabled>');
        });
        $("#trabalhouSim").click(function () {
            $("#experienciaHidden").hide("slow");
            $("#novasexp").show("slow");
            // $("#trabalhou").remove();
        });
        $("#addexperienciaprof").click(function () {
            $.ajax({
                dataType: 'html',
                url: 'http://localhost/BuscaEmp3/paginas/add/experienciaProfissinal.php',
                success: function (experiencia) {
                    $("#novasexperiencias").append(experiencia);
                }
            });
        });
        $('body').on('click', '.btn-excluir-experiencia', function () {
            var experienciaRow = "#" + $(this).attr("experiencia");
            $(experienciaRow).remove();
        });
    });

</script>