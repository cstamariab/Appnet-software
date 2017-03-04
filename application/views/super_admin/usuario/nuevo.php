

<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Formulario Registro Usuarios</h3>
      </div>
      <form role="form" method="post" >
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" name="usuario" class="form-control" value="<?php echo set_value('usuario'); ?>" placeholder="Ingrese su usuario">
              <?php echo form_error('rut', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>"  placeholder="Ingrese su email">
              <?php echo form_error('email', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" name="password" class="form-control"  placeholder="Ingrese su contraseña">
              <?php echo form_error('password', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Confirmar Contraseña</label>
              <input type="password" name="password2" class="form-control"   placeholder="Confirme contraseña">
              <?php echo form_error('password2', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>



          <div class="col-md-6">
            <div class="form-group">
              <label for="">Empresa</label>
              <select name="empresa" id="empresa" onchange="carga_sucursal(this.value)"  class="form-control">
                <option value="0">Seleccione un empresa...</option>
                <?php foreach ($empresas as $emp): ?>
                  <option value="<?= $emp->id ?>"><?= $emp->razon_social ?></option>
                <?php endforeach; ?>
              </select>
              <?php echo form_error('empresa', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Sucursal</label>
              <select name="sucursal" id="sucursales" class="form-control">

              </select>
              <?php echo form_error('sucursal', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Guardar</button>
          <a href="<?php echo base_url()."super_admin/usuarios" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </div>
    </form>
  </div>

</div>
</section>
<script type="text/javascript">
  function carga_sucursal(id_empresa) {
    $.post('<?php echo base_url()."super_admin/usuarios/carga_sucursal" ?>',{id_empresa:id_empresa},function(data){
      $('#sucursales').html(data);
    });
  }
</script>
