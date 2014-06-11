<?php

// de menor a mayor

$mayor = function($a, $b){
	if($a > $b){
	return $a;
	} else {
	return $b;
	}
};
echo $mayor(12, 7);
echo "\n";

$numbers = [1, 3, 4, 11, 100, 5];
 usort($numbers, function($a,  $b){
	return $a - $b;
	});
print_r($numbers);

$mayor = "\nHOLA\n";
echo $mayor;




// de mayor a menor
$mayor = function($a, $b){
	if($a > $b){
	return $a;
	} else {
	return $b;
	}
};
echo $mayor(12, 7);
echo "\n";
$numbers = [1, 3, 4, 11, 100, 5];

 usort($numbers, function($a,  $b){
	
	return $b - $a;
	});
print_r($numbers);

$mayor = "\nHOLA\n";
echo $mayor;

// ejemplo de orden ascendente utilizando cloth clousure 
$mayor = function($a, $b){
	if($a > $b){
	return $a;
	} else {
	return $b;
	}
};
echo $mayor(12, 7);
echo "\n";
$numbers = [1, 3, 4, 11, 100, 5];
$ordering = 'ascendent';
 usort($numbers, function($a,  $b) use($ordering){
	if('ascendent' === $ordering){
		return $a - $b;
		}
	return $b - $a;
	});
print_r($numbers);

$mayor = "\nHOLA\n";
echo $mayor;



// ejemplo de orden descendente utilizando cloth clousure 
$mayor = function($a, $b){
	if($a > $b){
	return $a;
	} else {
	return $b;
	}
};
echo $mayor(12, 7);
echo "\n";
$numbers = [1, 3, 4, 11, 100, 5];
$ordering = 'descendent';
 usort($numbers, function($a,  $b) use($ordering){
	if('descendent' === $ordering){
		return $a - $b;
		}
	return $b - $a;
	});
print_r($numbers);

$mayor = "\nHOLA\n";
echo $mayor;


?>