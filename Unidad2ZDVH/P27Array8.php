<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
//declaramos
$numeros = array();

//se guardan los numeros el 1 al 100
for($i =1; $i  <=100; $i++)
     {$numeros[]=$i;}
  //el ciclo que recorre todo el arreglo
 foreach ($numeros as $valor)
   { //se determina si el numero es par
     if ($valor % 2 ==0)
     { //se imprime el numero
     	echo $valor . " ";}
     	echo"<br";
     else 
      {echo $valor . " ";}
    }


?>