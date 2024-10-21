<?php
/* CBTIS 89
Programa que alamcena furutas para fruteria , tienda ,precios en un arreglo
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$fruteria = array("40$"=>'Manzana','10$'=>'Mangos','90$'=>'Limon','15$'=>'Naranjas');

echo "** Fruteria Del Sur **","<br>","<br>";
foreach($fruteria as $Precio=>$frutas) 
{echo "El Kilo de " . $frutas . " cuesta: " . $Precio;
 echo "<br>","<br>";
}
