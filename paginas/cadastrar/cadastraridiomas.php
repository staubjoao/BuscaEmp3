<?php
@session_start();
$con = conecta();

$_SESSION['idiomasCont'] = 1;
?>
<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <form id="formPretencao" action="?pagina=gravaridiomas" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputIdioma">Idioma</label>
                        <label for="" class="text-danger">*</label>
                        <select name="idioma1" class="custom-select obrigatorio" id="idioma1">
                            <option selected value="">Escolha</option>
                            <?php
              $resIdiomas = mysqli_query ($con, 'SELECT * FROM idiomas');
              while ($rowIdiomas = mysqli_fetch_assoc($resIdiomas)):
              ?>
                            <option value="<?php echo $rowIdiomas['ididiomas'] ?>">
                                <?php echo utf8_encode($rowIdiomas['idioma']); ?>
                            </option>
                            <?php endwhile ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputIdioma">Nível</label>
                        <label for="" class="text-danger">*</label>
                        <select name="nivel1" class="custom-select obrigatorio" id="nivel1">
                            <option value="">Escolha</option>
                            <option value="Basico">Básico</option>
                            <option value="Intermediario">Intermediário</option>
                            <option value="Avancado">Avançado</option>
                            <option value="Nativo">Nativo</option>
                        </select>
                    </div>
                </div>
                <div id="novosIdiomas"></div>
                <div class="form-row">
                    <div class="form-group col-sm">
                        <button type="button" id="addIdioma" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar
                            outro
                            idioma</button>
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
        $('body').on('click', '.btn-excluir-idioma', function () {
            var idiomaRow = "#" + $(this).attr("idioma");
            $(idiomaRow).remove();
        });

        $("#addIdioma").click(function () {
            // $("#idiomas").append('<h2>asdasd</h2>');
            $.ajax({
                dataType: 'html',
                url: 'http://localhost/BuscaEmp3/paginas/add/idiomas.php',
                success: function (idiomas) {
                    $("#novosIdiomas").append(idiomas);
                }
            });
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
                validar(evento, $(this));
            });
        });
    });
</script>