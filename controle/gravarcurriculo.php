<?php
session_start();

echo"<br>"."<br>"."<br>";

print_r($_POST);

if((strlen(trim($_POST['senha']))) > 1 && (strlen(trim($_POST['senha']))) < 12){
  if((trim($_POST['senha'])) == (trim($_POST['senha']))){
    $senha = trim($_POST['senha']);
  }else{
    header("Location: ?pagina=");
  }
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['email'])) == ""){
  header("Location: ?pagina=");
}else{
  $email = trim($_POST['email']);
}

if((trim($_POST['nome'])) == ""){
  header("Location: ?pagina=");
}else{
  $nome = trim($_POST['nome']);
}

if((trim($_POST['cpf'])) == ""){
  header("Location: ?pagina=");
}else{
  $cpf = trim($_POST['cpf']);
}

if((trim($_POST['cep'])) == ""){
  header("Location: ?pagina=");
}else{
  $cep = trim($_POST['cep']);
}

if((trim($_POST['id_cidade'])) == ""){
  header("Location: ?pagina=");
}else{
  $id_cidade = trim($_POST['id_cidade']);
}

if((trim($_POST['cargoAlmejado'])) == ""){
  header("Location: ?pagina=");
}else{
  $cargoAlmejado = trim($_POST['cargoAlmejado']);
}

if((trim($_POST['rua'])) == ""){
  header("Location: ?pagina=");
}else{
  $rua = trim($_POST['rua']);
}

$complemento = trim($_POST['complemento']);

if((trim($_POST['numero'])) == ""){
  header("Location: ?pagina=");
}else{
  $numero = trim($_POST['numero']);
}

if((trim($_POST['telefone'])) == ""){
  header("Location: ?pagina=");
}else{
  $telefone = trim($_POST['telefone']);
}

if((trim($_POST['deficiencia']))==1 || (trim($_POST['deficiencia']))==2 || (trim($_POST['deficiencia']))==3 || 
(trim($_POST['deficiencia']))==4 || (trim($_POST['deficiencia']))==5 || (trim($_POST['deficiencia']))==6 || 
(trim($_POST['deficiencia']))==7 || (trim($_POST['deficiencia']))==8 || (trim($_POST['deficiencia']))==9){
  $deficiencia = trim($_POST['deficiencia']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['genero']))=="M" || (trim($_POST['genero']))=="F" || (trim($_POST['genero']))=="I"){
  $genero = trim($_POST['genero']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['estadocivil']))=="C" || (trim($_POST['estadocivil']))=="D" || (trim($_POST['estadocivil']))=="S" || 
(trim($_POST['estadocivil']))=="X" || (trim($_POST['estadocivil']))=="V"){
  $estadocivil = trim($_POST['estadocivil']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['empregado']))==1 || (trim($_POST['empregado']))==2){
  $empregado = trim($_POST['empregado']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['jornada']))=="NO" || (trim($_POST['jornada']))=="MA" || (trim($_POST['jornada']))=="NI" || 
(trim($_POST['jornada']))=="TR" || (trim($_POST['jornada']))=="IN"){
  $jornada = trim($_POST['jornada']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['tipoContrato']))=="AU" || (trim($_POST['tipoContrato']))=="CO" || (trim($_POST['tipoContrato']))=="EF" || 
(trim($_POST['tipoContrato']))=="ES" || (trim($_POST['tipoContrato']))=="OU" || (trim($_POST['tipoContrato']))=="PS" || 
(trim($_POST['tipoContrato']))=="TM" || (trim($_POST['tipoContrato']))=="TR"){
  $tipoContrato = trim($_POST['tipoContrato']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['nivelHierarquicoMin']))=="ES" || (trim($_POST['nivelHierarquicoMin']))=="OP" || (trim($_POST['nivelHierarquicoMin']))=="AU" || 
