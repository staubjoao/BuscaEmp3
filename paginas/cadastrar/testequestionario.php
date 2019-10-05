<?php
$con = conecta();
?>
<div class="container-fluid">
    <div class="row justify-content-center bg-light">
        <div class="col-md-8 ml-md-5  border border-primary  shadow-lg p-3 mb-5 bg-white rounded"
            style="margin-top: 100px">
            <form id="formPretencao" action="?pagina=gravarexperienciaprofissional" method="post">
                <div class="form-row">
                    <div class="form-group col-md">
                        <h4>Formulário de competências:</h4>
                        <p>Formulário de competências com respostas de 0 a 5, sendo zero nem um pouco preparado e 5
                            muito preparado
                        </p>
                    </div>
                </div>
                <?php
                $resPerguntas = mysqli_query ($con, 'SELECT * FROM perguntas');
                while ($rowPerguntas = mysqli_fetch_assoc($resPerguntas)):
                ?>
                <div class="form-row">
                    <div class="form-group col-md">
                        <h5><?php echo utf8_encode($rowPerguntas['pergunta'])?></h5>
                        <div class="rating">
                            <input type="radio" id="p1-star5" name="<?php echo "grupo".$rowPerguntas['idperguntas']?>" value="5" /><label for="p1-star5"
                                title="Muito bom">5 stars</label>
                            <input type="radio" id="p1-star4" name="<?php echo "grupo".$rowPerguntas['idperguntas']?>" value="4" /><label for="p1-star4"
                                title="Bom">4 stars</label>
                            <input type="radio" id="p1-star3" name="<?php echo "grupo".$rowPerguntas['idperguntas']?>" value="3" /><label for="p1-star3"
                                title="Medio">3 stars</label>
                            <input type="radio" id="p1-star2" name="<?php echo "grupo".$rowPerguntas['idperguntas']?>" value="2" /><label for="p1-star2"
                                title="Não tão ruim">2 stars</label>
                            <input type="radio" id="p1-star1" name="<?php echo "grupo".$rowPerguntas['idperguntas']?>" value="1" /><label for="p1-star1"
                                title="ruim">1 star</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                </div>
                <?php endwhile ?>
            </form>
        </div>
    </div>
</div>