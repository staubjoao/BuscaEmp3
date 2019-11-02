<?php
for($i = 1; $i <= 1031; $i++){
    $cargos = rand(1, 3);

    for($j = 1; $j <= $cargos; $j++){
        $teste = rand(1, 2);
        if($teste == 1){
            $pais = rand(1, 194);
        }else{
            $pais = 26;
        }

        $curso = rand(1, 685);
        if($pais == 26){
            $esatado = rand(1, 27);
            echo "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao, 
            inicio, termino, ead, pais_idpais, cidade, estado_idestado) VALUES ('".$curso."', 
            '".$i."', 'AAAA', '2000-02-02', '2000-02-02', 'A', '".$pais."', 'AAAA', '".$esatado."');"."<br>";
        }else{
            echo "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao, 
            inicio, termino, ead, pais_idpais, cidade) VALUES ('".$curso."', 
            '".$i."', 'AAAA', '2000-02-02', '2000-02-02', 'A', '".$pais."', 'AAAA');"."<br>";
        }
    }
}
?>