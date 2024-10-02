<?php 
require_once INCLUDES.'inc_header.php';
require_once FUNCTIONS.'ad_users_functions.php';

 ?>

  <h1>Lista de usuarios y contraseñas</h1> 
  
  <div class="container py-5">
   <div class="row">
      <div class="col 12 col-md-12 col-lg-12">
      <button id="btnget">Dale</button>
        <div class="users_ad_acd">
            
               <!--  <a href="" class="btn btn-primary float-end" id = "btnget">Agregar equipo</a>  
                    -->
               
                  
                
                    <!--  Se carga con AJAX
                            -->
                   <!--  <?php foreach ($usuarios as $usuario):?>
                        <tr>
                            <td><?php echo $usuario["user_name"]; ?> </td>
                            <td><?php echo $usuario["user_account"]; ?> </td>
                            <td><?php echo $usuario["user_acc_pas"]; ?> </td>
                            <td><?php echo $usuario["depto"]; ?> </td>
                            <td><a class = "btn btn-success btn-sm"
                            href="<?php echo sprintf("editarUsuariosAD.php?id=%s",$usuario["ID"]); ?>">Editar</a>
                            <a class = "btn btn-danger btn-sm"
                            href="<?php echo sprintf("borrarUsuarioAD.php?id=%s",$usuario["ID"]); ?>">Borrar</a> 
                        </td>

                        </tr>
                        <?php endforeach; ?>     
                        --> 
                
            </div>    
      </div>
   </div>
</div>
<?php 

  require_once INCLUDES.'inc_footer.php';