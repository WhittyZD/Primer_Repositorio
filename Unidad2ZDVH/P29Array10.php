<?php
/* CBTIS 89
Programa CREA UN NOMBRE CON 8 PERSONAS E INDIDCAR SI EXISTE EL NOMBRE O NO
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$nombres = ["Juan", "Monica", "gina", "Elva", "Lupe", "Ana", "Pepito", "Mama coco"];
$nombre = "Mama coco";
foreach ($nombres as $n) {
    if ($n === $nombre) {
        echo "Este nombre si existe";
       
    }
}

?>