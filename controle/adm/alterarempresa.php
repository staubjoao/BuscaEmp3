<?php

$email = trim($_POST['email']);
$nome = trim($_POST['empNome']);
$endereco = trim($_POST['endereco']);
$numero = trim($_POST['numero']);
$cnpj = trim($_POST['cnpj']);
$cep = trim($_POST['cep']);
$ramo = trim($_POST['ramo']);
$idempresa = trim($_POST['idempresa']);
// $idestado = trim($_POST['estado']);

//$idcidade = trim($_POST['id_cidade']);

$con = conecta();
$update = "update empresa set email='$email', nome='$nome', endereco='$endereco', numero='$numero', cnpj='$cnpj', cep='$cep', ramoAtividade='$ramo' where idempresa=$idempresa";
$res = mysqli_query($con, $update);

if ($res){
  echo "<script>alert('Empresa alterada')</script>";
} else {
  echo "<script>alert('Erro')</script>";
  
}
?>