<?php
$empleados = require 'empleados.php';

echo "Nombre                 | Sueldo\n";

foreach ($empleados as $empleado){
	$sueldo = $empleado['sueldo'] 
	- $empleado['sueldo'] * .15 
	- $empleado['sueldo'] *.10;
	
	echo "{$empleado['nombre']}             | $sueldo\n";

}

?>