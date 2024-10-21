<?php
/* CBTIS 89
Programa para checar billetes
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$C=3454;
$b20=floor($C/20);
$C=$C%1000;
$b100=floor($C/100);
$b200=floor($C/200);
$b500=floor($C/500);
$b1000=floor($C/1000);
$m10=floor($C/10);
echo " La cantidad de monedas de 10= ",$m10;
echo "<br>";
echo " La cantidad de billetes de 100= ",$b100;
echo "<br>";
echo " La cantidad de billetes de 200= ",$b200;
echo "<br>";
echo " La cantidad de billetes de 500= ",$b500;
echo "<br>";
echo " La cantidad de billetes de 1000= ",$b1000;
echo "<br>";
echo " La cantidad de billetes de 20= ",$b20;







?>