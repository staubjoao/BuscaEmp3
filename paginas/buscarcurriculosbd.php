<?php
require_once('../lib/funcs.php');
$con = conecta();

$jornada = trim($_POST['jornada']);
$tipoContrato = trim($_POST['tipoContrato']);
$pretensao = trim($_POST['pretensao']);
$nivelHierarquico = trim($_POST['nivelHierarquico']);
$cargoAlmejado = trim($_POST['cargoAlmejado']);

// echo $jornada."<br>".$tipoContrato."<br>".$pretensao."<br>".$nivelHierarquico."<br>".$cargoAlmejado;

$selectCargo = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
$resCargo = mysqli_query($con, $selectCargo);
$qtdCargo = mysql_num_rows($resCargo);
// $qtdCargo = 0;
?>
<section class="panel col-lg-9">

<header class="panel-heading">
    Dados da busca:
</header>
<?php 
if($qtdCargo>0){
?>
<h1>Maior q zero</h1>
<?php 
}else{
?>
<h1>N tem nada kk</h1>
<?php 
}
?>
</section>