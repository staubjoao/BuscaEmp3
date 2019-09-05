<?php
//https://www.youtube.com/watch?v=ZRs2L6MO70c
//https://www.youtube.com/watch?v=6FdguCuauEI

  
    $host = "localhost"; //local do banco

    $database = "crud"; //nome do banco

    $username = "root"; //usuario do bando

    $password = ""; //senha do banco

        function conn(){
            try {
                $Con = new mysqli("localhost","root","","crud");
                return $Con; 
            } catch (Exception $Erro) {
                return $Erro->getMessage();
            }
        }

?>




<!-- nada a ver -->
<!-- . -->
<!-- . -->
<!-- <?php
    $sql = "INSERT INTO estado(sigla,nome) Values('PR', 'Paraná')";
   // $sql1 = "INSERT INTO tb_prod Values('$sigla', '$nome', '$preco')";
                       //isso se estiver no formulario pegar tipo c.$sigla    
    $resultado = mysqli_query($conn, $sql);
    
    if($resultado){
        echo "Estado cadastrado com sucesso";
    }

?>  -->