<?php
    requere_once('banco.php');

    $con = conn();

    
    $nome = trim($_POST['']);
    $email = trim($_POST['']);
    $cpf = trim($_POST['']);
    $senha = trim($_POST['']);
    $cidade = trim($_POST['']);
    $cep = trim($_POST['']);
    $endereco = trim($_POST['']);
    $Nendereco = trim($_POST['']);
    $telefone = trim($_POST['']);

    $sql = "UPDATE (tabela) SET nome = '$nome', email = '$email', senha = '$senha' WHERE id_admin = $id";
     $result = mysqli_query($con, $sql);
    if($result){
        echo "Cadastrado com sucesso";
    } 
    else{
        echo "Algum erro ocorreu";
    }

?>