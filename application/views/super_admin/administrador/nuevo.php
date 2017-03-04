

<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Creacion Administrador</h3>
      </div>
      <form role="form" method="post" autocomplete="off">
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" name="usuario" class="form-control" value="<?php echo set_value('usuario'); ?>" placeholder="Ingrese nombre de usuario">
              <?php echo form_error('usuario', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>"  placeholder="ej: nombre_ruta">
              <?php echo form_error('email', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
              <label for="">Password</label>
               <input type="text" style="display:none;">
              <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>"  placeholder="Ingrese contraseña">
              <?php echo form_error('password', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="form-group">
              <label for="">Confirmar Password</label>
              <input type="password" name="password2" class="form-control" value="<?php echo set_value('password2'); ?>"  placeholder="Confirme contraseña">
              <?php echo form_error('password2', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Guardar</button>
          <a href="<?php echo base_url()."super_admin/administrador" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </div>
    </form>
  </div>

</div>
</section>
