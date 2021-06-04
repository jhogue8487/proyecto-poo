<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Listado de Secciones</h3>
    </div>
    <div class="panel-body">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SECCION</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row  = mysqli_fetch_array($datos)){?>
                <tr>
                    <th><?php echo $row['id'];?></th>    
                    <th><?php echo $row['seccion'];?></th>
                    <th><a class="btn btn-warning" href="<?php echo URL?>secciones/editar/<?php echo $row['id'];?>">Editar</a> 
                        <a class="btn btn-danger" href="<?php echo URL?>secciones/eliminar/<?php echo $row['id'];?>">Eliminar</a> 
                    </th>   
                <tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>