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
    $pretensaoSalarial = trim($_POST['pretensao']);
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
    $selectCargo = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
    $resCargo = mysqli_query($con, $selectCargo);

    if($resCargo){
        $qtdCargo = mysqli_num_rows($resCargo);
        if($qtdCargo > 0){
            while($rowCargo = mysqli_fetch_assoc($resCargo)){
            $d = $rowCargo["pretecao_idpretecao"];
            $selectHierarqui = "SELECT * FROM pretecao WHERE idpretecao='$d'";
            $resHierarqui = mysqli_query($con, $selectHierarqui);
            // echo $d."<br>";
            if($resHierarqui){
                while($rowpretensao = mysqli_fetch_assoc($resHierarqui)){
                    $jornadaBD = $rowpretensao["jornada"];
                    $tipoContratoBD = $rowpretensao["tipoContrato"];
                    $nivelHierarquicoMinBD = $rowpretensao["nivelHierarquicoMin"];
                    $nivelHierarquicoMaxBD = $rowpretensao["nivelHierarquicoMax"];
                    $pretensaoSalarialBD = $rowpretensao["pretensaosalarial"];

                    $idcurriclo = $rowpretensao["curriculo_idcurriculo"];

                    $pretensaoSalarial = intval($pretensaoSalarial);
                    $pretensaoSalarialBD = intval($pretensaoSalarialBD);
                    $nivelHierarquico = intval($nivelHierarquico);
                    $nivelHierarquicoMinBD = intval($nivelHierarquicoMinBD);
                    $nivelHierarquicoMaxBD = intval($nivelHierarquicoMaxBD);

                    echo $idcurriclo."<br>";

                    if($jornadaBD == "AL" OR $jornada == "AL"){
                        if(($pretensaoSalarial == $pretensaoSalarialBD) AND (($nivelHierarquico <= $nivelHierarquicoMaxBD) OR ($nivelHierarquico >= $nivelHierarquicoMinBD))){
                            $selectCurriculo = "SELECT * FROM curriculo WHERE idcurriculo='$idcurriclo'";
                            $resCurriculo = mysqli_query($con, $selectCurriculo);
                            if($resCurriculo){
                            ?> 
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                    $j = 1;
                                    while($rowCurriculo = mysqli_fetch_assoc($resCurriculo)):
                                    ?>
                                    <th scope="row"><?php echo $j;?></th>
                                    <?php $j++; ?>
                                    <td><?php echo $rowCurriculo["nome"]; ?></td>
                                    <td><?php echo $rowCurriculo["email"]; ?></td>
                                    <td><?php echo $rowCurriculo["telefone"]; ?></td>
                                    </tr>
                                    <?php 
                                    endwhile ?>
                                    <tr>
                                </tbody>
                            </table>
                            <?php
                            }else{
                                echo "Erro ao buscar curriculo";
                            }
                        }else{
                            // echo "<h4>Não foi encontrado nenhum curriculo</h4>";
                        }
                    }else{
                        if($jornadaBD == $jornada){                       
                            $selectCurriculo = "SELECT * FROM curriculo WHERE idcurriculo='$idcurriclo'";
                            $resCurriculo = mysqli_query($con, $selectCurriculo);
                            if($resCurriculo){
                            ?> 
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                    $j = 1;
                                    while($rowCurriculo = mysqli_fetch_assoc($resCurriculo)):
                                    ?>
                                    <th scope="row"><?php echo $j;?></th>
                                    <?php $j++; ?>
                                    <td><?php echo $rowCurriculo["nome"]; ?></td>
                                    <td><?php echo $rowCurriculo["email"]; ?></td>
                                    <td><?php echo $rowCurriculo["telefone"]; ?></td>
                                    </tr>
                                    <?php 
                                    endwhile ?>
                                    <tr>
                                </tbody>
                            </table>
                            <?php
                            }else{
                                echo "Erro ao buscar curriculo";
                            }
                       }else{

                       }
                    }
                    if($tipoContratoBD == "AL"){

                    }else{

                    }
                }
            }else{
                echo"<h4>Deu ruim linha 82</h4>";
            }
        }
        }else{
            echo "<h4>Não foi encontrado nenhum curriculo com esse cargo</h4>";
        }
    }else{
        echo "Não fez a busca pelo cargo";
    }
    
    
    
    
    
    // if($jornada == "AL" && $tipoContrato == "AL"){
    //     $selectCargo = "SELECT * FROM cargos_curriculo WHERE cargos_idcargos='$cargoAlmejado'";
    //     $resCargo = mysqli_query($con, $selectCargo);
    //     if($resCargo){
    //         // echo "vai bucar";
    //         $qtdCargo = mysqli_num_rows($resCargo);
    //     if($qtdCargo > 0){
    //         $i = 1;
    //         while($rowCargo = mysqli_fetch_assoc($resCargo)){
    //             $d = $rowCargo["pretecao_idpretecao"];
    //             $selectHierarqui = "SELECT * FROM pretecao WHERE idpretecao='$d'";
    //             $resHierarqui = mysqli_query($con, $selectHierarqui);
    //             // echo $d."<br>";
    //             if($resHierarqui){
    //                 $qtdHierarquico = mysqli_num_rows($resHierarqui);
    //                 echo $qtdHierarquico."<br>";
    //             }else{
    //                 echo"<h4>Deu ruim linha 67</h4>";
    //             }
    //             $i++;
    //         }
            

    //         if($resHierarqui){
    //             $hierarqui = mysqli_fetch_assoc($resHierarqui);
    //             $nivelHierarquicoMin = $hierarqui['nivelHierarquicoMin'];
    //             $nivelHierarquicoMax = $hierarqui['nivelHierarquicoMax'];
    //             if($nivelHierarquico <= $nivelHierarquicoMax && $nivelHierarquico >= $nivelHierarquicoMin){
    //                 //troca de pretensao para pretensao
    //                 $selectpretensao = "SELECT * FROM pretecao";
    //                 $respretensao = mysqli_query($con, $selectpretensao);
                    
    //                 if($respretensao){
    //                     $pretensao = mysqli_fetch_assoc($respretensao);
    //                     $pretensaoSalarial = $pretensao['pretensaosalarial'];

    //                     if($pretensao <= $pretensao){

    //                     }else{

    //                     }
    //                 }else{

    //                 }
    //             }else{
    //                 // echo "<h4>Não foi encontrado nenhum curriculo com esse nivel hierarquico</h4>";
    //             }
    //         }else{
    //             echo "asdasdasddasdaqsddddddddddddddddddddddddddddd";
    //         }
    //     }else{
    //         echo "<h4>Não foi encontrado nenhum curriculo com esse cargo</h4>";
    //     }
    // }else{
    //     echo "Não fez a busca";
    // }
    // }else{
    //     if($jornada == "AL"){
    //     echo "ta aqui";
    // }else{
    //     echo "tasdasd aqui";
    // }
    
    // }

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