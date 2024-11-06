<?php
/* CBTIS 89
Programa array donde muestra números negativos y positivos y los suma
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/

$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, -30, 21, 50, -73, -7, -10, -8);
$arraypositivos = array();
$arraynegativos = array();
$sumapositivos = 0;
$sumanegativos = 0;

$longitud = count($arraynumeros);
for ($i = 0; $i < $longitud; $i++) {
    if ($arraynumeros[$i] >= 0) 
    {$arraypositivos[] = $arraynumeros[$i];}
        else
         {$arraynegativos[] = $arraynumeros[$i];}
}

echo "Positivos:<br><br>";
foreach ($arraypositivos as $positivos) {
    echo $positivos . "<br>";
}

echo "Suma de positivos: ";
foreach ($arraypositivos as $positivos) {
    $sumapositivos =$sumapositivos + $positivos; 
}
echo $sumapositivos;
echo "<br><br>";

echo "Negativos:<br><br>";
foreach ($arraynegativos as $negativos) {
    echo $negativos . "<br>";
}
echo "Suma de negativos: ";
foreach ($arraynegativos as $negativos) {
    $sumanegativos=$sumanegativos + $negativos; 
}
echo $sumanegativos;
echo "<br>";
?>