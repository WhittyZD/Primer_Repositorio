<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/

$nombre = "Mbappe";
$array = array(1, 2, 3, "Casa" ,$nombre);
//se obtiene el numero de elementos
$longitud = count($array);
//Recorre todos los elemntos
for($i=0; $i<$longitud; $i++)
	{//Se obtiene el valor de cada elemento
		echo $array[$i];
		echo "<br>";}
?>