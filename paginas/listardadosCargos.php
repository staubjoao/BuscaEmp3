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
                    <p class="fontN"><?php echo $curriculos["email"]; ?> | </p>
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