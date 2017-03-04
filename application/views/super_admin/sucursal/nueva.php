

<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Creacion Sucursales</h3>
      </div>
      <form role="form" method="post">
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nombre Sucursal</label>

              <input type="text" name="nombre_suc" class="form-control" value="<?php echo set_value('nombre_suc'); ?>" placeholder="Ingrese nombre de la sucursal">
              <?php echo form_error('nombre_suc', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Ruta</label>
              <input type="text" name="ruta" class="form-control" value="<?php echo set_value('ruta'); ?>"  placeholder="ej: nombre_ruta">
              <?php echo form_error('ruta', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Template</label>
              <select name="template" class="form-control">
                <option value="0">Seleccione un template...</option>
                <?php foreach ($templates as $tmp): ?>
                  <option value="<?= $tmp->id ?>"><?= $tmp->nombre ?></option>
                <?php endforeach; ?>
              </select>
              <?php echo form_error('template', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Empresa</label>
              <select name="empresa" class="form-control">
                <option value="0">Seleccione empresa...</option>
                <?php foreach ($empresas as $emp): ?>
                  <option value="<?= $emp->id ?>"><?= $emp->razon_social ?></option>
                <?php endforeach; ?>
              </select>
              <?php echo form_error('empresa', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Guardar</button>
          <a href="<?php echo base_url()."super_admin/empresa" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </div>
    </form>
  </div>

</div>
</section>
