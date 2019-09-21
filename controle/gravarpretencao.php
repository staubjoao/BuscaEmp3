<?php
@session_start();
$con = conecta();

$idcurriculo = $_SESSION['idcurriculo'];

$contCargos = $_SESSION['cargosCont'];

if((trim($_POST['jornada']))=="NO" || (trim($_POST['jornada']))=="MA" || (trim($_POST['jornada']))=="NI" || 
(trim($_POST['jornada']))=="TR" || (trim($_POST['jornada']))=="IN"){
  $jornada = trim($_POST['jornada']);
}else{
  header("Location: ?pagina=cadastrarpretencao");
}

if((trim($_POST['tipoContrato']))=="AU" || (trim($_POST['tipoContrato']))=="CO" || (trim($_POST['tipoContrato']))=="EF" || 
(trim($_POST['tipoContrato']))=="ES" || (trim($_POST['tipoContrato']))=="OU" || (trim($_POST['tipoContrato']))=="PS" || 
(trim($_POST['tipoContrato']))=="TM" || (trim($_POST['tipoContrato']))=="TR"){
  $tipoContrato = trim($_POST['tipoContrato']);
}else{
  header("Location: ?pagina=cadastrarpretencao");
}

if((trim($_POST['empregado']))=="S" || (trim($_POST['empregado']))=="N"){
    $empregado = trim($_POST['empregado']);
}else{
    header("Location: ?pagina=cadastrarpretencao");
}
if((trim($_POST['nivelHierarquicoMin']))=="1" || (trim($_POST['nivelHierarquicoMin']))=="2" || (trim($_POST['nivelHierarquicoMin']))=="3" || 
(trim($_POST['nivelHierarquicoMin']))=="4" || (trim($_POST['nivelHierarquicoMin']))=="5" || (trim($_POST['nivelHierarquicoMin']))=="6" || 
(trim($_POST['nivelHierarquicoMin']))=="7" || (trim($_POST['nivelHierarquicoMin']))=="8" || (trim($_POST['nivelHierarquicoMin']))=="9" || 
(trim($_POST['nivelHierarquicoMin']))=="10" || (trim($_POST['nivelHierarquicoMin']))=="11" || (trim($_POST['nivelHierarquicoMin']))=="12" || 
(trim($_POST['nivelHierarquicoMin']))=="13"){
  $nivelHierarquicoMin = trim($_POST['nivelHierarquicoMin']);
}else{
  header("Location: ?pagina=cadastrarpretencao");
}

if(
(trim($_POST['nivelHierarquicoMax']))=="1" || (trim($_POST['nivelHierarquicoMax']))=="2" || (trim($_POST['nivelHierarquicoMax']))=="3" || 
(trim($_POST['nivelHierarquicoMax']))=="4" || (trim($_POST['nivelHierarquicoMax']))=="5" || (trim($_POST['nivelHierarquicoMax']))=="6" || 
(trim($_POST['nivelHierarquicoMax']))=="7" || (trim($_POST['nivelHierarquicoMax']))=="8" || (trim($_POST['nivelHierarquicoMax']))=="9" || 
(trim($_POST['nivelHierarquicoMax']))=="10" || (trim($_POST['nivelHierarquicoMax']))=="11" || (trim($_POST['nivelHierarquicoMax']))=="12" || 
(trim($_POST['nivelHierarquicoMax']))=="13"){
  $nivelHierarquicoMax = trim($_POST['nivelHierarquicoMax']);
}else{
  header("Location: ?pagina=cadastrarpretencao");
}

if((trim($_POST['pretensao']))==1 || (trim($_POST['pretensao']))==2 || (trim($_POST['pretensao']))==3 || (trim($_POST['pretensao']))==4 || 
(trim($_POST['pretensao']))==5 || (trim($_POST['pretensao']))==6 || (trim($_POST['pretensao']))==7 || (trim($_POST['pretensao']))==8 || 
(trim($_POST['pretensao']))==9 || (trim($_POST['pretensao']))==10 || (trim($_POST['pretensao']))==11 || (trim($_POST['pretensao']))==12 || 
(trim($_POST['pretensao']))==13){
  $pretensao = trim($_POST['pretensao']);
}else{
  header("Location: ?pagina=cadastrarpretencao");
}

$visiel = "V";
$data = date('y/m/d');

$insertpretencao = "INSERT INTO pretecao (visivel, datapretencao, jornada, tipoContrato, nivelHierarquicoMin, 
nivelHierarquicoMax, empregado, pretencaosalarial, curriculo_idcurriculo) VALUES ('$visiel', '$data', '$jornada',
'$tipoContrato', '$nivelHierarquicoMin', '$nivelHierarquicoMax', '$empregado', '$pretensao', '$idcurriculo')";
$res = mysqli_query($con, $insertpretencao);

if($res){
    $selectidpretencao = "SELECT * FROM pretecao WHERE curriculo_idcurriculo='$idcurriculo'";
    $residpretencao  = mysqli_query($con, $selectidpretencao);
    while($rowidpretencao = mysqli_fetch_assoc($residpretencao)){
        $_SESSION['idpretecao'] = $rowidpretencao['idpretecao'];
      }
    $i = 1;
    if(isset($_SESSION['idpretecao'])){
        while($i <= $contCargos){
            if((trim($_POST['cargoAlmejado'.$i])) == ""){
            }else{
                $cargo = trim($_POST['cargoAlmejado'.$i]);
                $idpretencao = $_SESSION['idpretecao'];
                $insertcargopretencao = "INSERT INTO cargos_curriculo (cargos_idcargos, pretecao_idpretecao) VALUES 
                ('$cargo', '$idpretencao')";
                $rescargopretencao= mysqli_query($con, $insertcargopretencao);
                if($res){
                    header("Location: ?pagina=cadastraridiomas");
                }else{
                    echo "<script>alert('Erro')</script>";
                }
            }
            $i++;
        }
    }else{
        header("Location: ?pagina=cadastrarpretencao");
    }
    unset($_SESSION['idpretecao']);
    // header("Location: ?pagina=cadastrarpretencao");
}else{
    echo "<script>alert('Erro')</script>";
}

?>