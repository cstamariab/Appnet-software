<!-- Input addon -->
<!-- Input addon -->
<?php foreach ($fonts as $fo): ?>
  <?php echo "<".$fo->link_html.">" ?>
<?php endforeach; ?>
<style media="screen">
<?php $i= 0;foreach ($fonts as $fo): ?>
  .<?php echo "font_".$i ?>{
    <?php echo $fo->propiedad_css ?>
    font-size: 30px;
  }
<?php $i++; endforeach; ?>
</style>
<section class="content-header">
  <h1>
    Nueva Diapositiva
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url()."admin"?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="<?= base_url()."admin/config"?>"><i class="fa fa-dashboard"></i> Listado Sucursales</a></li>
    <li><a href="<?= base_url()."admin/config/configurar_slides/".$id_sucursal?>"><i class="fa fa-dashboard"></i> Configurar Diapositivas</a></li>
    <li class="active">Nueva Diapositiva</li>
  </ol>
</section>

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
          <div class="box">                <!-- /.box-header -->
            <div class="box-body pad">
              <textarea class="textarea" name="descripcion" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                <?php echo $slide->descripcion; ?>
              </textarea>
            </div>
          </div>
          <?php echo form_error('descripcion', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label>Color Marco Descripcion </label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_marco_desc" value="rgba(0,0,0,0.5)" required>
            <div class="input-group-addon">
              <i></i>
            </div>
          </div>
          <?php echo form_error('color_marco_desc', '<div class="label label-danger ">', '</div>'); ?>
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

      <div class="col-md-4">
        <div class="form-group">
          <label>Fuente Titulo</label>
          <div class="input-group">
            <select class="form-control"  name="font_titulo" style="width:300px">
              <?php $i=0; foreach ($fonts as $fo): ?>
                <option class="font_<?=$i?>" value="<?= $fo->id ?>">
                    <?php echo $fo->nombre_font ?>
                </option>
              <?php $i++; endforeach; ?>
            </select>
          </div>
          <?php echo form_error('size_titulo', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label>Fuente Descripcion</label>
          <div class="input-group">
            <select class="form-control"  name="font_desc" style="width:300px">
              <?php $i=0; foreach ($fonts as $fo): ?>
                <option class="font_<?=$i?>" value="<?= $fo->id ?>">
                    <?php echo $fo->nombre_font ?>
                </option>
              <?php $i++; endforeach; ?>
            </select>
          </div>
        </div>
        <?php echo form_error('size_desc', '<div class="label label-danger ">', '</div>'); ?>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Fuente Precio</label>
          <div class="input-group">
            <select class="form-control"  name="font_precio" style="width:300px">
              <?php $i=0; foreach ($fonts as $fo): ?>
                <option class="font_<?=$i?>" value="<?= $fo->id ?>">
                    <?php echo $fo->nombre_font ?>
                </option>
              <?php $i++; endforeach; ?>
            </select>
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
              <input type="checkbox" name="activa_img" checked>
              Activar Imagen
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