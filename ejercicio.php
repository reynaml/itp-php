<?php
/**
Para el proeso de pago de un empleado se debe de  ingresar la cantidad ganada. 
Al ingresar la cantidad se tiene que calcular los impuestos tales como IVA(15%) e
ISR(10%) mostrando la cantidad de los impuestos y el sueldo total para el empleado
*/

$nombre= 'Alejandro';
$sueldo = 250;
$iva= 250 * 0.15;
$isr= 250 * 0.10;
$total = 250 - $iva - $isr ;

echo "Nombre: $nombre\n";
echo "Sueldo:  $sueldo\n";
echo "IVA: $iva\n";
echo "ISR: $isr\n";
echo "TOTAL: $total\n";

?>
