<?php 
require_once('../../lib/funcs.php');

$con = conecta();

$id_nivel = $_REQUEST['id_nivel'];

$result_curso = "SELECT * FROM curso WHERE idnivel=$id_nivel";
$resultado_curso = mysqli_query($con, $result_curso);


while ($rowCurso = mysqli_fetch_assoc($resultado_curso)) {
		$curso_post[] = array(
			'idcurso'	=> $rowCurso['idcurso'],
			'curso' => utf8_encode($rowCurso['curso']),
		);
	}
	
	echo(json_encode($curso_post));

?>