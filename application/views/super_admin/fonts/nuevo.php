<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Formulario Registro Fonts</h3>
      </div>
      <form role="form" method="post">
        <div class="box-body">
          <div class="alert alert-success">
            <h4>Solo compatible con <a href="https://fonts.google.com/" target="_blank">Google Fonts</a></h4>
          </div>
          <div class="col-md-12">
              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre_font" class="form-control" value="<?php echo set_value('nombre_font'); ?>"  placeholder="Nombre font">
                <?php echo form_error('nombre_font', '<div class="label label-danger ">', '</div>'); ?>
              </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Link Html</label>
              <input type="text" name="link_html" class="form-control" value="<?php echo set_value('link_html'); ?>" placeholder='Ej : <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Diplomata+SC" rel="stylesheet">'>
              <?php echo form_error('link_html', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputPassword1">Propiedad Css</label>
              <input type="text" name="propiedad_css" class="form-control" value="<?php echo set_value('propiedad_css'); ?>" placeholder="Ej : font-family: 'Baloo Bhaina', cursive;">
              <?php echo form_error('propiedad_css', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Guardar</button>
          <a href="<?php echo base_url()."super_admin/fonts" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </div>
    </form>
  </div>

</div>
</section>
