<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Listado de Estudiantes</h3>
    </div>
    <div class="panel-body">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Seccion</th>
                <th scope="col">Edad</th>
                <th scope="col">Promedio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row  = mysqli_fetch_array($datos)){?>
            <tr class="table-secondary">
                <th scope="row"><img class="imagen-avatar" src="<?php echo URL;?>Views/template/imagenes/avatars/<?php echo $row['imagen'];?>" ></th>
                <td>
                    <a href="<?php echo URL . "estudiantes/ver/". $row['id'];?>">
                        <?php echo $row['nombres'];?>
                    </a>
                </td>
                <td><?php echo $row['apellidos'];?></td>
                <td><?php echo $row['seccion'];?></td>
                <td><?php echo $row['edad'];?></td>
                <td><?php echo $row['promedio'];?></td>
                <td>
                    <a class="btn btn-warning" href="<?php echo URL?>estudiantes/editar/<?php echo $row['id'];?>">
                        Editar
                    </a>
                    <a class="btn btn-danger" href="<?php echo URL?>estudiantes/eliminar/<?php echo $row['id'];?>">
                        Eliminar
                    </a>
                </td> 
            <tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</div>