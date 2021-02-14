<?php 

function cargarControlador($controlador){
   
    $nombreControlador = ucwords($controlador).'Controller';  //nombre de la clase controlador
    $archivoControlador = 'Controllers/'.$controlador.'.php'; //nombre del archivo
    if ( !is_file($archivoControlador) ) {
        $archivoControlador = 'Controllers/'. CONTROLADOR_PPAL .'.php';
    }
   // echo $archivoControlador;
    require_once $archivoControlador;

    //instancio la clase 
    $control = new $nombreControlador();
    return $control;

}

function cargarAccion($controller, $accion){
    if ( isset($accion) && method_exists($controller,$accion) ) {
        $controller->$accion();
    }else {
        $controller->ACCION_PPAL();
    }
}











?>