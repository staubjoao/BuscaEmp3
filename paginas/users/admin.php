<?php
session_start();

$con = conecta();

if(!empty($_SESSION['id'])){
    $res = mysqli_query($con, 'SELECT * FROM empresa'); 
}else{
    $_SESSION['msg'] = "Área restrita!";
    header("Location: ?pagina=login");
}
?>

<div class='container-fluid'>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Empresa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-striped" id="tabela">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>e-mail</th>
                        <th>nome</th>
                        <th>CNPJ</th>
                        <th>endereço</th>
                        <th>número</th>
                        <th>CEP</th>
                        <th>ramo</th>
                        <th>estado</th>
                        <th>cidade</th>
                        <th>operações </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                while($empresas = mysqli_fetch_assoc($res)):
                    ?>
                    <tr>
                        <td><?php echo $empresas['idempresa'];?></td>
                        <td><?php echo $empresas['email'];?></td>
                        <td><?php echo $empresas['nome'];?></td>
                        <td><?php echo $empresas['cnpj'];?></td>
                        <td><?php echo $empresas['endereco'];?></td>
                        <td><?php echo $empresas['numero'];?></td>
                        <td><?php echo $empresas['cep'];?></td>
                        <td><?php echo $empresas['ramoAtividade'];?></td>
                        <td><?php echo $empresas['idestado'];?></td>
                        <td><?php echo $empresas['cidade_idcidade'];?></td>
                        <td><a class="btn btn-danger"
                                href="?pagina=empresaalterar&idempresa=<?php echo$empresas['idempresa'];?>"
                                role="button">Alterar</a>
                            <a class="btn btn-danger" 
                                href="?pagina=excluirempresa&idempresa=<?php echo$empresas['idempresa'];?>"
                                role="button">Excluir</a>
                        </td>
                    </tr>
                    <?php 
                endwhile;
                ?>
                </tbody>
            </table>  
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">..asdasdasd.</div>
    </div>
    <a href="?pagina=sair">sair</a>
</div>


<script>
$(document).ready(function(){
    $('#tabela').dataTable( {
        "language": {
            "url": "../../datatables/Portugues-Brasil.lang"
        }
    });
});
</script>