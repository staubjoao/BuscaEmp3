<?php
@session_start();
$con = conecta();

$idcurriculo = $_SESSION['idcurriculo'];
$contExperiencia = $_SESSION['experienciaCont'];

$i = 1;

if($contExperiencia == 0){
    header("Location: ?pagina=questionario");
}
 
while($i <= $contExperiencia){
    $empresa = trim($_POST["empresa".$i]);
    $cargoExperiencia = trim($_POST["cargoExperiencia".$i]);
    $trabalho = trim($_POST["trabalho".$i]);
    $inicioExperiencia = trim($_POST["inicioExperiencia".$i]);
    $terminoExperiencia = trim($_POST["terminoExperiencia".$i]);
    $nivelHierarquicoExp = trim($_POST["nivelHierarquicoExp".$i]);
    $salario = trim($_POST["salario".$i]);
    $id_pais_experiencia = trim($_POST["id_pais_experiencia".$i]);
    $id_estado_experiencia = trim($_POST["id_estado_experiencia".$i]);
    $cidadeExperiencia = trim($_POST["cidadeExperiencia".$i]);

    echo $trabalho;

    if($trabalho == "N"){
        if($id_pais_experiencia == "26"){
            $insertexperiencia = "INSERT INTO expprofissional (empresa, inicio, cargos_idcargos, salario, 
            curriculo_idcurriculo, pais_idpais, cidade, estado_idestado)
            VALUES ('$empresa', '$inicioExperiencia', '$cargoExperiencia', '$salario', '$idcurriculo','$id_pais_experiencia',
            '$cidadeExperiencia', '$id_estado_experiencia')";
            $res = mysqli_query($con, $insertexperiencia);
            if($res){
                header("Location: ?pagina=questionario");
            }else{
                echo"não salvou";
            }
        }else{
            $insertexperiencia = "INSERT INTO expprofissional (empresa, inicio, cargos_idcargos, salario, 
            curriculo_idcurriculo, pais_idpais, cidade)
            VALUES ('$empresa', '$inicioExperiencia', '$cargoExperiencia', '$salario', '$idcurriculo','$id_pais_experiencia',
            '$cidadeExperiencia')";
            $res = mysqli_query($con, $insertexperiencia);
            if($res){
                header("Location: ?pagina=questionario");
            }else{
                echo"não salvou";
            }
        }
       
    }elseif($trabalho == "S"){
        if($id_pais_experiencia == "26"){
        $insertexperiencia = "INSERT INTO expprofissional (empresa, inicio, termino, cargos_idcargos, salario, 
        curriculo_idcurriculo, pais_idpais, cidade, estado_idestado)
        VALUES ('$empresa', '$inicioExperiencia', '$terminoExperiencia', '$cargoExperiencia', '$salario', '$idcurriculo','$id_pais_experiencia',
        '$cidadeExperiencia', '$id_estado_experiencia')";
        $res = mysqli_query($con, $insertexperiencia);
        if($res){
            header("Location: ?pagina=questionario");
        }else{
            echo"não salvou";
        }
    }else{
        $insertexperiencia = "INSERT INTO expprofissional (empresa, inicio, termino, cargos_idcargos, salario, 
        curriculo_idcurriculo, pais_idpais, cidade)
        VALUES ('$empresa', '$inicioExperiencia', '$terminoExperiencia', '$cargoExperiencia', '$salario', '$idcurriculo','$id_pais_experiencia',
        '$cidadeExperiencia')";
        $res = mysqli_query($con, $insertexperiencia);
        if($res){
            header("Location: ?pagina=questionario");
        }else{
            echo"não salvou";
        }
        }
    }
    $i++;
}
?>