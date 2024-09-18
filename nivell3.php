<?php

define('UTILS_PATH', '../sprint1-php-basics/utils.php');

if(file_exists(UTILS_PATH)){
    include UTILS_PATH;
} else{
    echo "Uf, falta l'arxiu d'utils.php";
    exit();
} 

apartat(1);
