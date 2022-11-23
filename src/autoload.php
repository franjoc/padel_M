<?php


spl_autoload_register(function ($class){

    $ruta=__DIR__."/".$class;
    $ruta.=".php";
    $ruta= str_replace("\\","/", $ruta);

    if (file_exists($ruta)){
        include_once($ruta);
    }

});