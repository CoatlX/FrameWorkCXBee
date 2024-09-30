<?php
//Clase de ejemplo de POO
class Persona{

    //private -> no puede ser utilizada en ningún otro lado más que dentro de la clase dueña.
    //protected -> puede ser utilizada por la clase dueña e hijas, pero no por fuera.
    //public -> puede ser utilizada por fuera de la clase, dentro de la clase dueña e hijas.
    //A la vuelta probar paso a paso uno a uno a ver que falla y poner en el foro
    private $posibles_generos = ['m','f'];
    private $posibles_nombres_m = ['Alejandro', 'José', 'Luis', 'Miguel'];    
    private $posibles_nombres_f = ['Bárbara', 'Elizabeth', 'Alejandra', 'Ana'];
    private $posibles_apellidos = ['López', 'Estrada', 'Gómez', 'Salinas'];    

    public $persona;
    public $nombres;
    public $apellidos;
    public $genero;

    public function __construct($nombre = null){
        echo "Soy el constructor de Persona...<br>";
        if($nombre !== null){
            echo sprintf("Pasando el nombre %s dentro del constructor de nuestra clase...<br>",$nombre);
        }
    }

    //Método para crear una persona de forma aleatoria
    public function crear_persona(){
        $this->genero = $this->posibles_generos[rand(0,1)];
        $this->nombres = $this->obtener_nombre();      
        $this->apellidos = $this->obtener_apellido();        
        $this->persona = $this->nombres." ".$this->apellidos;      
        return $this->persona . '<br>';  

    }

    //Método para seleccionar un nombre del array
    private function obtener_nombre(){ //private -> Solo para ser utilizado dentro de la misma clase.
        if($this->genero === 'm'){
            return $this->posibles_nombres_m [rand(0, count($this->posibles_nombres_m)-1)];          
        }
        return $this->posibles_nombres_f[rand(0, count($this->posibles_nombres_f)-1)];      
    }

    //Método para seleccionar un apellido del array
    private function obtener_apellido(){  
        return $this->posibles_apellidos[rand(0, count($this->posibles_apellidos)-1)];        
    }

    //Método estático para crear una persona
    public static function crear(){
        $crearPersona = new self();
        return $crearPersona->crear_persona();
    }
}
