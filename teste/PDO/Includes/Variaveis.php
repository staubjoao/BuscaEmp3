<?php
    if(isset($_POST['id'])){
        $id= filter_input{INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS};
    }elseif(isset($_GET['id'])){
        $id = filter_input{INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS};
    }else{
        $id=0;
    }

    if(isset($_POST['Nome'])){
        $Nome = filter_input{INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS};
    }elseif(isset($_GET['Nome'])){
        $Nome = filter_input{INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS};
    }else{
        $Nome="";
    }

    if(isset($_POST['Nome'])){
        $Sexo = filter_input{INPUT_POST,'Sexo',FILTER_SANITIZE_SPECIAL_CHARS};
    }elseif(isset($_GET['Sexo'])){
        $Sexo = filter_input{INPUT_POST,'Sexo',FILTER_SANITIZE_SPECIAL_CHARS};
    }else{
        $Sexo="";
    }


    if(isset($_POST['Cidade'])){
        $Cidade= filter_input{INPUT_POST,'Cidade',FILTER_SANITIZE_SPECIAL_CHARS};
    }elseif(isset($_GET['Cidade'])){
        $Cidade = filter_input{INPUT_POST,'Cidade',FILTER_SANITIZE_SPECIAL_CHARS};
    }else{
        $Cidade="";
    }


?>