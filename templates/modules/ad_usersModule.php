        <?php
try {
    $db = conectarDB();
    $sql = "SELECT * FROM tbl_ad_pass ORDER BY user_name ASC";
    $sentencia = $db->prepare($sql);
    $sentencia->execute();
    $usuarios = $sentencia->fetchAll();
    //var_dump($usuarios); Muestra el array de usuarios
 
 } catch (Exception $e) {
     $_SESSION["error"] = $e->getMessage();
    // header("Location: index.php?error=true");
     die;
 }
 ?>

        <table class="table table-striped table-hover broder-2">
                <thead>
                    <tr>
                        <th>Nombre usuario</th>
                        <th>Cuenta</th>
                        <th>Contraseña</th>
                        <th>Departamento</th>
                        <th>Acciones </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($usuarios as $usuario):?>
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
                </tbody>
            </table>
