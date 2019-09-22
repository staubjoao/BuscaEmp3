<?php
@session_start();
$con = conecta();

$_SESSION['experienciaCont'] = 0;
?>

<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <form id="formPretencao" action="?pagina=gravarexperienciaprofissional" method="post">
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