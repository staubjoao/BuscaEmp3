<?php
$con = conecta();
$res = mysqli_query($con, 'SELECT * FROM empresa');

?>

<div class="container">
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
                    <th>operações</th>
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
                    <td><?php echo $empresas['idcidade'];?></td>
                    <td><?php echo $empresas['idestado'];?></td>
                    <td><a class="btn btn-danger" href="?pagina=alterarempresa&idempresa=<?php $empresas['idempresa'];?>" 
                    role="button">Alterar</a>
                    <a class="btn btn-danger" href="" role="button">Excluir</a></td>
                </tr>
                <?php 
                endwhile;
                ?>
            </tbody>
        </table>

    </div>

    <!-- <script>
        $(document).ready(function(){
            $("#tabela").DataTable({
                responsive: true,
                // "bSort": false,
                "aaSorting": [],
                "pageLength": 50,
                "language": {
                    "decimal": "",
                    "emptyTable": "Sem dados disponíveis",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
                    "infoEmpty": "Mostrando de 0 até 0 de 0 registos",
                    "infoFiltered": "(filtrado de _MAX_ registos no total)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ registos",
                    "loadingRecords": "A carregar dados...",
                    "processing": "A processar...",
                    "search": "Procurar:",
                    "zeroRecords": "Não foram encontrados resultados",
                    "paginate": {
                        "first": "Primeiro",
                        "last": "Último",
                        "next": "Seguinte",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": ordem crescente",
                        "sortDescending": ": ordem decrescente"
                    }
                }
            });

        });
    </script> -->