<?php 

class ad_usersController extends Controller{
    function __construct()
    {
    $db = new Db;
    //$db::connect();
    }

    function index(){
    
        $data =
            [
                'title' => 'Lista de usuarios Acueducto',
                'bg' => 'darsk'

            ];
        View::render('ad_users', $data);
    }


}