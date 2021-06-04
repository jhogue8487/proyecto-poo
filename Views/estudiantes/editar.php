<?php 
  $secciones=$estudiante->listarSecciones();
?>
<div class="jumbotron">
  <div class="panel panel-default">
    <div class="panel-body">
        <img class="img-responsive" src="<?php echo URL?>Views/template/imagenes/avatars/<?php echo $datos['imagen'];?>">
    </div>
  </div>
  <div class="abs-center">
    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend><h3>Editar Estudiante</h3></legend>
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
        <input type="text" class="form-control" name="edad" value="<?php echo $datos['edad'];?>" required > 
      </div>
      <div class="form-group">
        <label>Promedio</label>
        <input type="text" class="form-control" name="promedio" value="<?php echo $datos['promedio'];?>" required>
      </div>
      <div class="form-group">
        <label for="exampleSelect1">Seleccione su seccion</label>      
        <select class="form-control" name="id_seccion" require>
          <?php 
            $seleccionado="";
            $id_seccionbd=$datos['id_seccion'];
            while($row=mysqli_fetch_array($secciones)) {
              if($row['id'] == $id_seccionbd) $seleccionado=" selected ";
              else $seleccionado="";
          ?>      
              <option value="<?php echo $row['id'];?>" <?php echo $seleccionado;?>  ><?php echo $row['seccion'];?></option>
          <?php } ?>
        </select>
      </div>
      <input type="text" name="id" value="<?php echo $datos['id'];?>">
      <button type="submit" class="btn btn-success">Editar</button>
      <button type="reset" class="btn btn-warning">Borrar</button>
    </fieldset>
    </form>
  </div>
</div>