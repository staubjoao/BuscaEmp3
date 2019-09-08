<?php 
require_once('../../lib/funcs.php');

$con = conecta();

$id_estado = $_REQUEST['id_estado'];

$result_cidade = "SELECT * FROM cidade WHERE estado_idestado=$id_estado ORDER BY cidade";
$resultado_cidade = mysqli_query($con, $result_cidade);

while ($rowCidade = mysqli_fetch_assoc($resultado_cidade)) {
		$cidade_post[] = array(
			'idcidade'	=> $rowCidade['idcidade'],
			'cidade' => utf8_encode($rowCidade['cidade']),
		);
	}
	
	echo(json_encode($cidade_post));
?>