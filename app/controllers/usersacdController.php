<?php 

class usersacdController extends Controller{
    function __construct()
    {

    }

    function index(){
    
        $data =
            [
                'title' => 'Página no encontrada',
                'bg' => 'dark'

            ];
        View::render('usersacd', $data);
    }


}