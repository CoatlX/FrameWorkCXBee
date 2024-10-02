<?php 
class homeController extends Controller{
    function __construct()
    {
        
    }

    function index(){
   
            $data =
            [
                //'title' => 'CoatlX Framework',
                'bg' => 'dark'
            ];
            View::render('coatlx', $data);
         /*   print_r($data);
            $data = to_Object($data);
            echo $data->id;*/
           // echo CONTROLLER ;
           //echo METHOS; // para comprobar que nos den
    }
    function gastos(){
        $data =
            [
                //'title' => 'CoatlX',
                'bg' => 'd'
            ];

            View::render('gastos', $data);
       // Redirect::to('home');
    }

   
}