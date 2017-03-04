<!-- Input addon -->
<div class="box box-info">
  <form role="form" action="" method="post" enctype="multipart/form-data">
    <div class="box-header with-border">
      <h3 class="box-title">Nueva diapositiva </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    <input type="hidden" name="id_sucursal" value="<?php echo $sucursal->id; ?>">
    <div class="box-body">
      <div class="col-md-12">
        <div class="form-group ">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" name="nombre" class="form-control" value="<?php echo set_value('nombre') ?>" />
          <?php echo form_error('nombre', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group ">
          <label for="exampleInputEmail1">Titulo diapositiva</label>
          <input type="text" name="titulo" class="form-control" value="<?php echo set_value('titulo') ?>" />
          <?php echo form_error('titulo', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group ">
          <label for="exampleInputEmail1">Descripcion diapositiva</label>
          <input type="text" name="descripcion" class="form-control" value="<?php echo set_value('descripcion') ?>" />
          <?php echo form_error('descripcion', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Posicion</label>
          <input type="text" name="posicion" class="form-control" value="<?php echo set_value('posicion') ?>" />
          <?php echo form_error('posicion', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Precio</label>
          <input type="text" name="precio" class="form-control" value="<?php echo set_value('precio') ?>" />
          <?php echo form_error('precio', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div style="clear:both"></div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Color Titulo</label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_titulo" value="#000000" required>
            <div class="input-group-addon">
              <i></i>
            </div>
          </div>
          <?php echo form_error('color_titulo', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Tamaño Titulo</label>
          <div class="input-group">
            <input type="number" class="form-control" name="size_titulo" value="16" >
          </div>
            <?php echo form_error('size_titulo', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Color Descripcion </label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_descripcion" value="#000000" required>
            <div class="input-group-addon">
              <i></i>
            </div>
          </div>
            <?php echo form_error('color_descripcion', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Tamaño Descripcion</label>
          <div class="input-group">
            <input type="number" class="form-control" name="size_desc" value="10" >
          </div>
        </div>
          <?php echo form_error('size_desc', '<div class="label label-danger ">', '</div>'); ?>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Color precio </label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_precio" value="#000000" required>
            <div class="input-group-addon">
              <i></i>
            </div>
          </div>
          <?php echo form_error('color_precio', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label>Tamaño Precio</label>
          <div class="input-group">
            <input type="number" class="form-control" name="size_precio" value="10" >
          </div>
        </div>
          <?php echo form_error('size_precio', '<div class="label label-danger ">', '</div>'); ?>
      </div>
      <div style="clear:both"></div>
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Imagen Producto</label>
          <input type="file" name="img"  />

        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Imagen fondo</label>
          <input type="file" name="img_fondo"  />

        </div>
      </div>



      <div class="col-md-12">
        <div class="form-group">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="activa_titulo" checked>
              Activar titulo
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="activa_desc" checked>
              Activar Descripcion
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="activa_precio" checked>
              Activar Precio
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="activa_iva">
              Activar + Iva
            </label>
          </div>


        </div>
      </div>




    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-lg btn-primary " onclick="loading()">Guardar</button>
    </div>
  </form>
</div>
<!-- /.box -->