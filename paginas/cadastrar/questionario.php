<?php
session_start();
// print_r($_POST);

$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$nome = trim($_POST['nome']);
$cpf = trim($_POST['cpf']);
$idcidade = trim($_POST['id_cidade']);
$cep = trim($_POST['cep']);
$endereco = trim($_POST['endereco']);
$numero = trim($_POST['numero']);
$obj = trim($_POST['obj']);
$telefone = trim($_POST['telefone']);
$nivelHierarquicoMax = trim($_POST['nivelHierarquicoMax']);
$ac = "C";

if((trim($_POST['deficiencia']))==1 || (trim($_POST['deficiencia']))==2 || (trim($_POST['deficiencia']))==3 || 
(trim($_POST['deficiencia']))==4 || (trim($_POST['deficiencia']))==5 || (trim($_POST['deficiencia']))==6 || 
(trim($_POST['deficiencia']))==7 || (trim($_POST['deficiencia']))==8 || (trim($_POST['deficiencia']))==9){
  $deficiencia = trim($_POST['deficiencia']);
  echo$deficiencia."<br>";
}
if((trim($_POST['genero']))=="M" || (trim($_POST['genero']))=="F" || (trim($_POST['genero']))=="I"){
  $genero = trim($_POST['genero']);
  echo$genero."<br>";
}
if((trim($_POST['estadocivil']))=="C" || (trim($_POST['estadocivil']))=="D" || (trim($_POST['estadocivil']))=="S" || 
(trim($_POST['estadocivil']))=="X" || (trim($_POST['estadocivil']))=="V"){
  $estadocivil = trim($_POST['estadocivil']);
  echo$estadocivil."<br>";
}
if((trim($_POST['empregado']))==1 || (trim($_POST['empregado']))==2){
  $empregado = trim($_POST['empregado']);
  echo$empregado."<br>";
}
if((trim($_POST['jornada']))=="NO" || (trim($_POST['jornada']))=="MA" || (trim($_POST['jornada']))=="NI" || 
(trim($_POST['jornada']))=="TR" || (trim($_POST['jornada']))=="IN"){
  $jornada = trim($_POST['jornada']);
  echo$jornada."<br>";
}
if((trim($_POST['tipoContrato']))=="AU" || (trim($_POST['tipoContrato']))=="CO" || (trim($_POST['tipoContrato']))=="EF" || 
(trim($_POST['tipoContrato']))=="ES" || (trim($_POST['tipoContrato']))=="OU" || (trim($_POST['tipoContrato']))=="PS" || 
(trim($_POST['tipoContrato']))=="TM" || (trim($_POST['tipoContrato']))=="TR"){
  $tipoContrato = trim($_POST['tipoContrato']);
  echo$tipoContrato."<br>";
}
if((trim($_POST['nivelHierarquicoMin']))=="ES" || (trim($_POST['nivelHierarquicoMin']))=="OP" || (trim($_POST['nivelHierarquicoMin']))=="AU" || 
(trim($_POST['nivelHierarquicoMin']))=="AS" || (trim($_POST['nivelHierarquicoMin']))=="TR" || (trim($_POST['nivelHierarquicoMin']))=="AN" || 
(trim($_POST['nivelHierarquicoMin']))=="EN" || (trim($_POST['nivelHierarquicoMin']))=="SU" || (trim($_POST['nivelHierarquicoMin']))=="CO" || 
(trim($_POST['nivelHierarquicoMin']))=="EP" || (trim($_POST['nivelHierarquicoMin']))=="CR" || (trim($_POST['nivelHierarquicoMin']))=="GE" || 
(trim($_POST['nivelHierarquicoMin']))=="DI"){
  $nivelHierarquicoMin = trim($_POST['nivelHierarquicoMin']);
  echo$nivelHierarquicoMin."<br>";
}
if(
(trim($_POST['nivelHierarquicoMax']))=="ES" || (trim($_POST['nivelHierarquicoMax']))=="OP" || (trim($_POST['nivelHierarquicoMax']))=="AU" || 
(trim($_POST['nivelHierarquicoMax']))=="AS" || (trim($_POST['nivelHierarquicoMax']))=="TR" || (trim($_POST['nivelHierarquicoMax']))=="AN" || 
(trim($_POST['nivelHierarquicoMax']))=="EN" || (trim($_POST['nivelHierarquicoMax']))=="SU" || (trim($_POST['nivelHierarquicoMax']))=="CO" || 
(trim($_POST['nivelHierarquicoMax']))=="EP" || (trim($_POST['nivelHierarquicoMax']))=="CR" || (trim($_POST['nivelHierarquicoMax']))=="GE" || 
(trim($_POST['nivelHierarquicoMax']))=="DI"){
  $nivelHierarquicoMax = trim($_POST['nivelHierarquicoMax']);
  echo$nivelHierarquicoMax."<br>";
}
if((trim($_POST['pretensao']))==1 || (trim($_POST['pretensao']))==2 || (trim($_POST['pretensao']))==3 || (trim($_POST['pretensao']))==4 || 
(trim($_POST['pretensao']))==5 || (trim($_POST['pretensao']))==6 || (trim($_POST['pretensao']))==7 || (trim($_POST['pretensao']))==8 || 
(trim($_POST['pretensao']))==9 || (trim($_POST['pretensao']))==10 || (trim($_POST['pretensao']))==11 || (trim($_POST['pretensao']))==12 || 
(trim($_POST['pretensao']))==13){
  $pretensao = trim($_POST['pretensao']);
  echo$pretensao."<br>";
}

