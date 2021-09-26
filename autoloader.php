<?php

function autoloader($clase)
{
$dir = ["clases", "contracts"];
    $fileExist = false;
    foreach ($dir as $directorio) {
      $fichero = "$directorio/{$clase}.php";
    if (file_exists($fichero)) {
        require_once $fichero;
        $fileExist = true;
        }  
    }
    if (!$fileExist) {
        die("El fichero de clase {$clase}.php no existe");
    }

}
spl_autoload_register("autoloader");
?>