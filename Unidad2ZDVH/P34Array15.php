<?php
/* CBTIS 89
Programa que convierte los datos de un arrgelo en una cadena de texto
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/

//Almacena datos en un arreglo
$arraydatos= ["Lolito","Rosa","Negra"];
//Convierte un array en una cadena de texto
$nombre = implode(" ",$arraydatos);
echo " Cadena de texto <br>";
echo $nombre;
echo "<br>","<br>";

//Cadena de texto a separar
$cadena= "tercero de programacion matutino";

//Convierte una cadena de texto en un array
$array = explode(" ",$cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//imprime los elementos de un arreglo
for($i=0; $i<$longitud; $i++)
	{//se obtiene el valor de cada elemnto
		echo $array[$i];
		echo "<br>";
	}

?>