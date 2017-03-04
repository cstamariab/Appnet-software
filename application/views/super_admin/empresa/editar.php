<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edicion Empresa Rut : <?php echo $empresa->rut ?></h3>
      </div>
      <form role="form" method="post">
        <div class="box-body">
          <div class="col-md-3">
            <div class="form-group">
              <label for="">Rut</label>

              <input type="text" name="rut" class="form-control" value="<?= $empresa->rut ?>" readonly="">
                <?php echo form_error('rut', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="">Razon Social</label>
              <input type="text" name="razon_social" class="form-control" value="<?= $empresa->razon_social ?>"  placeholder="Ingrese su razon social">
                <?php echo form_error('razon_social', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Giro</label>
              <input type="text" name="giro" class="form-control" value="<?= $empresa->giro ?>" placeholder="Ingrese su giro">
                <?php echo form_error('giro', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Direccion</label>
              <input type="text" name="direccion" class="form-control" value="<?= $empresa->direccion ?>"  placeholder="Ingrese su Direccion">
                <?php echo form_error('direccion', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="text" name="telefono" class="form-control" value="<?=  $empresa->telefono ?>" placeholder="Ingrese su Telefono">
                <?php echo form_error('telefono', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Celular</label>
              <input type="text" name="celular" class="form-control" value="<?=  $empresa->celular ?>" placeholder="Ingrese su Celular">
                <?php echo form_error('celular', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" value="<?=  $empresa->email ?>" placeholder="Ingrese su Email">
                <?php echo form_error('email', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Plan</label>
              <select name="plan" class="form-control">
                <option value="0">Seleccione un plan...</option>
                <?php foreach ($planes as $plan): ?>
                  <option value="<?= $plan->id ?>" <?php if ($plan->id == $empresa->id_plan):?>selected<?php endif; ?>><?= $plan->nombre ?></option>
                <?php endforeach; ?>
              </select>
              <?php echo form_error('plan', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-success pull-right">Actualizar</button>
          <a href="<?php echo base_url()."super_admin/empresa" ?>" class="btn btn-primary pull-right">Volver</a>
        </div>

      </div>
    </form>
  </div>

</div>
</section>
