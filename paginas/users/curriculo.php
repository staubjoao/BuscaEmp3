<?php
session_start();

if(!empty($_SESSION['id'])){
    echo"<h1>Olá, ".$_SESSION['nome']." bem vindo(a)</h1>";
}else{
    $_SESSION['msg'] = "Faça login";
    header("Location: ?pagina=login");
}
?>

<div class='container-fluid'>
    <a href="?pagina=sair">sair</a>
</div>