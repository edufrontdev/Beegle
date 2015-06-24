<?php
include "Connection.php";

class HandlerAnamnesis{
	
	function insert($Anamnesis){
		$anam = $Anamnesis;
		$conn1 = new Connection();
		echo $Anamnesis->nombrePaciente . " " . $Anamnesis->rutPaciente;
		$sql = "INSERT INTO `anamnesis` (`nombre_paciente`, `rut_paciente`) VALUES ('" . $anam->nombrePaciente . "', " .  $anam->rutPaciente . ")";
//		$sql = "select * from test";
		echo $sql;
		$respuesta = $conn1->getResulset($sql);
		echo $respuesta;
		$conn1->closeConection();
		return $respuesta;
	}
	
}
?>