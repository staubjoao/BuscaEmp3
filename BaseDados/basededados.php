<?php
for($i = 1; $i <= 1031; $i++){
    $curso = rand(1, 685);
    $visivel = array("S", "N");
    $visivellen = rand(0, 1);
    $jornada = array("NO", "AL", "MA", "NI", "TR", "IN");
    $jornadalen = rand(0, 5);
    $contratos = array("AU", "CO", "EF", "ES", "OU", "PS", "TM", "TR", "AL");
    $contratoslen = rand(0, 8);
    $pretencao = rand(1, 13);
    $estado = rand(1, 27);

    $nivelHeriMin = rand(1, 13);
    $nivelHeriMax = rand(1, 13);

    if($nivelHeriMin <= $nivelHeriMax){
        $nivelMin = $nivelHeriMin;
        $nivelMax = $nivelHeriMax;
    }else{
        $nivelMin = 6;
        $nivelMax = 9;
    }
    echo "INSERT INTO pretecao (visivel, datapretencao, jornada, tipoContrato, 
    nivelHierarquicoMin, nivelHierarquicoMax, empregado, pretencaosalarial, curriculo_idcurriculo) 
    VALUES ('".$visivel[$visivellen]."', '2000-02-02', '".$jornada[$jornadalen]."', '".$contratos[$contratoslen]."', ' 
    ".$nivelMin."', '".$nivelMax."', 'N', '".$pretencao."', '".$i."');"."<br>";

    // $letra = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    // $palavralen = rand(6, 13);

    // $palavra = 
    // $nivel = array("Basico", "Intermediario", "Avancado", "Nativo");
    // $nivellen = rand(0, 3);
    


    // for($j = 1; $j <= 13; $j++){

    // }

}
?>