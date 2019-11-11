<?php
require_once('../lib/funcs.php');
$con = conecta();

$jornadaBoo = FALSE;
$tipoContratoBoo = FALSE;
$pretensaoBoo = FALSE;
$nivelHierarquicoBoo = FALSE;
$cargoAlmejadoBoo = FALSE;

if((trim($_POST['jornada'])) == "NO" || (trim($_POST['jornada'])) == "MA" || (trim($_POST['jornada'])) == "NI" || (trim($_POST['jornada'])) == "TR" || (trim($_POST['jornada'])) == "IN" || (trim($_POST['jornada'])) == "AL"){
    $jornada = trim($_POST['jornada']);
    $jornadaBoo = TRUE;
}else{
    echo "Jornada invalida"."<br>";
}

if((trim($_POST['tipoContrato'])) == "AU" || (trim($_POST['tipoContrato'])) == "CO" || (trim($_POST['tipoContrato'])) == "EF" || (trim($_POST['tipoContrato'])) == "ES" || (trim($_POST['tipoContrato'])) == "PS" || (trim($_POST['tipoContrato'])) == "TM" || (trim($_POST['tipoContrato'])) == "TR" || (trim($_POST['tipoContrato'])) == "AL" || (trim($_POST['tipoContrato'])) == "OU"){
    $tipoContrato = trim($_POST['tipoContrato']);
    $tipoContratoBoo = TRUE;
}else{
    echo "Tipo de contrato invalida"."<br>";
}

if((trim($_POST['pretensao'])) == "1" || (trim($_POST['pretensao'])) == "2" || (trim($_POST['pretensao'])) == "3" || (trim($_POST['pretensao'])) == "4" || (trim($_POST['pretensao'])) == "5" || (trim($_POST['pretensao'])) == "6" || (trim($_POST['pretensao'])) == "7" || (trim($_POST['pretensao'])) == "8" || (trim($_POST['pretensao'])) == "9" || (trim($_POST['pretensao'])) == "10" || (trim($_POST['pretensao'])) == "11" || (trim($_POST['pretensao'])) == "12" || (trim($_POST['pretensao'])) == "13"){
    $pretensao = trim($_POST['pretensao']);
    $pretensaoBoo = TRUE;
}else{
    echo "Tipo de pretenção invalida"."<br>";
}

if((trim($_POST['nivelHierarquico'])) == "1" || (trim($_POST['nivelHierarquico'])) == "2" || (trim($_POST['nivelHierarquico'])) == "3" || (trim($_POST['nivelHierarquico'])) == "4" || (trim($_POST['nivelHierarquico'])) == "5" || (trim($_POST['nivelHierarquico'])) == "6" || (trim($_POST['nivelHierarquico'])) == "7" || (trim($_POST['nivelHierarquico'])) == "8" || (trim($_POST['nivelHierarquico'])) == "9" || (trim($_POST['nivelHierarquico'])) == "10" || (trim($_POST['pretensao'])) == "11" || (trim($_POST['nivelHierarquico'])) == "12" || (trim($_POST['nivelHierarquico'])) == "13"){
    $nivelHierarquico = trim($_POST['nivelHierarquico']);
    $nivelHierarquicoBoo = TRUE;
}else{
    echo "Tipo de nivel hierarquico invalida"."<br>";
}

if((trim($_POST['cargoAlmejado'])) == ""){
    echo "Cargo invalida"."<br>";
}else{
    $cargoAlmejado = trim($_POST['cargoAlmejado']);
    $cargoAlmejadoBoo = TRUE;
}

// $competencia1 = trim($_POST['competencia1']);

// echo $competencia1;

if($jornadaBoo == TRUE && $tipoContratoBoo == TRUE &&  $pretensaoBoo == TRUE && $nivelHierarquicoBoo == TRUE && $cargoAlmejadoBoo == TRUE){
    if($jornada == "AL" && $tipoContrato == "AL"){
        $selectCargo = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
        $resCargo = mysqli_query($con, $selectCargo);
        if($resCargo){
            // echo "vai bucar";
            $qtdCargo = mysqli_num_rows($resCargo);
        if($qtdCargo > 0){
            $i = 1;
            while($rowCargo = mysqli_fetch_assoc($resCargo)){
                $a = "pretencaoBD";
                $c = $a.$i;
                $d = $rowCargo["pretecao_idpretecao"];
                $selectHierarqui = "SELECT * FROM pretecao WHERE pretecao_idpretecao='$d'";
                $resHierarqui = mysqli_query($con, $selectHierarqui);
                echo $d."<br>";
                if($resHierarqui){
                    echo"deubom kk"."<br>";
                }else{
                    echo"vishh moio"."<br>";
                }
                $i++;
            }
            

            if($resHierarqui){
                $hierarqui = mysqli_fetch_assoc($resHierarqui);
                $nivelHierarquicoMin = $hierarqui['nivelHierarquicoMin'];
                $nivelHierarquicoMax = $hierarqui['nivelHierarquicoMax'];
                if($nivelHierarquico <= $nivelHierarquicoMax && $nivelHierarquico >= $nivelHierarquicoMin){
                    //troca de pretencao para pretensao
                    $selectPretencao = "SELECT * FROM pretecao";
                    $resPretencao = mysqli_query($con, $selectPretencao);
                    
                    if($resPretencao){
                        $pretencao = mysqli_fetch_assoc($resPretencao);
                        $pretencaoSalarial = $pretencao['pretencaosalarial'];

                        if($pretensao <= $pretencao){

                        }else{

                        }
                    }else{

                    }
                }else{
                    // echo "<h4>Não foi encontrado nenhum curriculo com esse nivel hierarquico</h4>";
                }
            }else{
                echo "asdasdasddasdaqsddddddddddddddddddddddddddddd";
            }
        }else{
            echo "<h4>Não foi encontrado nenhum curriculo com esse cargo</h4>";
        }
    }else{
        echo "Não fez a busca";
    }
    }else{
        if($jornada == "AL"){
        // echo "ta aqui";
    }
    if($tipoContrato == "Al"){
        echo "ta aqui";
    }
    
    }

    // $selectJornada = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
    // $resJornada = mysqli_query($con, $selectCargo);

    // $selectContrato = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
    // $resJornada = mysqli_query($con, $selectCargo);

    // $selectSalario = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
    // $resJornada = mysqli_query($con, $selectCargo);

}else{
    echo"Nenhum definido"."<br>";
}
?>