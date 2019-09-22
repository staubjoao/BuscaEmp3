<?php
@session_start();
$con = conecta();

$idcurriculo = $_SESSION['idcurriculo'];
$contFormacao = $_SESSION['formacaoCont'];

echo $contFormacao."<br>";
echo $idcurriculo."<br>";

function insertformacao($idcurriculo, $instituicao, $pais, $estadoFormacao, $cidadeFormacao, $id_curso, $ead, $inicio, $termino){
    $con = conecta();
    $insertformacaocurriculo = "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
    inicio, termino, ead, pais_idpais, cidade, estado_idestado)
    VALUES ('$id_curso', '$idcurriculo', '$instituicao', '$inicio', '$termino', '$ead', 
    '$pais', '$cidadeFormacao', '$estadoFormacao')";
    $res = mysqli_query($con, $insertformacaocurriculo);
    if($res){
        header("Location: ?pagina=cadastrarexperienciaprofissional");
    }else{
        return"deu ruim!"."<br>";
    }
}

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

    if($estadoFormacao == "" || $termino == ""){
        if($estadoFormacao == ""){
            $insertformacaocurriculo = "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
            inicio, termino, ead, pais_idpais, cidade)
            VALUES ('$id_curso', '$idcurriculo', '$instituicao', '$inicio', '$termino', '$ead', 
            '$pais', '$cidadeFormacao')";
            $res = mysqli_query($con, $insertformacaocurriculo);
            if($res){
                header("Location: ?pagina=cadastrarexperienciaprofissional");
            }else{
                echo"deu ruim! sem estado"."<br>";
            }
        }elseif($termino == ""){
            $insertformacaocurriculo = "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
            inicio, ead, pais_idpais, cidade, estado_idestado)
            VALUES ('$id_curso', '$idcurriculo', '$instituicao', '$inicio', '$ead', 
            '$pais', '$cidadeFormacao', '$estadoFormacao')";
            $res = mysqli_query($con, $insertformacaocurriculo);
            if($res){
                header("Location: ?pagina=cadastrarexperienciaprofissional");
            }else{
                echo"deu ruim! sem termino"."<br>";
            }
        }elseif($termino == "" && $estadoFormacao == ""){
            $insertformacaocurriculo = "INSERT INTO curso_curriculo (curso_idcurso, curriculo_idcurriculo, nomeInstituicao,
            inicio, ead, pais_idpais, cidade)
            VALUES ('$id_curso', '$idcurriculo', '$instituicao', '$inicio', '$ead', 
            '$pais', '$cidadeFormacao')";
            $res = mysqli_query($con, $insertformacaocurriculo);
            if($res){
                header("Location: ?pagina=cadastrarexperienciaprofissional");
            }else{
                echo"deu ruim! sem osdois"."<br>";
            }
        }
    }else{
        echo insertformacao($idcurriculo, $instituicao, $pais, $estadoFormacao, $cidadeFormacao, $id_curso, $ead, $inicio, $termino);
    }


    $i++;
}

?>