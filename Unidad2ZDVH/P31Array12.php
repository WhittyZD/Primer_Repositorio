<?php
/* CBTIS 89
Programa array numerar numeros de manera acendente y decendente 
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>