<?php
function suma()
{

	$suma = 0;
	foreach (func_get_args() as $number){
	$suma += $number;
	}
	
	return $suma;
}
echo suma(2, 5, 6, 7, 8, 10);
?>