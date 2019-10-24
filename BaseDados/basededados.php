<?php
for($i = 1; $i <= 1032; $i++){
    $numidi = rand(1, 5);
    
    for($j = 1; $j <= $numidi; $j++){
        $idioma = rand(1, 64);
        $nivel = array("Basico", "Intermediario", "Avancado", "Nativo");
        $nivellen = rand(0, 3);

        echo "INSERT INTO idiomas_curriculo (idiomas_ididiomas, curriculo_idcurriculo, nivel) VALUES ('".$idioma."', '".$i."', '".$nivel[$nivellen]."');"."<br>";
    }
}
?>