<?php
/* CBTIS 89
Programa array codigo donde muestra accesorios de manera acendente y decendente
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$array_productos = array("Camisa", "Pantalón", "Cinturón");

echo "Array original:<br>";
foreach($array_productos as $producto) {
    echo $producto . "<br>";}
array_push($array_productos, "Zapatos");
array_push($array_productos, "Gorra");
array_push($array_productos, "Calcetines");
echo "<br>Array después de agregar productos:<br>";
foreach($array_productos as $producto) {
    echo $producto . "<br>";}
//ascendente
sort($array_productos);
echo "<br>Array ordenado en ascendente:<br>";
foreach($array_productos as $producto) {
    echo $producto . "<br>";}
//descendente
rsort($array_productos);
echo "<br>Array ordenado en descendente:<br>";
foreach($array_productos as $producto) {
    echo $producto . "<br>";}
?>