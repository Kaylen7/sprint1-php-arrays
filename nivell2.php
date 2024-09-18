<?php

define('UTILS_PATH', '../sprint1-php-basics/utils.php');

if(file_exists(UTILS_PATH)){
    include UTILS_PATH;
} else{
    echo "Uf, falta l'arxiu d'utils.php";
    exit();
} 

apartat(1);

$a_int = [1, 3, 5, 7];
$a_floats = [5.7, 3, 1.8, 7];

echo "<b>Llista d'enters</b>: " . implode(", ", $a_int) . "<br/>";
echo "<b>Llista de decimals i enters</b>: " . implode(", ", $a_floats) . "<br/><br/>";


$intersection = array_intersect($a_int, $a_floats);
$merged = array_merge($a_int, $a_floats);
$mixed = shuffle($merged);
echo "<b>Nombres comuns</b>: " . implode(", ", $intersection) . "<br/>";

echo "<b>Barreja d'arrays</b> " . implode(", ", $merged);

apartat(2);

$alumnes = array(
    'Harry' => [2, 5, 10, 5.5, 7],
    'Ron' => [7, 5, 5, 9.6, 3],
    'Hermione' => [8, 6, 8, 8.9, 10],
    'Draco' => [7, 8, 7, 5, 9],
    'Neville' => [6, 7, 5.9, 6, 7]
);

foreach($alumnes as $key=>$value){
    echo "<b>Notes de $key:</b><br/>" . implode(", ", $value) . "<br/><br/>";
}

echo "<h2>Resultats de classe</h2>";

function obtenirMitjanes(array $alumnes): void{

    $mitjana_global = 0;

    foreach($alumnes as $key=>$value){
        $mitjana_alumne = array_sum($value) / count($value);
        
        echo "<b>Mitjana de $key:</b> $mitjana_alumne <br/>";
        $mitjana_global += $mitjana_alumne;
    }
    echo "<br/><b>Mitjana global:</b> " . ($mitjana_global / count($alumnes));
}

obtenirMitjanes($alumnes);