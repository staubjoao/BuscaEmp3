<?php
$con = conecta();
// print_r($_GET);
$idcurriculo = trim($_GET['idcurriculo']);

$selectCurriculo = "SELECT * FROM curriculo WHERE idcurriculo='$idcurriculo'";
$resCurriculo = mysqli_query($con, $selectCurriculo);
$curriculos = mysqli_fetch_assoc($resCurriculo);
if($resCurriculo){
?>
<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <div class="row">
                <div class="col-sm-9">
                    <h1><?php echo $curriculos["nome"]; ?></h1>
                </div>
                <div class="col-sm-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
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