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
  <span style="display:inline-block;margin:20px 0;"></span>
  <ol class="breadcrumb">
    <li><a href="<?= base_url()."admin"?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="<?= base_url()."admin/config"?>"><i class="fa fa-dashboard"></i> Listado Sucursales</a></li>
    <li class="active">Configurar Contenido</li>
  </ol>
</section>
<div class="row">
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Contenido 1</h3>
      </div>
      <div class="box-body">
        <form role="form" action="<?php base_url()."config/tmp_4_cont_1_conf"?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Texto </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_texto_1" value="<?php echo $tmp_4_cont_1->color_texto ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_texto_1', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Fondo Texto </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_fondo_texto_1" value="<?php echo $tmp_4_cont_1->color_fondo_texto ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_fondo_texto_1', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Precio </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_precio_1" value="<?php echo $tmp_4_cont_1->color_precio ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_precio_1', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Fondo Precio </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_fondo_precio_1" value="<?php echo $tmp_4_cont_1->color_fondo_precio ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_fondo_precio_1', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Seleccion de Fuente</label>
                <div class="input-group">
                  <select class="form-control"  name="font_1">
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
                <div class="form-group ">
                  <label for="exampleInputEmail1">Imagen fondo</label>
                  <input type="file" name="fondo_1"  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="">Descripcion Items</label>
              </div>
              <div class="col-md-6">
                <label for="">  Precio Items</label>
              </div>
            </div>
            <?php for ($i=0; $i < 5 ; $i++) {
              ?>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="desc_cont_1_<?=  $i ?>" value="" placeholder="Descripcion">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="desc_cont_1_<?=  $i ?>" value="" placeholder="Precio">
                </div>
              </div>
              <br>
              <?php
            } ?>



            <br>
            <div class="row">
              <div class="col-md-12">
                <button  class="btn btn-success text-center"type="button" role="submit" name="button">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Contenido 2</h3>
        </div>
        <div class="box-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Texto </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_texto_2" value="<?php echo $tmp_4_cont_2->color_texto ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_texto_2', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Fondo Texto </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_fondo_texto_1" value="<?php echo $tmp_4_cont_2->color_fondo_texto ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_fondo_texto_2', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Precio </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_precio_2" value="<?php echo $tmp_4_cont_2->color_precio ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_precio_2', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Color Fondo Precio </label>
                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control" name="color_fondo_precio_2" value="<?php echo $tmp_4_cont_2->color_fondo_precio ?>" required>
                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <?php echo form_error('color_fondo_precio_2', '<div class="label label-danger ">', '</div>'); ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Seleccion de Fuente</label>
                <div class="input-group">
                  <select class="form-control"  name="font_2">
                    <?php $i=0; foreach ($fonts as $fo): ?>
                      <option class="font_<?=$i?>" <?php if ($fo->id == $fonts_conf->font_titulo): echo "selected";  endif; ?> value="<?= $fo->id ?>">
                        <?php echo $fo->nombre_font ?>
                      </option>
                      <?php $i++; endforeach; ?>
                    </select>
                  </div>
                  <?php echo form_error('font_2', '<div class="label label-danger ">', '</div>'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group ">
                  <label for="exampleInputEmail1">Imagen fondo</label>
                  <input type="file" name="fondo_2"  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
