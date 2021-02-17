<?php 

require_once 'Config/config.php';
require_once 'Core/routes.php';
require_once 'Config/database.php';
require_once 'Controllers/vehiculos.php';


if (isset($_GET['c'])) {
    $controlador = cargarControlador($_GET['c']);

     if ( isset($_GET['a']) ) {
        cargarAccion($controlador, $_GET['a']);

     }else {
          cargarAccion($controlador,ACCION_PPAL);
     }

   

} else {
      $controlador = cargarControlador(CONTROLADOR_PPAL);
//     cargarAccion(CONTROLADOR_PPAL, ACCION_PPAL);
    $acctionTMP = ACCION_PPAL;
    $controlador->$acctionTMP();
}


?>

