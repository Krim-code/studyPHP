<?php 
spl_autoload_register('myAutoLoader');

function myAutoloader($className){
    $path = 'classes/';
    $extension = '.class.php';
    $fullPath = $path. $className. $extension;

    if(file_exists($fullPath)==false){
        return false;
    }

    include_once $fullPath;
}
?>