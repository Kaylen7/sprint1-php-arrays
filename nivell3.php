<?php

define('UTILS_PATH', '../sprint1-php-basics/utils.php');

if(file_exists(UTILS_PATH)){
    include UTILS_PATH;
} else{
    echo "Uf, falta l'arxiu d'utils.php";
    exit();
} 

apartat(1);

$enters = [5, 6, 2, 3];
echo "Array d'enters inicial:<br/>" . implode(", ", $enters) . "<br/>";

$map_result = array_map(fn($a) => $a**3, $enters);

echo "<br/>Cada nombre al cub:<br/>" . implode(", ", $map_result);

apartat(2);
$strings = ["This is a string", "Sara", "PHP"];
echo "Array d'strings:<br/>" . implode(", ", $strings) . "<br/>";
$filter_result = array_filter($strings, fn($a) => (strlen($a)%2 === 0));
echo "<br/>Només parells:<br/>" . implode(", ", $filter_result);
echo "<h3>Test</h3>";

foreach($filter_result as $str){
    echo "'" . $str . "' té " . strlen($str) . " caracters.</br>";
}

apartat(3);
echo "Array d'enters:<br/>" . implode(", ", $enters) . "<br/><br/>";

$prime_nums = array_filter($enters, fn($num) => gmp_prob_prime($num) === 2);
echo "Dels quals nombres primers: " . implode(", ", $prime_nums) . "<br/>";
$reduce_result = array_reduce($prime_nums, fn($a, $b) => $a + $b);
echo "Suma: $reduce_result";