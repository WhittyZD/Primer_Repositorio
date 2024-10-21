<?php
/* CBTIS 89
Programa para checar billetes
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$Personas = array("Programacion"=>'Lupe','arquitectura'=>'Mateo','Programcion'=>'Elva','Albañil'=>'Gina','Contabilidad'=>'Pepito');

echo "** CBTIS 89 **","<br>","<br>";
foreach($Personas as $Carrera=>$losnombres) 
{echo "Nombre: " . $losnombres . " Especialidad: " . $Carrera . "  Edad: 16 años ";
 echo "<br>","<br>";
}