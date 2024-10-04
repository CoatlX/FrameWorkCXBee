
        
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">?</span>
        <input type="text" class="form-control" placeholder="Escribe para buscar usuario..." aria-label="Username" aria-describedby="basic-addon1">
        </div>
       
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
                <?php $x=0;
                 foreach ($dato as $usuario): ?>
                        <tr>
                        <td ><?php echo $dato[$x]->user_name; ?></td> 
                        <td><?php echo $dato[$x]->user_account; ?></td>
                        <td><?php echo $dato[$x]->user_acc_pas; ?></td>
                        <td><?php echo $dato[$x]->depto; ?></td>
                        <td>Acciones </td>
                        </tr>
                        <?php $x+= 1; endforeach; ?>

                </tbody>
            </table>
