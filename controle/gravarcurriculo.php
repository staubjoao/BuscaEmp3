<?php
session_start();

$idcurriculo = $_SESSION['idCurriculo'];

$grupo1 = trim($_POST['grupo1']);
$grupo2 = trim($_POST['grupo2']);
$grupo3 = trim($_POST['grupo3']);
$grupo4 = trim($_POST['grupo4']);
$grupo5 = trim($_POST['grupo5']);
$grupo6 = trim($_POST['grupo6']);
$grupo7 = trim($_POST['grupo7']);
$grupo8 = trim($_POST['grupo8']);
$grupo9 = trim($_POST['grupo9']);
$grupo10 = trim($_POST['grupo10']);
$grupo11  = trim($_POST['grupo11']);

$insertResposta1 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo1', '$idcurriculo', 1)";

$insertResposta2 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo2', '$idcurriculo', 2)";

$insertResposta3 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo3', '$idcurriculo', 3)";

$insertResposta4 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo4', '$idcurriculo', 4)";

$insertResposta5 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo5', '$idcurriculo', 5)";

$insertResposta6 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo6', '$idcurriculo', 6)";

$insertResposta7 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo7', '$idcurriculo', 7)";

$insertResposta8 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo8', '$idcurriculo', 8)";

$insertResposta9 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo9', '$idcurriculo', 9)";

$insertResposta10 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo10', '$idcurriculo', 10)";

$insertResposta11 = "insert into perguntas_curriculo (resposta, idcurriculo, idperguntas) 
values ('$grupo11', '$idcurriculo', 11)";

$con = conecta();

$res1 = mysqli_query($con, $insertResposta1);
$res2 = mysqli_query($con, $insertResposta2);
$res3 = mysqli_query($con, $insertResposta3);
$res4 = mysqli_query($con, $insertResposta4);
$res5 = mysqli_query($con, $insertResposta5);
$res6 = mysqli_query($con, $insertResposta6);
$res7 = mysqli_query($con, $insertResposta7);
$res8 = mysqli_query($con, $insertResposta8);
$res9 = mysqli_query($con, $insertResposta9);
$res10 = mysqli_query($con, $insertResposta10);
$res11 = mysqli_query($con, $insertResposta11);

if($res1){
  if($res2){
    if($res3){
      if($res4){
        if($res5){
          if($res6){
            if($res7){
              if($res8){
                if($res9){
                  if($res10){
                    if($res11){
                      echo"deu tudo certo";
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  }
}else{
  echo"deu erro";
}

?>