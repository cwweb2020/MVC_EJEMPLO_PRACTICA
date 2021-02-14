<?php 

class VehiculosModel{
    private $db;
    private $vehiculos;

    public function __construct()
    {
        $this->db =  Conectar::conexion();
        $this->vehiculos = [];
      
    }

    public function get_vehiculo()
    {
        $sql = "SELECT * FROM autos";
        $result = $this->db->query($sql);
        
        while ( $row  = $result->fetch_assoc() ) {
            $this->vehiculos[] = $row;
        }
        return $this->vehiculos;
    }

    public function agregar($marca,$modelo,$placa,$year,$color){
           $queryIn =" INSERT INTO `autos`(`id`, `placa`, `marca`, `modelo`, `year`, `color`) VALUES ($marca,$modelo,$placa,$year,$color)";
          
          $result = $this->db->query($queryIn);
    }
   
}
// 














