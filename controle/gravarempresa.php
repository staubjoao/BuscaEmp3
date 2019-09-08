<?php
//print_r($_POST);

$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$nome = trim($_POST['empNome']);
$endereco = trim($_POST['endereco']);
$numero = trim($_POST['numero']);
$cnpj = trim($_POST['cnpj']);
$cep = trim($_POST['cep']);
$ramo = trim($_POST['ramo']);
$idcidade = trim($_POST['id_cidade']);
$ac = "E";

$con = conecta();
$insert = "INSERT INTO empresa (ac, email, senha, nome, endereco, numero, cnpj, cep, ramoAtividade, cidade_idcidade) 
VALUES ('$ac', '$email', '$senha', '$nome', '$endereco', '$numero', '$cnpj', '$cep', '$ramo', '$idcidade')";
$res = mysqli_query($con, $insert);

if ($res){
  echo "<script>alert('Empresa cadastrada')</script>";
} else {
  echo "<script>alert('Erro')</script>";
}
?>