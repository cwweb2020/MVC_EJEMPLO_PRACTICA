<?php 

class VehiculosController{


    public function __construct()
    {
        require_once './Models/VehiculosModel.php';
      
    }

    public function index()
    {
      
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
    public function guarda()
    {
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $placa = $_POST['placa'];
        $year = $_POST['year'];
        $color = $_POST['color'];

        echo 'la marca es '.$marca .' y el año es ' .$year;

        $vehiculos = new VehiculosModel();
        $vehiculos->agregar($marca, $modelo, $placa, $year, $color);
        
        $data ['titulo'] = 'Vehículos';
        $this->index(); 

    }


}

?>