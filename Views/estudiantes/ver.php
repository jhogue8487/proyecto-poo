<table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Perfil del Estudiante</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-secondary">
                <th scope="row">
                  <img class="imagen-auto" src="<?php echo URL?>Views/template/imagenes/avatars/<?php echo $datos['imagen'];?>">
                </th>
                <td>  
                  <div class="abs-center">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend><h3>Datos del Estudiante</h3></legend>
                      <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control" name="nombres" value="<?php echo $datos['nombres'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" value="<?php echo $datos['apellidos'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control"  value="<?php echo $datos['edad'];?>" required > 
                      </div>
                      <div class="form-group">
                        <label>Promedio</label>
                        <input type="text" class="form-control" value="<?php echo $datos['promedio'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Seccion</label>
                        <input type="text" class="form-control" value="<?php echo $datos['seccion'];?>" required>
                      </div>
                      <div class="form-group">
                        <label>Fecha Registro</label>
                        <input type="text" class="form-control" value="<?php echo $datos['fecha'];?>" required>
                      </div>
                    </fieldset>
                    </form>
                </div>
              </div>
                </td>
              </tr>
        </tbody>
    </table>



  