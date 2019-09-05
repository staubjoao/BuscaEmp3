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
$idestado = trim($_POST['id_estado']);
$idcidade = trim($_POST['id_cidade']);
$ac = "empresa";

$con = conecta();
$insert = "insert into empresa (email, senha, nome, endereco, numero, cnpj, cep, ramoAtividade, idestado, idcidade, ac) 
values ('$email', '$senha', '$nome', '$endereco', '$numero', '$cnpj', '$cep', '$ramo', '$idestado', '$idcidade', '$ac')";
$res = mysqli_query($con, $insert);

if ($res){
  echo "<script>alert('Empresa cadastrada')</script>";
  header("Location: ?pagina=home");
} else {
  echo "<script>alert('Erro')</script>";
}
?>