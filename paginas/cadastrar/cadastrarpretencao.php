<?php
@session_start();
$con = conecta();

$_SESSION['cargosCont'] = 1;
?>

<style type="text/css">
    .carregando {
        color: #ff0000;
        display: none;
    }

    .hidden {
        display: none;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <form id="formPretencao" action="?pagina=gravarpretencao" method="post">
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label>Jornada</label>
                        <label class="text-danger">*</label>
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
                    <div class="form-group col-sm-5">
                        <label>Tipo Contrato</label>
                        <label class="text-danger">*</label>
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
                    <div class="form-group col-sm-3">
                        <label for="inputText">Está empregado?</label>
                        <label class="text-danger">*</label>
                        <select name="empregado" class="custom-select" id="empregado">
                            <option value="S">Sim</option>
                            <option selected="selected" value="N">Não</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="form-row">
                    <div class="form-group col-sm">
                        <label class="radio-inline"><input value="1" type="radio" name="empregado">Sim</label>
                    </div>
                    <div class="form-group col-sm">
                        <label class="radio-inline"><input value="2" checked type="radio" name="empregado">Não</label>
                    </div>
                </div> -->
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label>Nível hierárquico mínimo</label>
                        <label class="text-danger">*</label>
                        <select name="nivelHierarquicoMin" data-error="Selecione um nível hierárquico mínimo"
                            class="custom-select obrigatorio" id="nivelHierarquicoMin">
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
                    <div class="form-group col-sm-4">
                        <label>Nível hierárquico máximo</label>
                        <label class="text-danger">*</label>
                        <select name="nivelHierarquicoMax" data-error="Selecione um nível hierárquico máximo"
                            class="custom-select obrigatorio" id="nivelHierarquicoMax">
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
                    <div class="form-group col-sm">
                        <label for="inputIdioma">Pretensão salarial</label>
                        <label for="" class="text-danger">*</label>
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
                <div class="form-row">
                    <div class="form-group col-sm-11">
                        <label>Cargo almejado</label>
                        <label class="text-danger">*</label>
                        <select name="cargoAlmejado1" data-error="Selecione um cargo almejado"
                            class="custom-select obrigatorio" id="cargoAlmejado1">
                            <option value="">Escolha</option>
                            <?php
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
                    <div class="form-group col-sm">
                        <label class="text-white" for="">add</label>
                        <button type="button" id="addCargoAlmejado" class="btn btn-info btn-add-cargos"><i
                                class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div id="novosCargos"></div>
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
        $("#addCargoAlmejado").click(function () {
            $.ajax({
                dataType: 'html',
                url: 'http://localhost/BuscaEmp3/paginas/add/cargoAlmejado.php',
                success: function (curso) {
                    $("#novosCargos").append(curso);
                }
            });
        });

        $('body').on('click', '.btn-excluir-cargo', function () {
            var cargoRow = "#" + $(this).attr("cargoAlmejado");
            $(cargoRow).remove();
        });

        function validar(evento, this_element) {
            if (this_element.val() == "") {
                // Busca o próximo "span" depois do campo e altera o texto
                var text = this_element.attr("data-error");
                this_element.next("div").text(text);
                this_element.addClass("border-danger");

                // Para a submissão do form
                evento.preventDefault();

            } else {
                // Limpa o texto do span
                this_element.next("div").text("");
                this_element.removeClass("border-danger");
            }
        }

        $('body').on('blur', '.obrigatorio', function (evento) {
            validar(evento, $(this));
        });

        $('body').on('click', '#proximo', function (evento) {
            $(".obrigatorio").each(function () {
                // Se o valor do campo for vazio...
                validar(evento, $(this));

                var tamanhomin = $(this).attr('data-minlength');
                var tamonhomax = $(this).attr('data-maxlength');

                if (parseInt(tamanhomin) > $(this).val().trim().length) {
                    $(this).next("div").text("A senha precisa ter, pelo menos, " + tamanhomin + " caracteres.");
                    $(this).addClass("border-danger");
                } else if (parseInt(tamonhomax) < $(this).val().trim().length) {
                    $(this).next("div").text("A senha pode ter  até " + tamonhomax + " caracteres.");
                    $(this).addClass("border-danger");
                }

            });
        });
    });
</script>