(trim($_POST['nivelHierarquicoMin']))=="AS" || (trim($_POST['nivelHierarquicoMin']))=="TR" || (trim($_POST['nivelHierarquicoMin']))=="AN" || 
(trim($_POST['nivelHierarquicoMin']))=="EN" || (trim($_POST['nivelHierarquicoMin']))=="SU" || (trim($_POST['nivelHierarquicoMin']))=="CO" || 
(trim($_POST['nivelHierarquicoMin']))=="EP" || (trim($_POST['nivelHierarquicoMin']))=="CR" || (trim($_POST['nivelHierarquicoMin']))=="GE" || 
(trim($_POST['nivelHierarquicoMin']))=="DI"){
  $nivelHierarquicoMin = trim($_POST['nivelHierarquicoMin']);
}else{
  header("Location: ?pagina=");
}

if(
(trim($_POST['nivelHierarquicoMax']))=="ES" || (trim($_POST['nivelHierarquicoMax']))=="OP" || (trim($_POST['nivelHierarquicoMax']))=="AU" || 
(trim($_POST['nivelHierarquicoMax']))=="AS" || (trim($_POST['nivelHierarquicoMax']))=="TR" || (trim($_POST['nivelHierarquicoMax']))=="AN" || 
(trim($_POST['nivelHierarquicoMax']))=="EN" || (trim($_POST['nivelHierarquicoMax']))=="SU" || (trim($_POST['nivelHierarquicoMax']))=="CO" || 
(trim($_POST['nivelHierarquicoMax']))=="EP" || (trim($_POST['nivelHierarquicoMax']))=="CR" || (trim($_POST['nivelHierarquicoMax']))=="GE" || 
(trim($_POST['nivelHierarquicoMax']))=="DI"){
  $nivelHierarquicoMax = trim($_POST['nivelHierarquicoMax']);
}else{
  header("Location: ?pagina=");
}

if((trim($_POST['pretensao']))==1 || (trim($_POST['pretensao']))==2 || (trim($_POST['pretensao']))==3 || (trim($_POST['pretensao']))==4 || 
(trim($_POST['pretensao']))==5 || (trim($_POST['pretensao']))==6 || (trim($_POST['pretensao']))==7 || (trim($_POST['pretensao']))==8 || 
(trim($_POST['pretensao']))==9 || (trim($_POST['pretensao']))==10 || (trim($_POST['pretensao']))==11 || (trim($_POST['pretensao']))==12 || 
(trim($_POST['pretensao']))==13){
  $pretensao = trim($_POST['pretensao']);
}else{
  header("Location: ?pagina=");
}

//Dados do curriculo
$_SESSION['senha'] = $senha;
$_SESSION['email'] = $email;
$_SESSION['nome'] = $nome;
$_SESSION['cpf'] = $cpf;
$_SESSION['cep'] = $cep;
$_SESSION['id_cidade'] = $id_cidade;
$_SESSION['cargoAlmejado'] = $cargoAlmejado;
$_SESSION['rua'] = $rua;
$_SESSION['complemento'] = $complemento;
$_SESSION['numero'] = $numero;
$_SESSION['telefone'] = $telefone;
$_SESSION['deficiencia'] = $deficiencia;
$_SESSION['genero'] = $genero;
$_SESSION['estadocivil'] = $estadocivil;
$_SESSION['empregado'] = $empregado;
$_SESSION['jornada'] = $jornada;
$_SESSION['tipoContrato'] = $email;
$_SESSION['nivelHierarquicoMin'] = $nivelHierarquicoMin;
$_SESSION['nivelHierarquicoMax'] = $nivelHierarquicoMax;
$_SESSION['pretensao'] = $pretensao;

if((trim($_POST['idioma2'])) == "" && (trim($_POST['nivel2'])) == ""){
  header("Location: ?pagina=");
}else{
  $idioma2 = trim($_POST['idioma2']);
  $nivel2 = trim($_POST['nivel2']);
}

