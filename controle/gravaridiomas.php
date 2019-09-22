<?php
@session_start();
$con = conecta();

$idcurriculo = $_SESSION['idcurriculo'];
$contIdiomas = $_SESSION['idiomasCont'];

$i = 1;

while($i <= $contIdiomas){
    $idioma = trim($_POST['idioma'.$i]);
    $nivel = trim($_POST['nivel'.$i]);
    if($idioma == "" && $nivel == ""){
        
    }else{
        //validação
        if($nivel == "Basico" || $nivel == "Intermediario" || $nivel == "Avancado" || $nivel == "Nativo"){
            //validação nivel
            $insertidiomascurriculo = "INSERT INTO idiomas_curriculo (idiomas_ididiomas, curriculo_idcurriculo, nivel)
            VALUES ('$idioma', '$idcurriculo', '$nivel')";
            $res = mysqli_query($con, $insertidiomascurriculo);
            if($res){
                header("Location: ?pagina=cadastrarformacao");
            }else{
                echo"não salvou";
            }
        }else{

        }
    }
    $i++;
}

?>