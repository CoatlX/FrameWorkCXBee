<?php //Encargado que se ejecute todo, que todo esté conectado y que trabaje bien

class CoatlX{

    //Propiedades del Framework
    private $framework = 'CoatlX FrameWork';
    private $version = '1.0.0';
    private $uri = [];

    //Función principal que se ejecuta al instanciar nuestra clase
    function __construct()
    {
      
       $this->init();
    }
    /**Método para ejecutar cada método de forma consecuente
     * @return void
     */
        private function init(){
        $this->init_load_config();
       // $this->init_session();
        $this->init_load_functions();
        $this->init_autoload();
        $this->init_csrf();
        $this->dispatch();
        
        
    }
    /**Método para iniciar la sesión al sistema 
     * @return void
    */
private function init_session()  {
//Valida si la sesión no se ha iniciado
    if (session_start()==PHP_SESSION_NONE){
        session_start();
    }
}
/**
 * Método para cargar la configuración del sistema
 */
private function init_load_config(){
    $file = 'coatlx_config.php';
    if(!is_file('app/config/'.$file)){
        die(sprintf('El archivo %s no se encuentra, es requerido para que %s funcione.',
        $file,$this->framework));
    }
    require_once 'app/config/'.$file;
}
/**
 * Método para cargar las funciones del sistema y del usuario
 */
 //Desde aquí ya podemos usar las variables de ruta porque ya se cargó el archivo  de configuración
 //coatlx_config.php desde la función anterior
private function init_load_functions(){
    //Carga el archivo de funciones core
    $file = 'coatlx_core_functions.php';
    if(!is_file(FUNCTIONS.$file)){
        die(sprintf('El archivo %s no se encuentra, es requerido para que %s funcione.',
        $file,$this->framework));
    }
    require_once FUNCTIONS.$file;
}
/**
 * Requisita los demás archivos de classes de forma automática
 */
     private function init_autoload(){
        require_once CLASSES.'Autoloader.php';
        Autolaoder::init();
       // require_once CLASSES.'View.php';
        //require_once CLASSES.'Redirect.php';
        
      /*  require_once CLASSES.'Db.php';
        require_once CLASSES.'Model.php';
        
        require_once CLASSES.'Controller.php';
        
      /*  require_once CONTROLLERS.DEFAULT_CONTROLLER.'Controller.php';  // config/controllers/homeController.php
        require_once CONTROLLERS.DEFAULT_ERROR_CONTROLLER.'Controller.php'; // config/controllers/errorController.php
        require_once CLASSES.'View.php';*/
        
        //return;
    }

    /**
     * Método para filtrar y descomponer los elementos  de nuestra url y uri
     * @return void
     * No le entendí, repasar lección jeje
     */
    private function filter_url(){
        if(isset($_GET['uri'])){ 
            $this->uri = $_GET['uri'];
            $this->uri = rtrim($this->uri, '/');//Quita el "/" de la dirección
            $this->uri = filter_var($this->uri, FILTER_SANITIZE_URL); //Limpia la URL
            $this->uri = explode('/' , strtolower($this->uri));
            return $this->uri;
        }       
    }

    /**
     * Método para crear un nuevo token de la sesión del usuario
     * @return void
     */
    private function init_csrf(){
        $csrf = new Csrf();
        
    }
    /**
     * Método para cargar de forma automática el contolador solicitado por el usuario
     * su método y pasar parámetros a él
     * @return void
     */
    private function dispatch(){
        //Filtrar URL y separar la URI
        $this->filter_url();
        //Controlador
        /*Necesitamos saber si se está pasando el nombre de un controlador en nuestro Uri
        $this->uri[0] es el controlador en cuestión*/
        //
        if(isset($this->uri[0])){
           $current_controller = $this->uri[0];
           unset($this->uri[0]);
        }else{
            $current_controller =DEFAULT_CONTROLLER;
        }
       /* print_r($this->uri);
        echo $current_controller;*/
        
        //Ejecución del controlador
        //Verificamos si existe una clase con el controlador solicitado
        $controller = $current_controller.'Controller';
        if (!class_exists( $controller)){
            $controller = DEFAULT_ERROR_CONTROLLER.'Controller';
            $current_controller = 'error'; //para que el controller sea error
        }
        //////////////////////////
        //Ejecución del método solicitado
        if(isset($this->uri[1])){
            $method = str_replace('-','_',$this->uri[1]);

            if(!method_exists($controller, $method)){
                $controller = DEFAULT_ERROR_CONTROLLER.'Controller';
                $current_method= DEFAULT_METHOD;
        }else{
            $current_method = $method;
         }
         unset($this->uri[1]);
        } else{
        $current_method = DEFAULT_METHOD;//Index
        }
         ////////////////////////////////////////////////////////////////////////////
         //Creando constantes para utilizar más adelante
         define('CONTROLLER',$current_controller);
         define('METHOD',$current_method);
        //Ejecutando controlador y método según se haga la petición
        $controller = new $controller;
        //////////////////////////////////////
        //Ejecutando los parámetros del URI
        $params = array_values(empty($this->uri) ? [] : $this->uri);

        if(empty($params)){
            call_user_func([$controller, $current_method]);
        }else{
            call_user_func_array([$controller, $current_method], $params);
        }
        return;
    }
    /**
     *Método que carga todo
     * @return void
     */
    public static function fuaa(){
    $coatlx = new self();
    return;

    }
}
