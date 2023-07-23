<?php
class conexion{
private $userName="root";
private $password="";
private $serverName="localhost";
private $databaseName="login";
private $conexion="";

public function getConexion(){
    try {
        $this->conexion=new PDO("mysql:host=$this->serverName;dbname=$this->databaseName", $this->userName,$this->password);
       // echo"se establecio conecxion";
        return $this->conexion;
    } catch (PDOException $e) {
        //echo "error en la conecxion: ".$e->getMessage();
        return null;
    }
}
public function closeConexion(){
    $this->conexion=null;
  //  echo " se cerro la conexion";
}

}
/*$objectoConexion=new conexion();
$objectoConexion->getConexion();
$objectoConexion->closeConexion();*/

?>