//Idiomas
$_SESSION['idioma1'] = $idioma1;
$_SESSION['nivel1'] = $nivel1;
$_SESSION['idioma2'] = $idioma2;
$_SESSION['nivel2'] = $nivel2;

if((trim($_POST['instituicao'])) == ""){
  header("Location: ?pagina=");
}else{
  $instituicao = trim($_POST['instituicao']);
}
if((trim($_POST['id_pais'])) == ""){
  header("Location: ?pagina=");
}else{
  $id_pais = trim($_POST['id_pais']);
}
if((trim($_POST['cidadeAcademica'])) == ""){
  header("Location: ?pagina=");
}else{
  $cidadeAcademica = trim($_POST['cidadeAcademica']);
}
if((trim($_POST['id_nivel'])) == ""){
  header("Location: ?pagina=");
}else{
  $id_nivel = trim($_POST['id_nivel']);
}
if((trim($_POST['id_curso'])) == ""){
  header("Location: ?pagina=");
}else{
  $id_curso = trim($_POST['id_curso']);
}
if((trim($_POST['inicio'])) == ""){
  header("Location: ?pagina=");
}else{
  $inicio = trim($_POST['inicio']);
}
if((trim($_POST['termino'])) == ""){
  header("Location: ?pagina=");
}else{
  $termino = trim($_POST['termino']);
}
if((trim($_POST['inicio'])) == "S" || (trim($_POST['inicio'])) == "N"){
  $ead = trim($_POST['ead']);
}else{
  header("Location: ?pagina=");
}

//Curso
$_SESSION['instituicao'] = $instituicao;
$_SESSION['cidadeAcademica'] = $cidadeAcademica;
$_SESSION['id_pais'] = $id_pais;
$_SESSION['id_nivel'] = $id_nivel;
$_SESSION['id_curso'] = $id_curso;
$_SESSION['inicio'] = $inicio;
$_SESSION['termino'] = $termino;
$_SESSION['ead'] = $ead;







header("Location: ?pagina=questionario");

// $_SESSION['idCurriculo'] = $idcurriculo;

// if ($res){
//   $idiomas = trim($_POST['qtdeIdiomas']);
//   $i = 1;

//   while($i <= $idiomas){
//     $idioma = 'idioma'.$i;
//     $nivel = 'nivel'.$i;

//     if(((trim($_POST[$idioma])) == null) || ((trim($_POST[$nivel])) == null)){
//       echo"null <br>";
//     }else{
//       $idiomasalvar = trim($_POST[$idioma]);
//       $nivelsalvar = trim($_POST[$nivel]);
//       $insertIdiomas = "insert into idiomas_curriculo (idcurriculo, ididiomas, nivel)
//       values ('$idcurriculo','$idiomasalvar', '$nivelsalvar')";
//       $residiomas = mysqli_query($con, $insertIdiomas);
      
//       echo "<script>alert('Show')</script>";
//     }
//     $i++;
//   }
  
// }else {
//   echo "<script>alert('Erro')</script>";
// }

// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['senhaCurriculo'] = $senha;
// $_SESSION['nomeCurriculo'] = $nome;
// $_SESSION['cpf'] = $cpf;
// $_SESSION['idestado'] = $idestado;
// $_SESSION['idcidade'] = $idcidade;
// $_SESSION['cep'] = $cep;
// $_SESSION['endereco'] = $endereco;
// $_SESSION['numero'] = $numero;
// $_SESSION['deficiencia'] = $deficiencia;
// $_SESSION['sexo'] = $sexo;
// $_SESSION['estadocivil'] = $estadocivil;
// $_SESSION['empregado'] = $empregado;
// $_SESSION['obj'] = $obj;
// $_SESSION['pretensao'] = $pretensao;
// $_SESSION['telefone'] = $telefone;
// $_SESSION['acCurriculo'] = $ac;

// $idcurriculo = $_SESSION['idCurriculo'];

