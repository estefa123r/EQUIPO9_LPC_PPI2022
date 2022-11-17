<?php
// conexion base de datos 

class conexion{
    private $servidor="sql207.epizy.com";
    private $usuario="epiz_33009309";
    private $contrasenia="0PyNAq6VErV";
    private $conexion;

    public function __construct(){

    try{
        $this->conexion= new PDO("mysql:host=$this->servidor;dbname=epiz_33009309_biblioteca",$this->usuario,$this->contrasenia);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch ( PDOException $e){
         return "falla en la conexion".$e;
        
        }

    }

    public function ejecutar($sql){  // insertar datos, eliminar datos, actualizar datos 
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function getRecFrmQry($query)
    {
        //echo $query;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function consultar($sql){  // visualizar datos 
      $sentencia=$this->conexion->prepare($sql);
      $sentencia->execute();
      return $sentencia->fetchAll();
    } 

    
}

?>