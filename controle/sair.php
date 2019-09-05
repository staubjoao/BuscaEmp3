<?php
session_start();

unset($_SESSION['id'], $_SESSION['nome']);

$_SESSION['msg'] = "Deslogado com sucesso!";
header("Location: ?pagina=login");

?>