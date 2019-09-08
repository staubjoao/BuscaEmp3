<?php
session_start();
print_r($_POST);

$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$nome = trim($_POST['nome']);
$cpf = trim($_POST['cpf']);
$idestado = trim($_POST['id_estado']);
$idcidade = trim($_POST['id_cidade']);
$cep = trim($_POST['cep']);
$endereco = trim($_POST['endereco']);
$numero = trim($_POST['numero']);
$deficiencia = trim($_POST['deficiencia']);
$sexo = trim($_POST['sexo']);
$estadocivil = trim($_POST['estadocivil']);
$empregado = trim($_POST['empregado']);
$obj = trim($_POST['obj']);
$pretensao = trim($_POST['pretensao']);
$telefone = trim($_POST['telefone']);
$ac = "C";

$con = conecta();
$insertCurriculo = "insert into curriculo (email, senha, nome, cpf, cep, endereco, numero, telefone,
objetivoProfissionaL, empregado, pretencao, idestado, idcidade, deficiencia, sexo, estadocivil, ac) 
values ('$email', '$senha', '$nome', '$cpf', '$cep', '$endereco', '$numero', '$telefone', '$obj', '$empregado', '$pretensao',
'$idestado', '$idcidade', '$deficiencia', '$sexo', '$estadocivil', '$ac')";
$res = mysqli_query($con, $insertCurriculo);

$selcurriculo = "SELECT idcurriculo FROM curriculo WHERE cpf='$cpf' LIMIT 1";
$rescurriculo = mysqli_query($con, $selcurriculo);
$rowcurriculo = mysqli_fetch_assoc($rescurriculo);
$idcurriculo = $rowcurriculo['idcurriculo'];

$_SESSION['idCurriculo'] = $idcurriculo;

if ($res){
  $idiomas = trim($_POST['qtdeIdiomas']);
  $i = 1;

  while($i <= $idiomas){
    $idioma = 'idioma'.$i;
    $nivel = 'nivel'.$i;

    if(((trim($_POST[$idioma])) == null) || ((trim($_POST[$nivel])) == null)){
      echo"null <br>";
    }else{
      $idiomasalvar = trim($_POST[$idioma]);
      $nivelsalvar = trim($_POST[$nivel]);
      $insertIdiomas = "insert into idiomas_curriculo (idcurriculo, ididiomas, nivel)
      values ('$idcurriculo','$idiomasalvar', '$nivelsalvar')";
      $residiomas = mysqli_query($con, $insertIdiomas);
      
      echo "<script>alert('Show')</script>";
    }
    $i++;
  }
  
}else {
  echo "<script>alert('Erro')</script>";
}

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