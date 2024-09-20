<style>
    .signature {
        margin-left: 2em;
        border-left: 4px solid green;
        padding-left: 1em;
        line-height: 1.5;
    }
</style>

<?php

define('UTILS_PATH', '../sprint1-php-basics/utils.php');
define('URL', 'https://raw.githubusercontent.com/Kaylen7/sprint1-php-basics/main/utils.php');

if (file_exists(UTILS_PATH)){
    include UTILS_PATH;
} 
else {
    $response = file_get_contents(URL);
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

print_r("<b>Array length:</b> " . count($X) . " items. <br/>");
$new_arr = array_pop($X);
echo("<b>Values of X:</b> " . implode(", ", $X) . " <br/>");
print("<b>Array length:</b> " . count($X) . " items.<br/>");

apartat(3);

function containsChar(array $array, string $char): bool{
    if (strlen($char) > 1){
        echo "⚠️ Resultat fals. La funció <code>containsChar</code> no cerca cadenes de text.<br/>";
        return false;
    }
    foreach($array as $word){
        if (!stripos($word, $char) && $word[0] !== $char){
            return false;
        }
    }
    return true;
}

$result = containsChar(["hola", "Php", "html"], "x");
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