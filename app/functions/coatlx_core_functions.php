<?php 
function en_core(){
    return 'ESTOY DENTRO DE CORE FUNCTIONS';
}

function to_object($array){

    return json_decode(json_encode($array));
    //json_encode($array); Convierte un arreglo en formato json
    //json_decode(json_encode($array)); convierte un json en Objeto

}
function get_sitename(){

    return 'CoatlX Framework';
}

function now(){//Fecha actual
    return date('Y-m-d H-i-s');
}
function json_output($json, $die=true){
    header('Access-Control-Allow-Origin: *');//Acceso sin restricción
    header('Content-type: application/json;charset=utf-8');//Decirle que la información va a ser de tipo json

    if(is_array($json)){
        $json = json_encode($json);//SI es un arreglo, lo convierte a json encode o string
    }
    echo $json;
    if($die){//Si está setteado $die a true, se termina y regresa true
        die;
    }
return true;

}


function json_build($status=200, $data= null, $msg = ''){
    if(empty($msg) || $msg==''){//Si el mensaje está vacío entra al switch y determina dependiendo el código que reciba
        switch($status){
            case 200:
                $msg = 'OK';
                break;
            case 201:
                $msg = 'Created';
                break;
            case 400:
                $msg = 'Invalid request';
                break;
            case 403:
                $msg = 'Access denied';
                break;
            case 404:
                $msg = 'Not found';
                break;
            case 500:
                $msg = 'Internal Server Error';
                break;
            case 550:
                $msg = 'Premission denied';
                break;
            default:
                break;
        }
    }
    http_response_code($status);

    $json=
    [
        'status' => $status,
        'error' => false,
        'msg' => $msg,
        'data' => $data,
    ];

    $error_codes = [400,403,404,405,500];

    if(in_array($status, $error_codes)){
        $json['error']= true;
    }
    return json_encode($json);//Regresa nuestro json formateado
    }

    /**
     * Obtener el nombre del módulo
     * @param string $view - Nombre del módulo
     * @param array $data - arreglo para
     */
function get_module($view, $data = [] ){
    //$view es el nombre del archivo y dta es la info que vamos a cargar
    $file_to_include = MODULES.$view.'Module.php'; ///templates/modules/$view+Module.php
   
    $output = '';//Almacena todo el string que se va a almacenar
    //Por si queremos trabajar con objeto
    $d = to_object($data);


    if(!is_file($file_to_include)){//Valida si existe el archivo
        return false;
    }
    ob_start(); //Almacena en el buffer del sitio
    require_once $file_to_include;
    $output = ob_get_clean(); //Todo el ouput se guarda como string y se regresa
    return $output;
}
/**
 * Formateo de moneda a 2 decimales
 * @param float $amount - Cantidad de moneda
 * @param string $symbol - símbolo de dólar
 */
function money($amount, $symbol='$'){

    return $symbol.' '.number_format($amount, 2,'.',',');
}

 function get_option($option){
    return optionModel::search($option);
}

