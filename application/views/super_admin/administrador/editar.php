

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
              <input type="text" name="usuario" class="form-control" value="<?= $admin->usuario?>">
              <?php echo form_error('usuario', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" value="<?= $admin->email?>"  placeholder="Email">
              <?php echo form_error('email', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Guardar</button>

        </div>
      </form>
      <hr>
      <div class="box-header">
        <h3 class="box-title">Cambio Contraseña</h3>
      </div>
      <form class="" action="<?= base_url()."super_admin/administrador/cambio_contrasena" ?>" method="post" autocomplete="off">
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nueva Contraseña</label>
              <input type="text" style="display:none;">
              <input type="hidden" name="id" value="<?= $admin->id ?>">
              <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Ingrese nueva contraseña">
              <?php echo form_error('password', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Confirma Contraseña</label>
              <input type="password" name="password2" class="form-control" value="<?php echo set_value('password2'); ?>"  placeholder="Confirme contraseña">
              <?php echo form_error('password2', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-danger pull-right">Guardar</button>
          <a href="<?php echo base_url()."super_admin/empresa" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </form>
      <!-- /.box-body -->



    </div>

  </div>

</div>
</section>