// $grupo1 = trim($_POST['grupo1']);
// $grupo2 = trim($_POST['grupo2']);
// $grupo3 = trim($_POST['grupo3']);
// $grupo4 = trim($_POST['grupo4']);
// $grupo5 = trim($_POST['grupo5']);
// $grupo6 = trim($_POST['grupo6']);
// $grupo7 = trim($_POST['grupo7']);
// $grupo8 = trim($_POST['grupo8']);
// $grupo9 = trim($_POST['grupo9']);
// $grupo10 = trim($_POST['grupo10']);
// $grupo11  = trim($_POST['grupo11']);

// $insertResposta1 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo1', '$idcurriculo', 1)";

// $insertResposta2 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo2', '$idcurriculo', 2)";

// $insertResposta3 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo3', '$idcurriculo', 3)";

// $insertResposta4 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo4', '$idcurriculo', 4)";

// $insertResposta5 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo5', '$idcurriculo', 5)";

// $insertResposta6 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo6', '$idcurriculo', 6)";

// $insertResposta7 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo7', '$idcurriculo', 7)";

// $insertResposta8 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo8', '$idcurriculo', 8)";

// $insertResposta9 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo9', '$idcurriculo', 9)";

// $insertResposta10 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo10', '$idcurriculo', 10)";

// $insertResposta11 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
// values ('$grupo11', '$idcurriculo', 11)";

// $con = conecta();

// $res1 = mysqli_query($con, $insertResposta1);
// $res2 = mysqli_query($con, $insertResposta2);
// $res3 = mysqli_query($con, $insertResposta3);
// $res4 = mysqli_query($con, $insertResposta4);
// $res5 = mysqli_query($con, $insertResposta5);
// $res6 = mysqli_query($con, $insertResposta6);
// $res7 = mysqli_query($con, $insertResposta7);
// $res8 = mysqli_query($con, $insertResposta8);
// $res9 = mysqli_query($con, $insertResposta9);
// $res10 = mysqli_query($con, $insertResposta10);
// $res11 = mysqli_query($con, $insertResposta11);

// if($res1){
//   if($res2){
//     if($res3){
//       if($res4){
//         if($res5){
//           if($res6){
//             if($res7){
//               if($res8){
//                 if($res9){
//                   if($res10){
//                     if($res11){
//                       echo"deu tudo certo";
//                     }
//                   }
//                 }
//               }
//             }
//           }
//         }
//       }
//     }
//   }
// }else{
//   echo"deu erro";
// }

// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['senhaCurriculo'] = $senha;
// $_SESSION['nomeCurriculo'] = $nome;
// $_SESSION['cpf'] = $cpf;
// $_SESSION['idestado'] = $idestado;
// $_SESSION['idcidade'] = $idcidade;
// $_SESSION['cep'] = $cep;
// $_SESSION['endereco'] = $endereco;
// $_SESSION['numero'] = $numero;
// $_SESSION['deficiencia'] = $deficiencia;
// $_SESSION['sexo'] = $sexo;
// $_SESSION['estadocivil'] = $estadocivil;
// $_SESSION['empregado'] = $empregado;
// $_SESSION['obj'] = $obj;
// $_SESSION['pretensao'] = $pretensao;
// $_SESSION['telefone'] = $telefone;
// $_SESSION['acCurriculo'] = $ac;

// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $_SESSION['emailCurriculo'] = $email; 
// $email = trim($_POST['email']);
// $senha = trim($_POST['senha']);
// $nome = trim($_POST['nome']);
// $cpf = trim($_POST['cpf']);
// $idcidade = trim($_POST['id_cidade']);
// $cep = trim($_POST['cep']);
// $endereco = trim($_POST['endereco']);
// $numero = trim($_POST['numero']);
// $obj = trim($_POST['obj']);
// $telefone = trim($_POST['telefone']);
// $nivelHierarquicoMax = trim($_POST['nivelHierarquicoMax']);
// $ac = "C";


?>