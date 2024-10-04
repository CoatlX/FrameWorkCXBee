<?php //Primer archivo para configurar del Framework
//Contiene la configuración general de FW, como definición de variables

//Saber si estamos remotamente o local al servidor
define('IS_LOCAL',in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1','::']));
//Decifinir uso horario
date_default_timezone_set('America/Mexico_City');
//Idioma
define('LANG','es');
//Ruta base del proyecto con el ternario, si el local usa /Framework.../ si el EL BASEPATH EN PRODUCCIÓN
define('BASEPATH', IS_LOCAL ? '/Oz_ACD_MVC/' : '___EL BASEPATH EN PRODUCCIÓN___');
//Sal del sistema, pueder servir para agregar una capa de seguridad por ejemplo en los PASS, le 
//agrega un string a la contraseña
// Pass: 123, con la sal, quedaría 123CoatlX54$
define('AUTH_SALT', 'CoatlX54$');
//Puerto y URL
define('PORT',8848);
define('URL',IS_LOCAL ? 'http://127.0.0.1:'. PORT . BASEPATH : '___URL EN PRODUCCIÖN___');
//Rutas de directorios y archivos
define('DS',DIRECTORY_SEPARATOR);//DS = DIRECTORY SEPARATOR, agrega slashes
define('ROOT', getcwd().DS);//Obtiene la ruta

define('APP', ROOT.'app'.DS);//Ruta  /app/
define('CLASSES', APP.'classes'.DS);//Ruta  /app/classes/
define('CONFIG', APP.'config'.DS);//Ruta  /app/config/
define('CONTROLLERS', APP.'controllers'.DS);//Ruta  /app/controllers/
define('FUNCTIONS', APP.'functions'.DS);//Ruta  /app/functions/
define('MODELS', APP.'models'.DS);//Ruta  /app/models/

define('TEMPLATES', ROOT.'templates'.DS);//Ruta  /templates/
define('INCLUDES', TEMPLATES.'includes'.DS);//Ruta  /templates/includes/
define('MODULES', TEMPLATES.'modules'.DS);//Ruta  /templates/modules/
define('VIEWS', TEMPLATES.'views'.DS);//Ruta  /templates/views/

//Las siguientes son rutas URL para poder mostrarlas y la constante DS no dará "\"
//Se debe de agregar manual o "hardcodeada"
define('ASSETS',URL.'assets/');//Ruta  /assets/
define('CSS', ASSETS.'css/');//Ruta  /assets/css/
define('FAVICON', ASSETS.'favicon/');//Ruta  /assets/favicon/
define('FONTS', ASSETS.'fonts/');//Ruta  /assets/fonts/
define('IMAGES', ASSETS.'images/');//Ruta  /assets/images/
define('JS', ASSETS.'js/');//Ruta  /assets/js/
define('PLUGINS', ASSETS.'plugins/');//Ruta  /assets/plugins/
define('UPLOADS', ASSETS.'uploads/');//Ruta  /assets/uploads/
//Para cargar una imagen sólo haríamos IMAGES.'imagen.jpg';

/*Credenciales de la base de datos
Set para conexión local o de desarrollo*/
define('LocalDB_ENGINE' , 'mysql');
define('LocalDB_HOST' , 'localhost:3309');
define('LocalDB_NAME' , 'framework_db');
define('LocalDB_USER' , 'root');
define('LocalDB_PASS' , '');
define('LocalDB_CHARSET' , 'utf8');//Codificación de caracteres

//Set para conexión local o de desarrollo
define('DB_ENGINE' , 'mysql');
define('DB_HOST' , 'localhost:3309');
define('DB_NAME' , '___REMOTE DB___');
define('DB_USER' , '___REMOTE DB___');
define('DB_PASS' , '___REMOTE DB___');
define('DB_CHARSET' , '___REMOTE CHARSET___');//Codificación de caracteres

//Controlador por defecto / Método por defecto / Controlador de errores para el Uri
define('DEFAULT_CONTROLLER','home');
define('DEFAULT_METHOD','index');
define('DEFAULT_ERROR_CONTROLLER','error');
