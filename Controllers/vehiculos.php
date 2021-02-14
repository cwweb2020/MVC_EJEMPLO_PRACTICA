<?php 

class VehiculosController{

    public function index()
    {
        require_once 'Models/VehiculosModel.php';
        $vehiculos = new VehiculosModel();
        $data ['titulo'] = 'Vehículos';
        $data ['vehiculos']= $vehiculos->get_vehiculo();
        require_once 'Views/Vehiculos/vehiculos.php';
        return $data;
      
        
    }
    public function nuevo()
    {
        $data ['titulo'] = 'Vehículos';
        require_once 'Views/Vehiculos/vehiculos_nuevo.php';

    }


}

?>