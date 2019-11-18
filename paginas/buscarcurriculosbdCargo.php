<?php
require_once('../lib/funcs.php');
$con = conecta();

$cargoBoo = FALSE;

if((trim($_POST['cargo'])) == ""){
    echo "Cargo invalida"."<br>";
}else{
    $cargo = trim($_POST['cargo']);
    $cargoBoo = TRUE;
}

$selectCargo = "SELECT curriculo.nome, curriculo.email, curriculo.telefone, curriculo.idcurriculo 
FROM 
curriculo inner join pretensao on curriculo.idcurriculo = pretensao.curriculo_idcurriculo
INNER join cargos_curriculo on pretensao.idpretensao = cargos_curriculo.pretensao_idpretensao
WHERE cargos_curriculo.cargos_idcargos='$cargo'";
$resCargo = mysqli_query($con, $selectCargo);

$j = 1;

if($resCargo){
    $qtdCargo = mysqli_num_rows($resCargo);
    if($qtdCargo > 0){
        ?>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                    while($rowCurriculo = mysqli_fetch_assoc($resCargo)){
                                    ?>
                                    <th scope="row"><?php echo $j;?></th>
                                    <?php $j++; ?>
                                    <td><?php echo $rowCurriculo["nome"]; ?></td>
                                    <td><?php echo $rowCurriculo["email"]; ?></td>
                                    <td><?php echo $rowCurriculo["telefone"]; ?></td>
                                    <td><a class="btn btn-info"
                                        href="?pagina=listardadosCargo&idcurriculo=<?php echo$rowCurriculo['idcurriculo'];?>"
                                        role="button">Listar dados</a>
                                    </td>
                                    </tr>
                        <?php } ?>
                                    <tr>
                                </tbody>
                            </table>
                    <?php
    }else{
        echo "<h4>Não existe nenhum curriculo com esse cargo</h4>";
    }
}else{
    echo "n buscou no bd";
}
?>