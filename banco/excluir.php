<?php
    requere_once('banco.php');

    $con = conn();
    $id = filter_input(INPUT_GET, 'id');
    $sql = "DELETE FROM (tabela) WHERE id_(tabela) = $id";
    
    $result = mysqli_query($con, $sql);
    
    if($result){    
        echo "Deletado com Sucesso <br>";
        
    }
    else{
        echo "Um Erro Ocorreu";
    }

?>