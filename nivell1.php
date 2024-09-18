<style>
    .signature {
        margin-left: 2em;
        border-left: 4px solid green;
        padding-left: 1em;
        line-height: 1.5;
    }
</style>

<?php
$utilsLocalPath = '../sprint1-php-basics/utils.php';
$url = 'https://raw.githubusercontent.com/Kaylen7/sprint1-php-basics/main/utils.php';

if (file_exists($utilsLocalPath)){
    include $utilsLocalPath;
} 
else {
    $response = file_get_contents($url);
    if (!$response){
        error_log("L'arxiu no existeix: utils.php");

        echo "Malauradament, la pàgina no està disponible.";

        exit;
    }
    
    eval('?>' . $response);
}
echo "<h1>Arrays (Tema 3)</h1>";
apartat(1);

$array = [50, 1, 25, 79, 3];
echo implode(', ', $array);

apartat(2);
$X = array(10, 20, 30, 40, 50, 60);

print_r("Array length: " . count($X) . " items. <br/>");
$new_arr = array_pop($X);
print_r($X);
print("<br/>Array length: " . count($X) . " items.<br/>");

apartat(3);

function containsChar(array $array, string $char): bool{

    foreach($array as $word){
        if (stripos($word, $char)){
            return true;
        }
    }
    return false;
}

$result = containsChar(["hola", "Php", "html"], 'H');
if ($result){
    echo "true";
} else {
    echo "false";
}

apartat(4);

$jo = array(
    'nom' => 'Sara',
    'edat' => 31,
    'email' => 'ochuck.sdm@gmail.com',
    'menjar favorit' => 'maduixes'
);
echo "<div class='signature'>";
foreach($jo as $key => $value){
    echo "<b>" . ucfirst($key) . ":</b> $value<br/>";
}
echo "</div>";

?>