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
          <input type="text" name="nombre" class="form-control" value="<?php echo $slide->nombre ?>" />
          <?php echo form_error('nombre', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Proveedor de video</label>
          <select class="form-control" name="proveedor_video">
            <option value="0">Seleccione un proveedor..</option>
            <?php if ($slide->proveedor_video == 1): ?>
              selected
            <?php endif; ?>
            <option value="1"<?php if ($slide->proveedor_video == 1): ?>selected<?php endif; ?>>Vimeo</option>
            <option value="2" <?php if ($slide->proveedor_video == 2): ?>selected<?php endif; ?>>Youtube</option>
          </select>
          <?php echo form_error('proveedor_video', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Link video</label>
          <input type="text" name="link" class="form-control"  value="<?php echo $slide->link_video ?>" />
          <?php echo form_error('link', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-lg btn-primary " onclick="loading()">Guardar</button>
      <a class="btn btn-lg btn-success" href="<?php echo base_url()."admin/config/configurar_slides".$sucursal->id ?>">Volver</a>
    </div>
  </form>
</div>
<!-- /.box -->