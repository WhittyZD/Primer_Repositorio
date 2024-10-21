<?php
/* CBTIS 89
Programa que convierte los datos de un arrgelo en una cadena de texto
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$array1 = array(10,8,15,20,40);
$array2 = array(5,3,7,5,30);
$aS =array();
$aM =array();
$aR =array();
$aD =array();
$longitud = count($array1);

for($i=0; $i<$longitud; $i++)
	{$aS=$array1[$i]+$array2[$i];
	$aR=$array1[$i]-$array2[$i];
	$aM=$array1[$i]*$array2[$i];
	$aD=$array1[$i]/$array2[$i];
}
	echo "Suma entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." + ".$array2[$i]." = ".$aS[$i];
    echo "<br>";}
echo "Resta entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." - ".$array2[$i]." = ".$aR[$i];
    echo "<br>";}
    echo "Multiplicacion entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." * ".$array2[$i]." = ".$aM[$i];
    echo "<br>";}
echo "Divicion entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." / ".$array2[$i]." = ".$aD[$i];
    echo "<br>";}



?>