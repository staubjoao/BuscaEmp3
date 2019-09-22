<?php
@session_start();
$con = conecta();

$_SESSION['formacaoCont'] = 0;
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
            <form id="formPretencao" action="?pagina=gravarformacao" method="post">
                <div id="novasFormacoes"></div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <button type="button" id="addformacao" class="btn btn-dark btn-lg btn-block btn-sm">Adicionar
                            formação acadêmica</button>
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

        $("#addformacao").click(function () {
            $.ajax({
                dataType: 'html',
                url: 'http://localhost/BuscaEmp3/paginas/add/formacaoAcademica.php',
                success: function (formacao) {
                    $("#novasFormacoes").append(formacao);
                }
            });
        });
        $('body').on('click', '.btn-excluir-formcao', function () {
            var formacaoRow = "#" + $(this).attr("formacao");
            $(formacaoRow).remove();
        });
    });
</script>