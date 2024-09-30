<?php 

 
function index(){
   
   $data =
   [
       //'title' => 'CoatlX Framework',
       'bg' => 'dark'
   ];
   View::render('usersacd', $data);
/*   print_r($data);
   $data = to_Object($data);
   echo $data->id;*/
   

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