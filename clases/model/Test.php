<?php
class Test {

 	public $rut_paciente; // = 'gabriel';
	public $id_test; // = '21321312';
	public $media_universal;
	public $desviacion_tipica;
	public $puntaje_adquirido_t1;
        public $puntaje_adquirido_t2;
        public $media_universal_t1;	
        public $media_universal_t2;	
        public $errores_t1;
        public $errores_t2;
        public $puntuacion_directa;
        public $puntaje_total;
	public $descripcion_resultado;

	
	function pruebaTest(){		
		echo 'rut_paciente = ' . $this->rut_paciente .  '\n' .
			'id_test = ' . $this->id_test .  '\n' .
			'media_universal = ' . $this->media_universal .  '\n' .
			'desviacion_tipica = ' . $this->desviacion_tipica .  '\n' .
			'puntaje_adquirido_t1 = ' . $this->puntaje_adquirido_t1 .  '\n' .
			'puntaje_adquirido_t2 = ' . $this->puntaje_adquirido_t2 .  '\n' .
			'media_universal_t1 = ' . $this->media_universal_t1 .  '\n' .
			'media_universal_t2 = ' . $this->media_universal_t2 .  '\n' .
			'errores_t1 = ' . $this->errores_t1 .  '\n' .
			'errores_t2 = ' . $this->errores_t2 .  '\n' .
			'puntaje_adquirido_t1 = ' . $this->puntaje_adquirido_t1 .  '\n' .
			'descripcion_resultado = ' . $this->descripcion_resultado;
	}
}
?>

