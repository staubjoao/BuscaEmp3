<?php
//print_r($_POST);
if(trim($_POST['email']) != ""){
  $email = trim($_POST['email']);
}
if(trim($_POST['senha']) != ""){
  if((trim($_POST['senha'])) == trim($_POST['confirmarSenha'])){
    $senha = trim($_POST['senha']);
  }
}
if(trim($_POST['empNome']) != ""){
  $nome = trim($_POST['empNome']);
}
if(trim($_POST['endereco']) != ""){
  $endereco = trim($_POST['endereco']);
}
if(trim($_POST['numero']) != ""){
  $numero = trim($_POST['numero']);
}

$cnpj = trim($_POST['cnpj']);

if(trim($_POST['cep']) != ""){
  $cep = trim($_POST['cep']);
}
if(trim($_POST['ramo']) != ""){
  $ramo = trim($_POST['ramo']);
}
if(trim($_POST['id_cidade']) != ""){
  $idcidade = trim($_POST['id_cidade']);
}

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