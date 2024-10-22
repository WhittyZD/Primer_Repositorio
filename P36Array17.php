<?php
/* CBTIS 89
accesorios practica para examen
Velazquez Hernandez Zoe Dylan
3°A Programación Matutino
*/
$array_accesorios = array("Pantalones = 120$", "Camisa = 300$","Pantuflas = 400$","Lentes = 1200$","Ajos = 5$");
sort($array_accesorios);
echo"accesorios ordenados de forma acendente <br>";
for ($i=0;$i<count($array_accesorios); $i++) {
    echo $array_accesorios[$i] . "<br>";}
array_push($array_accesorios, "Gorra = 200$");
echo "<br> Se agrega un accesorio y se eliminan 2 <br>";
unset($array_accesorios[0]); // Elimina el primer accesorio no olvides poner parentesis
unset($array_accesorios[1]); // Elimina el segundo accesorio no olvides poner parentesis
rsort($array_accesorios);
for ($i = 0; $i < count($array_accesorios); $i++) {
    echo $array_accesorios[$i] . "<br>";
}
    echo "<br>Array ordenado en descendente:<br>";
for ($i=0;$i<count($array_accesorios); $i++) {
    echo $array_accesorios[$i] . "<br>";

}
?>