<?php
$empleados1 = require 'empleados1.php';

/**
nominas_for($empleados1);

function nominas_for($empleados1)
{

		echo "Nombre                 | Sueldo\n";
		
		for ($i = 0; $i< count($empleados1); $i++)
		{
		$sueldo = $empleado1[$i]['sueldo'] - $empleados1[$i]['sueldo'] * .15
		- $empleados1[$i]['sueldo'] * .10;
		
		echo "{$empleados1[$i]['nombre']}             | $sueldo\n";
		}
}
*/

/*
//ejemplo del ejercicio con el ciclo while
nomina_while($empleados1);

function nomina_while($empleados1)
{

		echo "\nNombre                 | Sueldo\n";
		$i = 0;
		while ($i < count($empleados1))
		{
		$sueldo = $empleados1[$i]['sueldo']
		- $empleados1[$i]['sueldo'] * .15
		- $empleados1[$i]['sueldo'] *  .10;
		echo "{$empleados1[$i]['nombre']}             | $sueldo\n";
		$i++;
		}
}
*/
//ejemplo de los parametros por defecto

nomina_while($empleados1);
nomina_while($empleados1, .16);

function nomina_while($empleados1, $porcentajeIVA = .15, $porcentajeISR = .10)
{

		echo "\nNombre                 | Sueldo\n";
		$i = 0;
		while ($i < count($empleados1))
		{
		$sueldo = $empleados1[$i]['sueldo']
		- $empleados1[$i]['sueldo'] * $porcentajeIVA
		- $empleados1[$i]['sueldo'] *  $porcentajeISR;
		echo "{$empleados1[$i]['nombre']}             | $sueldo\n";
		$i++;
		}
}

?>