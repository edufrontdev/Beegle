<?php
class Preguntas {

 	public $id_pregunta; // = 'gabriel';
	public $descripcion; // = '21321312';
	public $respuesta_paciente;
	public $respuesta_correcta;
	public $numero_pregunta;
        public $tipo_pregunta;
	
	function pruebaPreguntas(){		
		echo 'id_pregunta = ' . $this->id_pregunta .  '\n' .
			'descripcion = ' . $this->descripcion .  '\n' .
			'respuesta_paciente = ' . $this->respuesta_paciente .  '\n' .
			'respuesta_correcta = ' . $this->respuesta_correcta .  '\n' .
			'numero_pregunta = ' . $this->numero_pregunta .  '\n' .
			'tipo_pregunta = ' . $this->tipo_pregunta .  '\n';
	}
	
}
?>

