<?php
@session_start();
$con = conecta();

$email = trim($_POST['email']);
$telefone = trim($_POST['telefone']);
if((strlen(trim($_POST['senha']))) > 6 && (strlen(trim($_POST['senha']))) < 12){
    if((trim($_POST['confirmarSenha'])) == trim($_POST['senha'])){
        $senha = trim($_POST['senha']);
    }else{
        // $_SESSION['senhaincorreta'] = "Senha não são iguais";
        header("Location: ?pagina=cadastrardados");
    }
}else{
    // $_SESSION['senhaforadetamanho'] = "A senha deve ter mais que 6 e menos que 12 caracteres";
    header("Location: ?pagina=cadastrardados");
}

if((trim($_POST['deficiencia']))==1 || (trim($_POST['deficiencia']))==2 || (trim($_POST['deficiencia']))==3 || 
(trim($_POST['deficiencia']))==4 || (trim($_POST['deficiencia']))==5 || (trim($_POST['deficiencia']))==6 || 
(trim($_POST['deficiencia']))==7 || (trim($_POST['deficiencia']))==8 || (trim($_POST['deficiencia']))==9){
    $deficiencia = trim($_POST['deficiencia']);
}else{
  header("Location: ?pagina=cadastrardados");
}

if((trim($_POST['genero']))=="M" || (trim($_POST['genero']))=="F" || (trim($_POST['genero']))=="I"){
    $genero = trim($_POST['genero']);
}else{
  header("Location: ?pagina=cadastrardados");
}

if((trim($_POST['estadocivil']))=="C" || (trim($_POST['estadocivil']))=="D" || (trim($_POST['estadocivil']))=="S" || 
(trim($_POST['estadocivil']))=="X" || (trim($_POST['estadocivil']))=="V"){
    $estadocivil = trim($_POST['estadocivil']);
}else{
  header("Location: ?pagina=cadastrardados");
}

$nome = trim($_POST['nome']);
$cpf = trim($_POST['cpf']);
$cep = trim($_POST['cep']);
$cidade = trim($_POST['id_cidade']);
$rua = trim($_POST['rua']);
$numero = trim($_POST['numero']);
$complemento = trim($_POST['complemento']);
$ac = "C";

$insertdadoscurriculo = "INSERT INTO curriculo (ac, email, senha, nome, cpf, cep, rua, numero, complemento, 
telefone, genero, estadocivil, deficiencia, cidade_idcidade) 
VALUES ('$ac', '$email', '$senha', '$nome', '$cpf', '$cep', '$rua', '$numero', '$complemento', '$telefone', 
'$genero', '$estadocivil', '$deficiencia', '$cidade')";
$res = mysqli_query($con, $insertdadoscurriculo);

if($res){
  $selectidcurriculo = "SELECT * FROM curriculo WHERE cpf='$cpf'";
  $residcurriculo = mysqli_query($con, $selectidcurriculo);
  while($rowidcurriculo = mysqli_fetch_assoc($residcurriculo)){
    $_SESSION['idcurriculo'] = $rowidcurriculo['idcurriculo'];
  }
  header("Location: ?pagina=cadastrarpretencao");
}else{
  echo "<script>alert('Erro')</script>";
}

?>