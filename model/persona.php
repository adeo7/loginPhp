<?php
class persona{

    public $id;
    public $idRol;
    public $Nombre;
    public $Apellido;
    public $telefono;
    public $correo;
    public $password;
    public $pregunta1;
    public $respuesta1;
    public $pregunta2;
    public $respuesta2;
    public $pregunta3;
    public $respuesta3;



    // public function getId(){
    //     return $this->id;
    // }
    // public function setId($id){
    //     $this->id=$id;
    // }
    function __get($propiedad){
        if(property_exists($this,$propiedad)){
            return $this -> $propiedad;
        }
    }

    function __set($propiedad,$valor){
        if(property_exists($this,$propiedad)){
            $this -> $propiedad = $valor;
        }
    }
//este es el método constructor
    function __construct(
        public $id,
        public $idRol,
        public $Nombre,
        public $Apellido,
        public $telefono,
        public $correo,
        public $password,
        public $pregunta1,
        public $respuesta1,
        public $pregunta2,
        public $respuesta2,
        public $pregunta3,
        public $respuesta3){
            $this->id=$id;
            $this->id=$idRol;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->telefono=$telefono;
            $this->correo=$correo;
            $this->password=$password;
            $this->pregunta1=$pregunta1;
            $this->respuesta1=$respuesta1;
            $this->pregunta2=$pregunta2;
            $this->respuesta2=$respuesta2;
            $this->pregunta3=$pregunta3;
            $this->respuesta3=$respuesta3;
            
    }

}
// palabras claves
// definir, instanciar, asignar, método constructor,
//clase,objeto, POO
//$objetoPersona=new persona(0,"CC","1075270557","CARLOS","JULIO");
//se llama al método set
// $objetoPersona->primerNombre="Carlos";
//se llama al método get
// echo $objetoPersona->primerNombre;
//print_r($objetoPersona);

?>