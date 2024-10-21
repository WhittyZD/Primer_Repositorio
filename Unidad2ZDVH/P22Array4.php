<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$equipo = array("portero"=>'Courtois','Defensa'=>'Mendy','medio'=>'Luca Modric','Delantero'=>'Mbappe');

echo "**REAL MADRID PLANTILLA**","<br>","<br>";
foreach($equipo as $posicion=>$Jugador) 
{echo "El Jugador " . $Jugador . " es el " . $posicion;
 echo "<br>","<br>";
}