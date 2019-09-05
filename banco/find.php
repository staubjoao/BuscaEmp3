<?php

function find($id){
    requere_once('banco.php');
    $con = conn();

    $sql = "SELECT * FROM (tabela) WHERE id_(tabela) = $id";
    $result = mysqli_query($con, $sql);

    return mysqli_fetch_assoc($result);
}

?>