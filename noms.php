<?php
$empleados = require 'emp.php';

echo "Nombre                 | Sueldo                 |  Departamento \n";

foreach ($empleados as $empleado){
	$sueldo = $empleado['sueldo'] 
	- $empleado['sueldo'] * .15 
	- $empleado['sueldo'] *.10;
	
	echo "{$empleado['nombre']}             | $sueldo            |'depar'\n";

}

$depa = function($dep){
		if($dep == 'tintes'){
		return $dep;
		} else {
		return 'armado';
		}
};
echo "{$empleado['nombre']}             | $sueldo            |'depar'\n";
echo "\n";



?>