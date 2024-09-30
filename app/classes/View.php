<?php 
class View{
    public static function render($view, $data=[]){
        //Convetir el array asociativo en objeto
        $d = to_Object( $data );//$data  en array asociativos y $d en objetos
        
        if (!is_file(VIEWS.CONTROLLER.DS.$view.'View.php')){
            die(sprintf('No existe la vista %sView en el carpeta %s' , $view, CONTROLLER));
        }
        require_once VIEWS.CONTROLLER.DS.$view.'View.php';
        exit();
    }
}

