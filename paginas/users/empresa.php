<?php
@session_start();

if(!empty($_SESSION['idempresa'])){
    echo"<h1>Olá, ".$_SESSION['nome']." bem vinda</h1>";
}else{
    $_SESSION['msg'] = "Faça login";
    header("Location: ?pagina=login");
}
?>

<div class='container-fluid'>
    <a href="?pagina=buscarcurriculoCargo">Buscar pelo cargo</a>
    <br>
    <a href="?pagina=buscarcurriculo">Buscar</a>
    <br>
    <a href="?pagina=sair">Sair</a>
</div>
