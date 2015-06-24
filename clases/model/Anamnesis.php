<?php
class Anamnesis {

 	public $nombrePaciente; // = 'gabriel';
	public $rutPaciente; // = '21321312';
	public $sexoPaciente;
	public $edad_paciente;
	public $curso_paciente;
        public $escolaridad_paciente;
        public $salud_general;
        public $trastorno_aprendizaje;
        public $nombre_madre;
        public $edad_madre;
        public $escolaridad_madre;
        public $nombre_padre;
        public $edad_padre;
        public $escolaridad_padre;
        public $sit_act_activ_normales;
        public $sit_act_tranquilo;
        public $sit_act_amigos;
        public $sit_act_rel_flia;
        public $sit_act_hab_sueno;
        public $sit_act_hab_alim;
        public $sit_act_hab_esparc;
	
	function prueba($test){		
		return $this->nombrePaciente .  ' ' . $this->rutPaciente;
	}
	
}
?>

