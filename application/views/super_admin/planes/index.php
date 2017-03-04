
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Listado Planes</h3>

      <div class="box-tools pull-right">
        <a href="<?=base_url('super_admin/planes/nuevo')?>" class="btn btn-primary ">Nuevo Plan</a>
      </div>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Plan</th>
            <th class="text-center">Espacio Disco</th>
            <th class="text-center"># Sucursales</th>
            <th class="text-center"># Slides</th>
            <th class="text-center">Video</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($planes as $plan): ?>
            <tr>
              <td class="text-center"><strong><?php echo $plan->nombre ?></strong></td>
              <td class="text-center"><?php echo $plan->espacio_disco." MB" ?></td>
              <td class="text-center"><?php echo $plan->sucursales ?></td>
              <td class="text-center"><?php echo $plan->slides ?></td>
              <td class="text-center">
                <?php if ($plan->video == 1): ?>
                  <button type="button" title="Desactivar" onclick="cambiar_estado(<?php echo $plan->id ?>,0)" class="btn btn-xs btn-success" name="button"><i class="glyphicon glyphicon-check"></i> <i class="glyphicon glyphicon-film"></i></button>
                <?php else: ?>
                  <button type="button" title="Activar" onclick="cambiar_estado(<?php echo $plan->id ?>,1)" class="btn btn-xs btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i> <i class="glyphicon glyphicon-film"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <a title="Editar" href="<?= base_url()."super_admin/planes/editar/".$plan->id?>" class="btn btn-xs btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>
<script type="text/javascript">
function cambiar_estado(id,estado) {
  if (confirm("Desea cambiar opcion de video ?")) {
    $.post('<?php echo base_url()."super_admin/planes/cambiar_estado_video"?>',{id:id,estado:estado},function(data){
      if (data == 1) {
        alert("Video activado exitosamente");
      }else{
        alert("Video desactivado exitosamente");
      }
      window.location.reload();
    });
  }
}
</script>
