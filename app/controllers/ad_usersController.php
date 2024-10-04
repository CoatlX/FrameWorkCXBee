<?php 

class ad_usersController extends Controller{
    function __construct()
    {
       //$db::connect();
    }

    function index(){
    
        $data =
            [
                'title' => 'Lista de usuarios Acueducto',
                'bg' => 'darkd'

            ];
        View::render('ad_users', $data);
    }


}