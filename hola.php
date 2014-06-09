<?php
/**
*Comentario de varias lineas
*/
$message='Hola mundo php'; // comentario de una sola linea
# el punto y coma se puede omitir al final del bloque
echo "$message\n";
define('PUBLISHER', 'Springer');
echo PUBLISHER;
$pi=0.0314E2;
echo "\n$pi\n";
echo'\n$pi';
$people=['Luis', 'Misraim', 'Noe', 123, false, [2]];
print_r($people);

$product=[
	'name'=>'Ajax',
	'price' => 230,
	'available'=> true,
];

echo "\nEste es el precio del producto: {$product['price']}\n";
echo $product['name'];

print_r($product);
print_r($people);

// variables variables

$foo = 'bar';
$$foo = 'baz';
echo "\n$foo";
echo "\n$bar";

?>