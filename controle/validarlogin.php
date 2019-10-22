<?php
session_start();

$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$ac = trim($_POST['ac']);

$con = conecta();

if(isset($_POST['btnlogin'])){
    if($email != "" && $senha != ""){
        if(($email == "user") && ($senha == "user")){
            $_SESSION['id'] = $senha;
            $_SESSION['nome'] = $email;
            header("Location: ?pagina=adm");
        }else{
            if(isset($_POST['ac'])){
                if($ac == "empresa"){
                    //validar empresa
                    $selempresa = "SELECT idempresa, email, senha, nome, ac FROM empresa WHERE email='$email' LIMIT 1";
                    $resempresa = mysqli_query($con, $selempresa);
                    if($resempresa){
                        $rowempresa = mysqli_fetch_assoc($resempresa);
                        if(($rowempresa['senha']) == $senha){
                            $_SESSION['idempresa'] = $rowempresa['idempresa'];
                            $_SESSION['nome'] = $rowempresa['nome'];
                            $_SESSION['ac'] = $rowempresa['ac'];
                            header("Location: ?pagina=controleempresa");
                        }else{
                            $_SESSION['msg'] = "Usuário ou senha incorreto";
                            header("Location: ?pagina=login");
                        }
                    }
                    

                }else{
                    //validar curriculo
                    $selcurriculo = "SELECT idcurriculo, email, senha, nome, ac FROM curriculo WHERE email='$email' LIMIT 1";
                    $rescurriculo = mysqli_query($con, $selcurriculo);
                    if($rescurriculo){
                        $rowcurriculo = mysqli_fetch_assoc($rescurriculo);
                        if(($rowcurriculo['senha']) == $senha){
                            $_SESSION['idcurriculo'] = $rowcurriculo['idcurriculo'];
                            $_SESSION['nome'] = $rowcurriculo['nome'];
                            $_SESSION['ac'] = $rowcurriculo['ac'];
                            header("Location: ?pagina=controlecurriculo");
                        }else{
                            $_SESSION['msg'] = "Usuário ou senha incorreto";
                            header("Location: ?pagina=login");
                        }
                    }else{
                        header("Location: ?pagina=login");
                    }  
                }
            }else{
                $_SESSION['msg'] = "Selecione um tipo de login";
                header("Location: ?pagina=login");
            }
        }
    }else{
        $_SESSION['msg'] = "Usuário ou senha incorreto";
        header("Location: ?pagina=login");
    }
}else{
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: ?pagina=login");
}

?>