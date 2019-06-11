<?php

require "config.php";
require "Controllers/Errors.php";

$url = isset($_GET["url"]) ? $_GET["url"]:"Index/index";

$url = explode("/", $url);

$controller = "";

$method = "";

if (isset($url[0])){
    $controller = $url[0];
}

if (isset($url[1])){
    if ($url[1] != ""){
        $method = $url[1];
    }
}

//llamar a todas las clases necesarias para evitar hacer muchos ---require---
spl_autoload_register( function($class){
    if ( file_exists(LBS.$class.".php") ){
        require LBS.$class.".php";
    }
});

$error = new Errors();

$controllersPath = "Controllers/".$controller.".php";

if (file_exists($controllersPath)){
    require $controllersPath;
    $controller = new $controller();

    if (isset($method)){
        if (method_exists($controller, $method)){
            $controller->{$method}();
        }else{
            echo "Método ".$method." no encontrado: ".$error->error();
        }
    }
}else{
    echo "Controlador: ".$controller." no encontrado: ".$error->error();
}

//var_dump($url);
//echo "<br>";
//echo "controlador: <br>".$controller."<br>";
//echo "method: ".$method;