// $con = conecta();
// $insertCurriculo = "insert into curriculo (email, senha, nome, cpf, cep, endereco, numero, telefone,
// objetivoProfissionaL, empregado, pretencao, idcidade, deficiencia, sexo, estadocivil, ac) 
// values ('$email', '$senha', '$nome', '$cpf', '$cep', '$endereco', '$numero', '$telefone', '$obj', '$empregado', '$pretensao',
// '$idcidade', '$deficiencia', '$sexo', '$estadocivil', '$ac')";
// $res = mysqli_query($con, $insertCurriculo);

// $selcurriculo = "SELECT idcurriculo FROM curriculo WHERE cpf='$cpf' LIMIT 1";
// $rescurriculo = mysqli_query($con, $selcurriculo);
// $rowcurriculo = mysqli_fetch_assoc($rescurriculo);
// $idcurriculo = $rowcurriculo['idcurriculo'];

// $_SESSION['idCurriculo'] = $idcurriculo;

// if ($res){
//   $idiomas = trim($_POST['qtdeIdiomas']);
//   $i = 1;

//   while($i <= $idiomas){
//     $idioma = 'idioma'.$i;
//     $nivel = 'nivel'.$i;

//     if(((trim($_POST[$idioma])) == null) || ((trim($_POST[$nivel])) == null)){
//       echo"null <br>";
//     }else{
//       $idiomasalvar = trim($_POST[$idioma]);
//       $nivelsalvar = trim($_POST[$nivel]);
//       $insertIdiomas = "insert into idiomas_curriculo (idcurriculo, ididiomas, nivel)
//       values ('$idcurriculo','$idiomasalvar', '$nivelsalvar')";
//       $residiomas = mysqli_query($con, $insertIdiomas);
      
//       echo "<script>alert('Show')</script>";
//     }
//     $i++;
//   }
  
// }else {
//   echo "<script>alert('Erro')</script>";
// }

