

<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Editar Sucursal : </h3>
      </div>
      <form role="form" method="post">
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nombre Sucursal</label>

              <input type="text" name="nombre_suc" class="form-control" value="<?php echo $sucursal->sucursal ?>" placeholder="Ingrese nombre de la sucursal">
              <?php echo form_error('nombre_suc', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="">Template</label>
              <select name="template" class="form-control">
                <option value="0">Seleccione un template...</option>
                <?php foreach ($templates as $tmp): ?>
                  <option value="<?= $tmp->id ?>" <?php if ($sucursal->id_template == $tmp->id): ?>selected<?php endif; ?> ><?= $tmp->nombre ?></option>
                <?php endforeach; ?>
              </select>
              <?php echo form_error('template', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Guardar</button>
          <a href="<?php echo base_url()."super_admin/sucursal" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </div>
    </form>
  </div>

</div>
</section>
