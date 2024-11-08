<?php
/* Velazquez Hernandez Zoe Dylan
P39Array19 programa array que almacena informacion de 6 personas y los contabiliza depende de su edad
CBTIS89 
Programacion 3ºA
*/

$Nombre = array("Neymar","Pepe","Messi","Arda Güiler","Mbappe","Cristiano Ronaldo");
$edad = array(30, 30, 100, 17, 25, 39);  

$grupo1 = array();  
$grupo2 = array(); 
$grupo3 = array();  


for ($i = 0; $i < count($edad); $i++) {
    if ($edad[$i] < 18) {
        $grupo1[] = 1;  
        $grupo2[] = 0;
        $grupo3[] = 0;
    } elseif ($edad[$i] >= 18 && $edad[$i] <= 49) {
        $grupo1[] = 0;
        $grupo2[] = 1;  
        $grupo3[] = 0;
    } else {
        $grupo1[] = 0;
        $grupo2[] = 0;
        $grupo3[] = 1; 
    }
}


echo "Nombre\tEdad\tGrupo1\tGrupo2\tGrupo3\n";
for ($i = 0; $i < count($Nombre); $i++) {
    echo $Nombre[$i] . "\t" . $edad[$i] . "\t" . $grupo1[$i] . "\t" . $grupo2[$i] . "\t" . $grupo3[$i] . "\n";
}
?>
