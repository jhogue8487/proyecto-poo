 <div class="abs-center">
    <form class="form-horizontal" action="" method="POST" >
    <fieldset>
        <legend><h3>Editar Seccion</h3></legend>
      <div class="form-group">
        <label>Seccion</label>
        <input type="text" class="form-control" name="seccion" value="<?php echo $datos['seccion'];?>" required>
      </div>
      <input type="hidden" name="id" value="<?php echo $datos['id'];?>">
      <button type="submit" class="btn btn-success">Editar</button>
      <button type="reset" class="btn btn-warning">Borrar</button>
    </fieldset>
    </form>
  </div>
</div>