<?php

class Conexion {

	// trans.php
	function begin(){
	    mysql_query("BEGIN");
	}

	function commit(){
	    mysql_query("COMMIT");
	}

	function rollback(){
	    mysql_query("ROLLBACK");
	}

	function query($qry){
 	mysql_connect("localhost","innovati_beegle", "VeLp1026") or die(mysql_error());

	mysql_select_db("innovati_beegle") or die(mysql_error());

	//$query = "INSERT INTO `anamnesis` (`nombre_paciente`, `rut_paciente`) VALUES ('holanda',12345)";
	$query = $qry;

	$this->begin(); // transaction begins

	$result = mysql_query($query);

	if(!$result){
	    $this->rollback(); // transaction rolls back
	    echo "transaction rolled back";
	    exit;
	}else{
	    $this->commit(); // transaction is committed
	    echo "Database transaction was successful";
	}	
	}
}
?>