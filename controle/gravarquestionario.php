<?php
@session_start();
$con = conecta();

$idcurriculo = $_SESSION['idcurriculo'];

$i = 1;

while($i <= 13){
    $resposta = trim($_POST["grupo".$i]);
    // echo $i." ".$resposta."<br>";

    $insertrespostas = "INSERT INTO perguntas_curriculo (curriculo_idcurriculo, perguntas_idperguntas, 
    resposta)
    VALUES ('$idcurriculo', '$i', '$resposta')";
    $res = mysqli_query($con, $insertrespostas);
    if($res){
        $_SESSION['cadastrado'] == 1;
        header("Location: ?pagina=");
    }else{
        echo "não salvou"." ".$i."<br>";
    }
    
    $i++;
}
?>