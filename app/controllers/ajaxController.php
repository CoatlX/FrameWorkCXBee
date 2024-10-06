<?php 

 class ajaxController extends Controller
 {
    private $accepted_actions = ['add', 'get', 'load', 'update', 'delete'];
    private $required_params = ['hook', 'action'];
    function __construct(){

        foreach($this->required_params as $param){
            if(!isset($_POST[$param])){
                json_output(json_build(403));
            }
        }
        if(!in_array($_POST['action'], $this-> accepted_actions)){
            json_output(json_build(403));
        }

    }
    function index(){

        //json_output(json_build(403));
    }
    function coatlx_add_movement(){

       try {
        $mov = new movementModel();
        $mov->type = $_POST['type'];
        $mov->description = $_POST['description'];
        $mov->amount = (float)$_POST['amount'];
        
        if(!!$id = $mov->add()){
            json_output(json_build(403, null, 'Error al guardar registro'));
        }
        //Se guardó con éxito
        $mov->id = $id;
        json_output(json_build(201, $mov->one(), 'Movimiento agregado con éxito'));
      

       } catch (Exception $e) {
        json_output(json_build(400 , null, $e->getMessage()));
       }
       //json_output(json_build(200));
    }
    
    function coatlx_get_ad_users(){
  
       try {
            $usuarios = new ad_usersModel();
            $usuario = $usuarios->all();
            
           $data = get_module('ad_users', $usuario);
           
           
           } catch (Exception $e) {
            json_output(json_build(400 , $e->getMessage()));
           }
           //json_output(json_build(200));
           json_output(json_build(200 , $data));
           
    }
    function coatlx_delete_movements(){

        try {
            $mov = new movementModel();
            $mov->id = $_POST['id'];
            if(!$mov->delete()){
                json_output(json_build(400, null, 'Hubo un error'));
            }
                json_output(json_build(201, $mov->one(), 'Borrado con éxito'));
           
           } catch (Exception $e) {
                json_output(json_build(400, null, $e->getMessage()));
           }
           //json_output(json_build(200));
       
    }

       function coatlx_update_movement(){

        try {
            $movement = new movementModel();
            $movement->id = $_POST['id'];
            $mov = $movement->one();
            if(!$mov){
                json_output(json_build(400 , null, 'No existe el movimiento'));
            }

            $data = get_module('updateForm', $mov);
            json_output(json_build(200 , $data));
           
           } catch (Exception $e) {
            json_output(json_build(400 , $e->getMessage()));
           }
           //json_output(json_build(200));
       
    }

   function coatlx_save_movement(){

        try {
         $mov = new movementModel();

         $mov->id = $_POST['id'];
         $mov->type = $_POST['type'];
         $mov->description = $_POST['description'];
         $mov->amount = (float)$_POST['amount'];
         
         if(!!$mov->update()){
             json_output(json_build(400, null, 'Error al guardar los cambios'));
         }
         //Se guardó con éxito
         json_output(json_build(200, $mov->one(), 'Cambio actualizado con éxito'));
       
 
        } catch (Exception $e) {
         json_output(json_build(400 , null, $e->getMessage()));
        }
        //json_output(json_build(200));
     }
     function coatlx_save_options(){
            $options = 
            [
            'use_taxes' => $_POST['use_taxes'],
            'taxes' => (float)$_POST['taxes'],
            'coin' => $_POST['coin']
            ];
        foreach ($options as $k => $option){
        try {

         if($id = optionModel::save($k, $option)){
             json_output(json_build(400, null, sprintf('Error al guardar la opción:  %s', $k)));
         }
         //Se guardó con éxito
         
        } catch (Exception $e) {
         json_output(json_build(400 , null, $e->getMessage()));
        }    
        }    
        json_output(json_build(200, null, 'Opciones actualizadas con éxito'));
        //json_output(json_build(200));
     }


     
 
    }
