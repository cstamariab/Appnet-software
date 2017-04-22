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
    Editar
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url()."admin"?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="<?= base_url()."admin/config"?>"><i class="fa fa-dashboard"></i> Listado Sucursales</a></li>
    <li><a href="<?= base_url()."admin/config/configurar_slides/".$id_sucursal?>"><i class="fa fa-dashboard"></i> Configurar Diapositivas</a></li>
    <li class="active">Editar Diapositiva</li>
  </ol>
</section>
<div class="box box-info">
  <form role="form" action="" method="post" enctype="multipart/form-data">
    <div class="box-header with-border">
      <h3 class="box-title">Editar diapositiva </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    <input type="hidden" name="id_sucursal" value="<?php echo $sucursal->id; ?>">
    <div class="box-body">
      <div class="col-md-12">
        <div class="form-group ">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" name="nombre" class="form-control" value="<?php echo $slide->nombre; ?>"  />
          <?php echo form_error('nombre', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group ">
          <label for="exampleInputEmail1">Titulo diapositiva</label>
          <input type="text" name="titulo" class="form-control" value="<?php echo $slide->titulo; ?>" />
          <?php echo form_error('titulo', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label>Color Marco Descripcion </label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_marco_desc" value="<?php echo $slide->color_marco_desc; ?>" required>
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
          <input type="text" name="posicion" class="form-control" value="<?php echo $slide->posicion; ?>" />
          <?php echo form_error('posicion', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group ">
          <label for="exampleInputEmail1">Precio</label>
          <input type="text" name="precio" class="form-control" value="<?php echo $slide->precio; ?>" />
          <?php echo form_error('precio', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>
      <div style="clear:both"></div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Color Titulo Slide</label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_titulo" value="<?php echo $slide->color_titulo; ?>" required>
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
            <input type="number" class="form-control" name="size_titulo" value="<?php echo $slide->size_titulo; ?>" >
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Color Precio </label>
          <div class="input-group my-colorpicker2">
            <input type="text" class="form-control" name="color_precio" value="<?php echo $slide->color_precio; ?>" >
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
            <input type="number" class="form-control" name="size_precio" value="<?php echo $slide->size_precio; ?>" >
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Fuente Titulo</label>
          <div class="input-group">
            <select class="form-control"  name="font_titulo" style="width:300px">
              <?php $i=0; foreach ($fonts as $fo): ?>
                <option class="font_<?=$i?>" <?php if ($fo->id == $fonts_conf->font_titulo): echo "selected";  endif; ?> value="<?= $fo->id ?>">
                    <?php echo $fo->nombre_font ?>
                </option>
              <?php $i++; endforeach; ?>
            </select>
          </div>
          <?php echo form_error('size_titulo', '<div class="label label-danger ">', '</div>'); ?>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Fuente Precio</label>
          <div class="input-group">
            <select class="form-control"  name="font_precio" style="width:300px">
              <?php $i=0; foreach ($fonts as $fo): ?>
                <option value="<?= $fo->id ?>" class="font_<?=$i?>" <?php if ($fo->id == $fonts_conf->font_precio): echo "selected";  endif; ?> >
                    <?php echo $fo->nombre_font ?>
                </option>
              <?php $i++; endforeach; ?>
            </select>
          </div>
        </div>
        <?php echo form_error('size_precio', '<div class="label label-danger ">', '</div>'); ?>
      </div>
      <div style="clear:both"></div>
      <div class="col-md-8">
        <div class="form-group ">
          <label for="exampleInputEmail1">Imagen Producto</label>
          <input type="file" name="img"  />
          <br>
        </div>
      </div>
      <!-- <div class="col-md-4">
        <div class="form-group ">
          <label for="exampleInputEmail1">Logo promocional</label>
          <input type="file" name="logo_estado" />
        </div>
      </div> -->
        <?php if ($slide->img_slide != ""): ?>
      <div class="col-md-12">
        <img class="img-responsive thumbnail"  src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$slide->img_slide; ?>" alt="">
        <input type="hidden" name="img_antigua" value="<?php echo $slide->img_slide ?>">
      </div>
        <?php endif; ?>
      <!-- <?php if ($slide->logo_estado_prod != ""): ?>
        <div class="col-md-12">
          <img class="img-responsive thumbnail"  src="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$slide->logo_estado_prod; ?>" alt="">
          <input type="hidden" name="img_fondo_antigua" value="<?php echo $slide->logo_estado_prod ?>">
        </div>
      <?php endif; ?> -->


    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
      <button type="submit" class="btn btn-lg btn-primary " onclick="loading()">Guardar</button>
      <a href="<?php echo base_url()."admin/config/configurar_slides/".$sucursal->id ?>" class="btn btn-lg btn-success">Volver</a>
    </div>
  </form>
</div>
<!-- /.box -->