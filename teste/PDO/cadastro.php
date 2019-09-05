<?php include("Includes/Header.php"); ?>


        <?php
            include("Class/ClassConexao.php");
            include("Class/ClassCrud.php");
            $Crud = new ClassCrud();
        ?>
        
        <div class="Resultado">
        
        
        </div>
        <div class="Formulario">

            <h1>Cadastro</h1>

            <form name="FormCadastro"  id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php" >
            
                <div class="FormularioInput">
                    nome: <br>
                    <input type="text" id="Nome" name= "Nome">
                </div>
                <div class="FormularioInput">
                    Sexo: <br>
                    <input type="text" id="Nome" name= "Sexo">
                </div>
                <div class="FormularioInput">
                    Cidade: <br>
                    <input type="text" id="Nome" name= "Cidade">
                </div>
                <div class="FormularioInput">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        </div>

<?php include("Includes/Footer.php"); ?>