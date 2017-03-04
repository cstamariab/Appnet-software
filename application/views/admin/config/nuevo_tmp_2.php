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
      <div class="col-md-3">
        <div class="form-group">
          <label>Color Titulo Slide</label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_titulo" value="#000000" required>
            <div class="input-group-addon">
              <i></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Tamaño Titulo</label>
          <div class="input-group">
            <input type="number" class="form-control" name="size_titulo" value="10" >
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Color Precio </label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_precio" value="#000000" required>
            <div class="input-group-addon">
              <i></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Tamaño Precio</label>
          <div class="input-group">
            <input type="number" class="form-control" name="size_precio" value="10" >
          </div>
        </div>
      </div>
      <div style="clear:both"></div>
      <div class="col-md-8">
        <div class="form-group ">
          <label for="exampleInputEmail1">Imagen Producto</label>
          <input type="file" name="img"  />
          <?php echo form_error('img', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <!-- <div class="col-md-4">
        <div class="form-group ">
          <label for="exampleInputEmail1">Logo promocional</label>
          <input type="file" name="logo_estado" />
        </div>
      </div> -->
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