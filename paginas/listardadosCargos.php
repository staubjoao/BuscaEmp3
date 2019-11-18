<br>
<br>
<br>
<?php
require_once('../lib/funcs.php');
$con = conecta();
print_r($_GET);
$idcurriculo = trim($_GET['idcurriculo']);

echo $idcurriculo;

$selectCurriculo = "SELECT * FROM curriculo WHERE idcurriculo='$idcurriculo'";
$resCurriculo = mysqli_query($con, $selectCurriculo);
if($resCurriculo){
    echo "foi";
}else{
    echo"nfoi";
}
?>