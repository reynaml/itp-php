<?php
$departamentos = require 'emp.php';
$departamentos['Ventas'] = [];
$departamentos['Ventas'][] = [
	'nombre' => 'Roberto Hernandez',
	'sueldo' => 3500,
	];


echo "Nombre    |  Depar | Sue base | IVA | ISR | Sue total | Impuesto total\n";

foreach ($departamentos as $departamento => $empleados){
	echo "\n $departamento ";
	$impuesto= 0;
		array_walk($empleados, function($empleado) use ($departamento, &$impuesto){
	$iva=$empleado['sueldo'] * .15 ;
	$isr=$empleado['sueldo']* .10 ;
	$sueldo = $empleado['sueldo'] - $iva - $isr;
	$impuesto +=$sueldo;
	echo "{$empleado['nombre']}   |{$empleado['sueldo']} |\n";
	echo "$iva    | $isr    | $sueldo |\n";
});

echo "\nImpuesto Total:  $impuesto \n";
}


?>