<?php
@session_start();
$con = conecta();

$idcurriculo = $_SESSION['idcurriculo'];
$contFormacao = $_SESSION['formacaoCont'];

$i = 1;
while($i <= $contFormacao){
    $instituicao = trim($_POST['instituicao'.$i]);
    $pais = trim($_POST['pais'.$i]);
    $estadoFormacao = trim($_POST['estadoFormacao'.$i]);
    $cidadeFormacao = trim($_POST['cidadeFormacao'.$i]);
    $nivelFormacao = trim($_POST['nivelFormacao'.$i]);
    $id_curso = trim($_POST['id_curso'.$i]);
    $ead = trim($_POST['ead'.$i]);
    $inicio = trim($_POST['inicio'.$i]);
    $termino = trim($_POST['termino'.$i]);
    
    if($instituicao == "" && $pais == "" && $cidade == "" && $nivelFormacao == "" && $id_curso == "" && $ead == "" && $inicio == ""){
        echo"oxi";
    }else{
        if($estadoFormacao == ""){

        }else{
            $insertformacaocurriculo = "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
            inicio, termino, ead, pais_idpais, cidade, estado_idestado)
            VALUES ('$id_curso', '$idcurriculo', '$instituicao', '$inicio', '$termino', '$ead', 
            '$pais', '$cidadeFormacao', '$estadoFormacao')";
            $res = mysqli_query($con, $insertformacaocurriculo);
            if($res){
                echo"deu bom!";
            }else{
                echo"deu ruim!";
            }
        }
        if($termino == ""){
            $insertformacaocurriculo = "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
            inicio, termino, ead, pais_idpais, cidade, estado_idestado)
            VALUES ('$id_curso', '$idcurriculo', '$instituicao', '$inicio', '$termino', '$ead', 
            '$pais', '$cidadeFormacao', '$estadoFormacao')";
            $res = mysqli_query($con, $insertformacaocurriculo);
            if($res){
                echo"deu bom!";
            }else{
                echo"deu ruim!";
            }
        }
    }
    $i++;
}

?>