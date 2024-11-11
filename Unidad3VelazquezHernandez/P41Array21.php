<?php
/* CBTIS 89
Programa que amacena en un arreglo el valor de 6 compras saca descuentos y da el total de todo asi como el porcentaje
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$arraycompras = array(500 , 600 ,400 ,200 ,5000,2600);
$arraydescuentos = array();
$arraytotal = array();

$longitud = count($arraycompras);

for($i=0; $i<$longitud; $i++)
{if ($arraycompras[$i]< 300)
{$arraydescuentos[] = 0;}
elseif ($arraycompras[$i]> 300 && <= 1000)
{$arraydescuentos[] = 10;}
elseif ($arraycompras[$i]> 1000 && <= 2500)
{$arraydescuentos[] = 15;}
elseif ($arraycompras[$i])}

?>