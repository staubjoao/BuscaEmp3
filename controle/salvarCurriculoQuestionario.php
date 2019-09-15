<?php
session_start();

$con = conecta();

$ac = "C";
$senha = $_SESSION['senha'];
$email = $_SESSION['email'];
$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf'];
$cep = $_SESSION['cep'];
$id_cidade = $_SESSION['id_cidade'];
$cargoAlmejado = $_SESSION['cargoAlmejado'];
$rua = $_SESSION['rua'];
$complemento = $_SESSION['complemento'];
$numero = $_SESSION['numero'];
$telefone = $_SESSION['telefone'];
$deficiencia = $_SESSION['deficiencia'];
$genero = $_SESSION['genero'];
$estadocivil = $_SESSION['estadocivil'];
$empregado = $_SESSION['empregado'];
$jornada = $_SESSION['jornada'];
$tipoContrato = $_SESSION['tipoContrato'];
$nivelHierarquicoMin = $_SESSION['nivelHierarquicoMin'];
$nivelHierarquicoMax = $_SESSION['nivelHierarquicoMax'];
$pretensao = $_SESSION['pretensao'];

// $perguntas = 13;

// $i = 1;

// while(){

// }

$grupo1 =  trim($_POST['grupo1']);
$grupo2 =  trim($_POST['grupo2']);
$grupo3 =  trim($_POST['grupo3']);
$grupo4 =  trim($_POST['grupo4']);
$grupo5 =  trim($_POST['grupo5']);
$grupo6 =  trim($_POST['grupo6']);
$grupo7 =  trim($_POST['grupo7']);
$grupo8 =  trim($_POST['grupo8']);
$grupo9 =  trim($_POST['grupo9']);
$grupo10 = trim($_POST['grupo10']);
$grupo11 = trim($_POST['grupo11']);
$grupo12 = trim($_POST['grupo12']);
$grupo13 = trim($_POST['grupo13']);

// echo$grupo1."<br>";
// echo$grupo2."<br>";
// echo$grupo3."<br>";
// echo$grupo4."<br>";
// echo$grupo5."<br>";
// echo$grupo6."<br>";
// echo$grupo7."<br>";
// echo$grupo8."<br>";
// echo$grupo9."<br>";
// echo$grupo10."<br>";
// echo$grupo11."<br>";
// echo$grupo12."<br>";
// echo$grupo13."<br>";

$insertCurriculo = "INSERT INTO curriculo (ac, email, senha, nome, cpf, cep, rua, numero, complemento, telefone,
jornada, tipoContrato, nivelHierarquicoMin, nivelHierarquicoMax, empregado, pretencao, pretencao, genero, estadocivil,
deficiencia, cidade_idcidade)
VALUES ('$ac', '$email', '$senha', '$nome', '$cpf', '$cep', '$rua', '$numero', '$complemento', '$telefone', 
'$jornada', '$tipoContrato', '$cargoAlmejado', '$nivelHierarquicoMin', '$nivelHierarquicoMax', '$empregado', '$pretensao', '$genero', '$estadocivil', 
'$deficiencia', '$id_cidade')";
$resCurriculo = mysqli_query($con, $insert);



?>
