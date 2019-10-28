<?php
for($i = 1; $i <= 1031; $i++){
    $curso = rand(1, 685);
    $ead = array("S", "N");
    $eadlen = rand(0, 1);
    $estado = rand(1, 27);
    
    // $letra = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    // $palavralen = rand(6, 13);

    // $palavra = 
    // $nivel = array("Basico", "Intermediario", "Avancado", "Nativo");
    // $nivellen = rand(0, 3);
    
    echo "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
    inicio, termino, ead, pais_idpais, cidade, estado_idestado) 
    VALUES ('".$i."', '".$curso."', 'AAAAA', '2008-7-04', '2008-7-04', '".$ead[$eadlen]."', '26', 'AAAA', "."'".$estado."');"."<br>";

    // for($j = 1; $j <= 13; $j++){

    // }

}
?>