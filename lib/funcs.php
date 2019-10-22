<?php
require_once('configs.php');
function navega($pagina){
  switch ($pagina) {
    case 'cadastrardados':
      require 'paginas/cadastrar/cadastrardadoscurriculo.php';
    break;
    case 'gravardados':
      require 'controle/gravardadoscurriculo.php';
    break;
    case 'cadastrarpretencao':
      require 'paginas/cadastrar/cadastrarpretencao.php';
    break;
    case 'gravarpretencao':
      require 'controle/gravarpretencao.php';
    break;
    case 'cadastraridiomas':
      require 'paginas/cadastrar/cadastraridiomas.php';
    break;
    case 'gravaridiomas':
      require 'controle/gravaridiomas.php';
    break;
    case 'cadastrarformacao':
      require 'paginas/cadastrar/cadastrarformacao.php';
    break; 
    case 'gravarformacao':
      require 'controle/gravarformacao.php';
    break;
    case 'cadastrarexperienciaprofissional':
      require 'paginas/cadastrar/cadastrarexperienciaprofissional.php';
    break;
    case 'gravarexperienciaprofissional':
      require 'controle/gravarexperienciaprofissional.php';
    break;
    case 'questionario':
    require 'paginas/cadastrar/questionario.php';
    break;
    case 'gravarquestionario':
    require 'controle/gravarquestionario.php';
    break;



    case 'cadastrocurriculo':
      require 'paginas/cadastrar/cadastroCur.php';
    break;
    case 'cadastroempresa':
      require 'paginas/cadastrar/cadastroempresa.php';
    break;
    case 'salvaremp':
      require 'controle/gravarempresa.php';
    break;
    case 'salvarcurriculo':
      require 'controle/gravarcurriculo.php';
    break;
    case 'login':
      require 'paginas/login.php';
    break;
    case 'validarlogin':
      require 'controle/validarlogin.php';
    break;
    case 'controleempresa':
      require 'paginas/users/empresa.php';
    break;
    case 'buscarcurriculo':
      require 'paginas/buscarcurriculo.php';
    break;
    case 'controlecurriculo':
      require 'paginas/users/curriculo.php';
    break;
    case 'sair':
    require 'controle/sair.php';
    break;
    case 'alterarempresa':
      require 'controle/adm/alterarempresa.php';
    break;
    case 'empresaalterar':
      require 'paginas/alterar/empresaalterar.php';
    break;
    case 'excluirempresa':
      require 'controle/adm/excluirempresa.php';
    break;
    case 'fkcidade':
      require 'paginas/fks/cidade_post.php';
    break;

    case 'idiomas';
      require 'paginas/add/idiomas.php';
    break;

    case 'teste':
      require 'teste/testeQuestionario.php';
    break;
    case 'testeSalvar':
      require 'teste/testeSalvar.php';
    break;

    //adm
    case 'adm':
      require 'paginas/users/admin.php';
    break;
    case 'admtest':
      require 'controle/adm/teste.php';
    break;
    default:
      require 'paginas/home.php';
    break;
  }
}

function conecta() {
  return mysqli_connect(HOST, USER, PASS, BANCO);
}

?>
