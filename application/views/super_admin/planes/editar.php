


<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Editar Plan</h3>
      </div>
      <form role="form" method="post">
        <div class="box-body">
          <div class="col-md-6">
              <div class="form-group">
                <label for="">Plan</label>
                <input type="text" name="plan" class="form-control" value="<?php echo $plan->nombre ?>"  placeholder="Ingrese nombre del plan">
                <?php echo form_error('plan', '<div class="label label-danger ">', '</div>'); ?>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Espacio Disco</label>
              <select class="form-control"  name="espacio_disco">
                <option value="0">Seleccion espacio disco..</option>
                <?php  for ($i=50; $i <= 1000 ; $i = $i+50) { ?>
                  <option value="<?= $i ?>" <?php if($plan->espacio_disco== $i){echo"selected";} ?>><?= $i ?></option>
                <?php  } ?>
              </select>
              <?php echo form_error('espacio_disco', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Sucursales</label>
              <select class="form-control" name="sucursales">
                <option value="0">Seleccion sucursales..</option>
                <?php  for ($i=1; $i <= 10 ; $i++) { ?>
                  <option value="<?= $i ?>" <?php if($plan->sucursales== $i){echo"selected";} ?>><?= $i ?></option>
                <?php  } ?>
              </select>
              <?php echo form_error('sucursales', '<div class="label label-danger ">', '</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputPassword1">Slides diapositivas</label>
              <select class="form-control" name="slides">
                <option value="0">Seleccion cantidad slides..</option>
                <?php  for ($i=1; $i <= 99 ; $i++) { ?>
                  <option value="<?= $i ?>" <?php if($plan->slides== $i){echo"selected";} ?>><?= $i ?></option>
                <?php  } ?>
              </select>
              <?php echo form_error('slides', '<div class="label label-danger ">', '</div>'); ?>
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
