<?php
/* Velazquez Hernandez Zoe Dylan
P39Array19 programa array que almacena informacion de 6 personas y los contabiliza depende de su edad
CBTIS89 
Programacion 3ºA
*/

$Nombre = array("Neymar", "Pepe", "Peppsi acabado", "Arda Güiler", "Mbappe", "Cristiano Ronaldo");
$edad = array(30, 30, 100, 17, 25, 39);  

$grupo1 = array();  
$grupo2 = array(); 
$grupo3 = array();  

for ($i = 0; $i < count($edad); $i++) {
    Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

for ($i = 0; $i < count($Edad); $i++) {
    if ($Edad[$i] < 18) {
        $Grupo1[] = 1;
        $Grupo2[] = 0;
        $Grupo3[] = 0;
    } elseif ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
        $Grupo1[] = 0;
        $Grupo2[] = 1;
        $Grupo3[] = 0;
    } else {
        $Grupo1[] = 0;
        $Grupo2[] = 0;
        $Grupo3[] = 1;
    }
}


echo "Nombre\tEdad\tGrupo1\tGrupo2\tGrupo3\n";
for ($i = 0; $i < count($Nombre); $i++) {
    echo $Nombre[$i] . "\t" . $Edad[$i] . "\t" . $Grupo1[$i] . "\t" . $Grupo2[$i] . "\t" . $Grupo3[$i] . "\n";
}
?>