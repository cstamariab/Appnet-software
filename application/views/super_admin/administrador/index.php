
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Listado Administradores</h3>

      <div class="box-tools pull-right">
        <a href="<?=base_url('super_admin/administrador/nuevo')?>" class="btn btn-primary ">Nuevo Administrador</a>
      </div>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Usuario</th>
            <th class="text-center">Estado</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($admins as $adm): ?>
            <tr>
              <td class="text-center"><strong><?php echo $adm->usuario ?></strong></td>
              <td class="text-center">
                <?php if ($adm->estado == 1): ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $adm->id ?>,0)" class="btn btn-xs btn-success" name="button"><i class="glyphicon glyphicon-ok"></i></button>
                <?php else: ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $adm->id ?>,1)" class="btn btn-xs btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <a href="<?= base_url()."super_admin/administrador/editar/".$adm->id?>" title="Editar Admin" class="btn btn-xs btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>
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

  if (confirm("Desea cambiar el estado de la cuenta ?")) {
    $.post('<?php echo base_url()."super_admin/administrador/cambiar_estado"?>',{id:id,estado:estado},function(data){
      if (estado == 1) {
        alert('Usuario activada exitosamente.');
      }else{
        alert('Usuario desactivado.');
      }
      window.location.reload();
    });
  }
}

</script>
