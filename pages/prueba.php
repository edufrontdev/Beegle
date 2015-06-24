<html>
</header>
<body>

<?php

/*include "Anamnesis.php";
include "HandlerAnamnesis.php";

$anamnesis = new Anamnesis();

//echo $anamnesis->prueba("holanda");

$anamnesis->nombrePaciente = "holanda";
$anamnesis->rutPaciente	= 1234;

$handlerAnamnesis = new HandlerAnamnesis();

$result = $handlerAnamnesis->insert($anamnesis);

echo $result;
*/
include "mierdaClase.php";

$mierda = new mierdaClase();

$query = "INSERT INTO `anamnesis` (`nombre_paciente`, `rut_paciente`) VALUES ('holanda',123456)";
$mierda->query($query);

?>
</body>
</html>