// $_SESSION['emailCurriculo'] = $email;
// $_SESSION['senhaCurriculo'] = $senha;
// $_SESSION['nomeCurriculo'] = $nome;
// $_SESSION['cpf'] = $cpf;
// $_SESSION['idestado'] = $idestado;
// $_SESSION['idcidade'] = $idcidade;
// $_SESSION['cep'] = $cep;
// $_SESSION['endereco'] = $endereco;
// $_SESSION['numero'] = $numero;
// $_SESSION['deficiencia'] = $deficiencia;
// $_SESSION['sexo'] = $sexo;
// $_SESSION['estadocivil'] = $estadocivil;
// $_SESSION['empregado'] = $empregado;
// $_SESSION['obj'] = $obj;
// $_SESSION['pretensao'] = $pretensao;
// $_SESSION['telefone'] = $telefone;
// $_SESSION['acCurriculo'] = $ac;
?>

<div class="container-fluid">
  <div class="row justify-content-center bg-light">
    <div class="col-md-5 ml-md-4  border border-dark  shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 100px">
      <form action="?pagina=salvarcurriculo" method="post">
        <div class="form-row">
          <div class="form-group col-md">
            <h4>Formulário de competências:</h4>
            <p>Formulário de competências com respostas de 0 a 5, sendo zero nem um pouco preparado e 5 muito preparado
            </p>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h4>Trabalho em equipe</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você está preparado para trabalhar com um grupo de pessoas?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo1" id="q1r0" value="option1">
              <label class="form-check-label" for="q1r0">0</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo1" id="q1r1" value="option2">
              <label class="form-check-label" for="q1r1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo1" id="q1r1" value="option3">
              <label class="form-check-label" for="q1r2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo1" id="q1r1" value="option4">
              <label class="form-check-label" for="q1r3">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo1" id="q1r1" value="option5">
              <label class="form-check-label" for="q1r4">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo1" id="q1r1" value="option5">
              <label class="form-check-label" for="q1r5">5</label>
            </div>
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você está pronto para apresentar suas ideias para a sua equipe?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo2" id="q2r0" value="option1">
              <label class="form-check-label" for="q2r0">0</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo2" id="q2r1" value="option2">
              <label class="form-check-label" for="q2r1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo2" id="q2r1" value="option3">
              <label class="form-check-label" for="q2r2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo2" id="q2r1" value="option4">
              <label class="form-check-label" for="q2r3">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo2" id="q2r1" value="option5">
              <label class="form-check-label" for="q2r4">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="grupo2" id="q2r1" value="option5">
              <label class="form-check-label" for="q2r5">5</label>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Adaptação/Aprendizado</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você está aberto a novas experiências profissionais?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo3" id="q3r0" value="option1">
                <label class="form-check-label" for="q3r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo3" id="q3r1" value="option2">
                <label class="form-check-label" for="q3r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo3" id="q3r1" value="option3">
                <label class="form-check-label" for="q3r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo3" id="q3r1" value="option4">
                <label class="form-check-label" for="q3r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo3" id="q3r1" value="option5">
                <label class="form-check-label" for="q3r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo3" id="q3r1" value="option5">
                <label class="form-check-label" for="q3r5">5</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você sabe lidar com mudanças? </h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo4" id="q4r0" value="option1">
                <label class="form-check-label" for="q4r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo4" id="q4r1" value="option2">
                <label class="form-check-label" for="q4r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo4" id="q4r1" value="option3">
                <label class="form-check-label" for="q4r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo4" id="q4r1" value="option4">
                <label class="form-check-label" for="q4r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo4" id="q4r1" value="option5">
                <label class="form-check-label" for="q4r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo4" id="q4r1" value="option5">
                <label class="form-check-label" for="q4r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Aceitação</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você está preparado para receber críticas construtivas do seu trabalho?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo5" id="q5r0" value="option1">
                <label class="form-check-label" for="q5r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo5" id="q5r1" value="option2">
                <label class="form-check-label" for="q5r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo5" id="q5r1" value="option3">
                <label class="form-check-label" for="q5r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo5" id="q5r1" value="option4">
                <label class="form-check-label" for="q5r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo5" id="q5r1" value="option5">
                <label class="form-check-label" for="q5r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo5" id="q5r1" value="option5">
                <label class="form-check-label" for="q5r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Proatividade</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você está preparado para tomar uma decisão levando em conta os possíveis riscos dessa decisão?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo6" id="q6r0" value="option1">
                <label class="form-check-label" for="q6r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo6" id="q6r1" value="option2">
                <label class="form-check-label" for="q6r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo6" id="q6r1" value="option3">
                <label class="form-check-label" for="q6r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo6" id="q6r1" value="option4">
                <label class="form-check-label" for="q6r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo6" id="q6r1" value="option5">
                <label class="form-check-label" for="q6r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo6" id="q6r1" value="option5">
                <label class="form-check-label" for="q6r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Comprometimento</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você está comprometido em cumprir horários e metas?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo7" id="q7r0" value="option1">
                <label class="form-check-label" for="q7r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo7" id="q7r1" value="option2">
                <label class="form-check-label" for="q7r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo7" id="q7r1" value="option3">
                <label class="form-check-label" for="q7r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo7" id="q7r1" value="option4">
                <label class="form-check-label" for="q7r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo7" id="q7r1" value="option5">
                <label class="form-check-label" for="q7r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo7" id="q7r1" value="option5">
                <label class="form-check-label" for="q7r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Autocontrole</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você se considera uma pessoa capaz de lidar com adversidades?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo8" id="q8r0" value="option1">
                <label class="form-check-label" for="q8r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo8" id="q8r1" value="option2">
                <label class="form-check-label" for="q8r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo8" id="q8r1" value="option3">
                <label class="form-check-label" for="q8r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo8" id="q8r1" value="option4">
                <label class="form-check-label" for="q8r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo8" id="q8r1" value="option5">
                <label class="form-check-label" for="q8r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo8" id="q8r1" value="option5">
                <label class="form-check-label" for="q8r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Habilidade de Comunicação</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você se considera uma pessoa comunicativa?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo9" id="q9r0" value="option1">
                <label class="form-check-label" for="q9r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo9" id="q9r1" value="option2">
                <label class="form-check-label" for="q9r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo9" id="q9r1" value="option3">
                <label class="form-check-label" for="q9r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo9" id="q9r1" value="option4">
                <label class="form-check-label" for="q9r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo9" id="q9r1" value="option5">
                <label class="form-check-label" for="q9r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo9" id="q9r1" value="option5">
                <label class="form-check-label" for="q9r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você tem experiência e/ou facilidade em falar em público?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo10" id="q10r0" value="option1">
                <label class="form-check-label" for="q10r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo10" id="q10r1" value="option2">
                <label class="form-check-label" for="q10r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo10" id="q10r1" value="option3">
                <label class="form-check-label" for="q10r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo10" id="q10r1" value="option4">
                <label class="form-check-label" for="q10r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo10" id="q10r1" value="option5">
                <label class="form-check-label" for="q10r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo10" id="q10r1" value="option5">
                <label class="form-check-label" for="q10r5">5</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md">
            <h4>Conhecimento Técnico</h4>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <h5>Você tem experiência na sua área de atuação?</h5>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md">
            <div class="form-group col-md">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo11" id="q11r0" value="option1">
                <label class="form-check-label" for="q11r0">0</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo11" id="q11r1" value="option2">
                <label class="form-check-label" for="q11r1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo11" id="q11r1" value="option3">
                <label class="form-check-label" for="q11r2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo11" id="q11r1" value="option4">
                <label class="form-check-label" for="q11r3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo11" id="q11r1" value="option5">
                <label class="form-check-label" for="q11r4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="grupo11" id="q11r1" value="option5">
                <label class="form-check-label" for="q11r5">5</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <button type="reset" class="btn btn-danger btn-lg btn-block">Limpar</button>
          </div>
          <div class="form-group col-md-6">
            <button type="submit" class="btn btn-dark btn-lg btn-block">Próximo</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>