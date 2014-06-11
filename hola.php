<?php
/**
*Nombre: Machorro Luna Reyna
*Carrera: Licenciatura en Informática 
*/

// ejercicios del dia lunes 9 de junio 

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
echo "\n$bar\n";

// ejercicios del dia martes 10 de junio 

$bigVariable = 'PHP ';
$short = &$bigVariable;
$bigVariable .= 'Rocks! ';
echo "Short is $short";
echo " Long is $bigVariable\n";

//ejemplo de variable global 

function update_counter()
{
	global $counter;
	$counter++;
}

$counter = 10;
update_counter();
echo $counter;


//ejemplo de variable estatica
function update_counters()
{
	static  $counters = 0;
	$counters++;
	echo "\nStatic: $counters";
}

$counters = 10;
update_counters();
update_counters();
echo "\n$counters";

//ejemplo de funcion que tiene parametros con nombre 

function greet($name)
{
	echo "\nHello $name!\n";
}
greet('Janet');

//ejemplo de conversiones de tipo

$age =30;
$age= (string) $age;
var_dump($age);
$age= (boolean) $age;
var_dump($age);
$age= (float) $age;
var_dump($age);
$age= (array) $age;
var_dump($age);

// ejemplo de conversiones implicito

var_dump('10' == 10);
var_dump('10' === 10);
var_dump('5' . 5);
var_dump('2' + 2);

// ejemplo de estructuras de control 

//ejemplo de if
$password ='Letmein';
if ($password === 'letmein')
	{
	echo 'Password is correct';
	}
	else
	{
	echo "Try again\n";
	}

	// ejemplo de switch case 
	
$color = 'red';
switch ($color)
{
	case 'gren':
		echo 'Gren';
		break;
	case 'blue':
		echo 'Blue';
		break;
	default:
	echo $color;
}

// ejemplo de foreach

$product=[
	'name'=>'Ajax',
	'price' => 230,
	'available'=> true,
];
foreach ($product as $field => $value){
	echo"\n$field: $value\n";
	}
	
// ejemplo de salidas de ejecucion 

function test()
{
	$parameter1 = 'foo';
	$parameter2 = 'bar';
		if ($parameter1 == 'baz')
			{
			die('Terminate script');
			}
			
			return "\n$parameter1 $parameter2 \n";
}
//return 'Luis';
echo test();
//exit(0);

//recurrir al return de confi

$confi = require 'confi.php';
print_r ($confi);



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

// ejercicios de la clase del miercoles 11 de junio 

$iva= 250 * 0.15;
$isr= 250 * 0.10;
$total = 250 - $iva - $isr ;
echo "TOTAL: $total\n";

$iva1= 300 * 0.15;
$isr1= 300 * 0.10;
$total1 = 300 - $iva - $isr ;


$iva2= 600 * 0.15;
$isr2= 600 * 0.10;
$total2 = 600 - $iva - $isr ;


$iva3= 500 * 0.15;
$isr3= 500 * 0.10;
$total3 = 500 - $iva - $isr ;


$iva4= 900 * 0.15;
$isr4= 900 * 0.10;
$total4 = 900 - $iva - $isr ;


$empleados=[['Nombre' => 'Alejandro', 'Sueldo' =>250, 'Pago Total'=> $total],
['Nombre' =>'Selene', 'Sueldo' =>300, 'Pago Total'=> $total1],
['Nombre' =>'Alma', 'Sueldo' =>600, 'Pago Total'=> $total2], 
['Nombre' =>'Maru', 'Sueldo' =>500, 'Pago Total'=> $total3], 
['Nombre' =>'Mariana','Sueldo' =>900, 'Pago Total'=> $total4]];

print_r($empleados);

// ejercicio con 5 empleados utilizando  un ciclo 

$empleados=[['Nombre' => 'Alejandro', 'Sueldo' =>250, 'Pago Total'=> $total],
['Nombre' =>'Selene', 'Sueldo' =>300, 'Pago Total'=> $total1],
['Nombre' =>'Alma', 'Sueldo' =>600, 'Pago Total'=> $total2], 
['Nombre' =>'Maru', 'Sueldo' =>500, 'Pago Total'=> $total3], 
['Nombre' =>'Mariana','Sueldo' =>900, 'Pago Total'=> $total4]];


print_r($empleados);




?>