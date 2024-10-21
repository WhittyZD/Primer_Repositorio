<?php
/* CBTIS 89
Programa array codigo donde muestra accesorios de manera acendente y decendente
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$array_nombres=array("Lupe","Pepe","Nicolas jackson","Harry maguire","Antony","Gina");
echo "Datos de arreglo ordenado de forma acendente por medio de un ciclo for <br>";
for ($i=0;$i<count($array_nombres); $i++) {
    echo $array_nombres[$i] . "<br>";}
array_push($array_nombres, "Jesus");
array_push($array_nombres, "Steve");
array_push($array_nombres, "Alex");
array_push($array_nombres, "Salibon");
sort($array_nombres);
echo "<br> Posteriormente se agretgaron 4 datos y de eliminaron 2 <br>";
echo "<br> Ordenados de forma acendente <br>";
for ($i=0;$i<count($array_nombres); $i++) {
    echo $array_nombres[$i] . "<br>";
}
unset($array_nombres[4]);
unset($array_nombres[2]);
rsort($array_nombres);
echo "<br>Array ordenado en descendente:<br>";
for ($i=0;$i<count($array_nombres); $i++) {
    echo $array_nombres[$i] . "<br>";
}
?>
