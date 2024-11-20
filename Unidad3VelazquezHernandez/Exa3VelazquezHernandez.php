<?php 
/* CBTIS 89 
Programa que almacena en un arreglo el valor de 4 articulos, saca subtotal , promedio y los almacena en otro arreglo y lo imprime de forma horizontal.
Velázquez Hernández Zoe Dylan 3°A Programación Matutino
*/
$Productos = array("Vestido", "Pantalon", "Cinturon", "Camiseta");
$Precios = array(500, 600, 550),array(800, 700, 600),array(400, 200, 300),array(500, 200, 500);
$Subtotal = array();
$Promedio = array();

$longitud = count($Productos);
for ($i = 0; $i < $longitud; $i++)


$Promedio[] = ($Precios[0] + $Precios[1] + $Precios[2] + $Precios[3]) / 4;
$Subtotal[] = $Precios[0] + $Precios[1] + $Precios[2] + $Precios[3];

echo "TIENDA DE ROPA <br>";
echo "Productos--------";
for ($i = 0; $i < $longitud; $i++) 
	{ echo $Productos[$i] . "------"; }
echo "---Subtotal ---";
for ($i = 0; $i < $longitud; $i++)
 {echo $Subtotal[$i] . "-----"; }
echo "---Promedio";
for ($i = 0; $i < $longitud; $i++)
 { echo "$" $Promedio[$i] . "-----"; }

?>