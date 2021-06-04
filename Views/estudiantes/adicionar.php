<div class="container">
  <div class="abs-center">
    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend><h3>Adicionar Estudiante</h3></legend>
      <div class="form-group">
        <label>Nombres</label>
        <input type="text" class="form-control" name="nombres" placeholder="Introduzca sus nombres" required>
      </div>
      <div class="form-group">
        <label>Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Introduzca sus apellidos" required>
      </div>
      <div class="form-group">
        <label>Edad</label>
        <input type="text" class="form-control" name="edad" placeholder="Introduzca su edad" required > 
      </div>
      <div class="form-group">
        <label>Promedio</label>
        <input type="text" class="form-control" name="promedio" placeholder="Introduzca su Promedio" required>
      </div>
      <div class="form-group">
        <label for="exampleSelect1">Seleccione su seccion</label>
        <select class="form-control" name="id_seccion" require>
          <?php while($row=mysqli_fetch_array($datos)) { ?>
            <option value="<?php echo $row['id'];?>"> <?php echo $row['seccion'];?> </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Cargar Foto</label>
        <input type="file" class="form-control-file" id="imagen" name="imagen" aria-describedby="fileHelp" required>
      </div>
      <button type="submit" class="btn btn-success">Adicionar</button>
      <button type="reset" class="btn btn-warning">Borrar</button>
    </fieldset>
    </form>
  </div>
</div>