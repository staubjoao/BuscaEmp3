<?php

$idempresa = trim($_GET['idempresa']);

$con = conecta();
$deleta = "delete from empresa where idempresa=$idempresa";
$res = mysqli_query($con, $deleta);

if ($res){
    echo "<script>alert('Empresa excluida')</script>";
}else {
    echo "<script>alert('Erro')</script>";
    header("Location: ?pagina=adm");
}
?>