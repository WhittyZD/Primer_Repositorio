<?php
/* CBTIS 89
Programa array donde muestra números negativos y positivos y los suma
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/

$datos = array(array(10, 20, 30), array(40, 50, 60), array(70, 80, 90));
echo "Normal";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "FILAS A COLUMNAS";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$j][$i] . " ";
    }
    echo "<br>";
}
echo "COLUMNAS INVERSAS";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 2; $j >= 0; $j--) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "FILAS INVERSAS";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 0; $j < 3; $j++) { 
        echo $datos[$i][$j] . " ";  
    }
    echo "<br>";
}
echo "FILAS ESPEJO";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 2; $j>= 0; $j--) { 
        echo $datos[$i][$j] . " ";  
    }
    echo "<br>";
}
?>