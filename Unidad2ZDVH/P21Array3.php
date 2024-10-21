<?php
/* CBTIS 89
Programa que almacena los nombres de 6 personas en un arreglo y posteriormente los imprime por medio de un ciclo for
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$n1="Mbappe";
$n2="Lupe";
$n4="Jasinto";
$n3="Pepe";
$n5="Roberto";
$n6="Josefa";
$array = array($n1,$n2,$n3,$n4,$n5,$n6);
//se obtiene el numero de elementos
$longitud = count($array);
//Recorre todos los elemntos
for($i=0; $i<$longitud; $i++)
	{//Se obtiene el valor de cada elemento
		echo $array[$i];
		echo "<br>";}
?>