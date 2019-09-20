<?php
$con = conecta();
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
            <form id="formCurriculoDados" action="?pagina=" method="post">
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="inputEmail" class="control-label">Email</label>
                        <label for="" class="text-danger">*</label>
                        <input name="email" type="email" class="form-control obrigatorio" id="inputEmail"
                            placeholder="Email" data-error="Por favor, informe um e-mail válido.">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <label for="" class="text-danger">*</label>
                        <input type="password" class="form-control obrigatorio" name="senha" id="inputPassword"
                            placeholder="Senha" data-minlength="6" data-maxlength="12">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Confirmar senha</label>
                        <label for="" class="text-danger">*</label>
                        <input name="confirmarSenha" type="password" class="form-control obrigatorio"
                            id="confirmarSenha" data-match="#inputPassword" placeholder="Confirmar senha">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="inputText">Nome</label>
                        <label for="" class="text-danger">*</label>
                        <input name="nome" data-error="Digite o seu nome" type="text" class="form-control obrigatorio"
                            id="nome" placeholder="Nome">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputText">CPF</label>
                        <label for="" class="text-danger">*</label>
                        <input name="cpf" data-error="Digite o seu CPF" data-error="Digite o seu CPF" type="text"
                            class="form-control obrigatorio" id="cpf" placeholder="CPF">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputZip">CEP</label>
                        <label for="" class="text-danger">*</label>
                        <input name="cep" type="text" data-error="Digite o seu CEP" class="form-control obrigatorio"
                            id="cep" placeholder="CEP">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputState">Estado</label>
                        <label for="" class="text-danger">*</label>
                        <select name="id_estado" data-error="Selecione um estado" id="id_estado"
                            class="form-control obrigatorio">
                            <option value="">Escolha</option>
                            <?php
                              $resEstado = mysqli_query ($con, 'SELECT * FROM estado');
                              while ($rowEstado = mysqli_fetch_assoc($resEstado)):
                                ?>
                            <option value="<?php echo $rowEstado['idestado'] ?>">
                                <?php echo utf8_encode($rowEstado['estado']); ?>
                            </option>
                            <?php endwhile ?>
                        </select>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md">
                        <label for="inputCity" id="cidade">Cidade</label>
                        <label for="" class="text-danger">*</label>
                        <span class="carregando text-danger">carregando...</span>
                        <select name="id_cidade" data-error="Selecione uma cidade" id="id_cidade"
                            class="form-control obrigatorio">
                            <option value="">Escolha um estado primeiro</option>
                        </select>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Rua</label>
                        <label for="" class="text-danger">*</label>
                        <input name="rua" data-error="Digite seu endereço" type="text" class="form-control obrigatorio"
                            id="rua" placeholder="Rua">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputAddress">Número</label>
                        <label for="" class="text-danger">*</label>
                        <input name="numero" data-error="Digite o número" type="number"
                            class="form-control obrigatorio" id="numero" placeholder="Número">
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Complemento</label>
                        <input name="complemento" type="text" class="form-control" id="complemento"
                            placeholder="Complemento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Gênero</label>
                        <label for="" class="text-danger">*</label>
                        <select name="genero" data-error="Selecione um gênero" id="genero"
                            class="form-control obrigatorio">
                            <option selected value="">Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outro</option>
                        </select>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAddress">Estado civil</label>
                        <label for="" class="text-danger">*</label>
                        <select name="estadocivil" data-error="Selecione um estado civil" id="estadocivil"
                            class="form-control obrigatorio">
                            <option selected value="">Selecione</option>
                            <option value="C">Casado</option>
                            <option value="D">Divorciado</option>
                            <option value="S">Separado</option>
                            <option value="X">Solteiro</option>
                            <option value="V">Viúvo</option>
                        </select>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Deficiência</label>
                        <label for="" class="text-danger">*</label>
                        <select name="deficiencia" data-error="Selecione" id="deficiencia"
                            class="form-control obrigatorio">
                            <option selected value="1">Não tenho deficiência</option>
                            <option value="2">Deficiência visual</option>
                            <option value="3">Deficiência intelectual</option>
                            <option value="4">Deficiência auditiva</option>
                            <option value="5">Deficiência física</option>
                            <option value="6">Deficiência mental/psicossocial</option>
                            <option value="7">Deficiência múltipla</option>
                            <option value="8">Deficiência Transtorno do Espectro Autista(TEA)</option>
                            <option value="9">Reabilitado pelo INSS</option>
                        </select>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button type="submit" id="proximo" class="btn btn-primary btn-lg btn-block">Próximo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00) 0000-0000");
        $("#cep").mask("00.000-000");

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

        $('body').on('click', '#proximo', function(evento){
        $(".obrigatorio").each(function(){
          // Se o valor do campo for vazio...
          validar(evento, $(this));

            var tamanhomin = $(this).attr('data-minlength');
            var tamonhomax = $(this).attr('data-maxlength');

            if(parseInt(tamanhomin) > $(this).val().trim().length){
              $(this).next("div").text("A senha precisa ter, pelo menos, "+ tamanhomin + " caracteres.");
              $(this).addClass("border-danger");
            }else if(parseInt(tamonhomax) < $(this).val().trim().length){
              $(this).next("div").text("A senha pode ter  até "+ tamonhomax + " caracteres.");
              $(this).addClass("border-danger");
            }

          });
        });


        $(function () {
            $('#id_estado').change(function () {
                if ($(this).val()) {
                    $('.carregando').show();
                    $('#cidadecom').show();
                    $.getJSON('http://localhost/BuscaEmp3/paginas/fks/cidade_post.php', { id_estado: $(this).val(), ajax: 'true' }, function (j) {
                        var options = '<option value="">Escolha</option>';
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].idcidade + '">' + j[i].cidade + '</option>';
                        }
                        $('#id_cidade').html(options).show();
                        $('.carregando').hide();
                    });
                } else {
                    $('#id_cidade').html('<option value="">Escolha</option>');
                }
            });
        });
    });
</script>