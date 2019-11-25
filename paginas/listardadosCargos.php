<style>
    .fontG{
        font-family: 'Roboto';font-size: 50px;
    }

    .fontN{
        font-family: 'Roboto';font-size: 16px;
    }

    .new4 {
        border: 1px solid blue;
    }
</style>

<?php
$con = conecta();
// print_r($_GET);
$idcurriculo = trim($_GET['idcurriculo']);

$selectCurriculo = "SELECT curriculo.nome, curriculo.email, curriculo.telefone, curriculo.cep, curriculo.rua, curriculo.numero, curriculo.genero, curriculo.estadocivil, curriculo.deficiencia, cidade.cidade, estado.estado, pais.pais
FROM `curriculo` 
INNER JOIN cidade ON curriculo.cidade_idcidade = cidade.idcidade 
INNER JOIN estado ON cidade.estado_idestado = estado.idestado INNER JOIN pais ON estado.pais_idpais = pais.idpais
INNER JOIN idiomas_curriculo ON curriculo.idcurriculo = idiomas_curriculo.curriculo_idcurriculo
INNER JOIN idiomas ON idiomas.ididiomas = idiomas_curriculo.idiomas_ididiomas
INNER JOIN expprofissional ON curriculo.idcurriculo = expprofissional.curriculo_idcurriculo
INNER JOIN curso_curriculo ON curriculo.idcurriculo = curso_curriculo.curriculo_idcurriculo
INNER JOIN curso ON curso_curriculo.curso_idcurso = curso.idcurso
INNER JOIN nivel ON curso.nivel_idnivel = nivel.idnivel
INNER JOIN pretensao ON pretensao.curriculo_idcurriculo = curriculo.idcurriculo
INNER JOIN cargos_curriculo ON cargos_curriculo.pretensao_idpretensao = pretensao.idpretensao
INNER JOIN cargos ON cargos_curriculo.cargos_idcargos = cargos.idcargos
INNER JOIN perguntas_curriculo ON perguntas_curriculo.curriculo_idcurriculo = curriculo.idcurriculo
INNER JOIN perguntas ON perguntas.idperguntas = perguntas_curriculo.perguntas_idperguntas 
WHERE idcurriculo = 5";
$resCurriculo = mysqli_query($con, $selectCurriculo);
$curriculos = mysqli_fetch_assoc($resCurriculo);
if($resCurriculo){
?>
<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <div class="row">
                <div class="col-sm">
                    <p class="fontG"><?php echo $curriculos["nome"]; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <hr class="new4">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="fontN"><?php echo utf8_encode($curriculos["rua"]); ?> |
                    <?php echo $curriculos["numero"]; ?> |
                    <?php echo utf8_encode($curriculos["email"]); ?> | 
                    <?php echo utf8_encode($curriculos["cidade"]); ?> | 
                    <?php echo utf8_encode($curriculos["estado"]); ?> | 
                    <?php echo utf8_encode($curriculos["pais"]); ?> </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php
}else{
    echo"nfoi";
}
?>