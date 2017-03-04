
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
              <h3 class="box-title">Listado Empresas</h3>

              <div class="box-tools pull-right">
                <a href="<?=base_url('super_admin/empresa/nueva')?>" class="btn btn-md btn-primary ">Nueva Empresa</a>
              </div>
            </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped nowrap">
        <thead>
          <tr>
            <th class="text-center">Rut</th>
            <th class="text-center">Razon Social</th>
            <th class="text-center">Mail</th>
            <th class="text-center">Telefono</th>
            <th class="text-center">Celular</th>

            <th class="text-center">Fecha Activacion</th>
            <th class="text-center">Fecha Finalizacion</th>
            <th class="text-center">Tipo Plan</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($empresas as $emp): ?>
            <tr>
              <td class="text-center"><strong><?php echo $emp->rut ?></strong></td>
              <td class="text-center"><?php echo $emp->razon_social ?></td>
              <td class="text-center"><?php echo $emp->email ?></td>
              <td class="text-center"><?php echo $emp->telefono ?></td>
              <td class="text-center"><?php echo $emp->celular ?></td>
              <td class="text-center">
                <?php if ($emp->fecha_activacion == "0000-00-00 00:00:00"): ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $emp->id ?>,0)" class="btn btn-xs label-success" name="button">Activar <i class="glyphicon glyphicon-ok"></i></button>
                <?php else: ?>
                  <?php echo $emp->fecha_activacion; ?>
                <?php endif; ?>
              </td>
              <td class="text-center"><?php echo $emp->fecha_finalizacion ?></td>
              <td class="text-center"><strong><?php echo $emp->plan ?></strong></td>
              <td class="text-center">
                <?php if ($emp->estado == 1): ?>
                  <button type="button" title="Desactivar" onclick="cambiar_estado_empresa(<?php echo $emp->id ?>,0)" class="btn btn-xs btn-success" name="button"><i class="glyphicon glyphicon-ok"></i></button>
                <?php else: ?>
                  <button type="button" title="Activar" onclick="cambiar_estado_empresa(<?php echo $emp->id ?>,1)" class="btn btn-xs btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <a title="Editar" href="<?= base_url()."super_admin/empresa/editar/".$emp->id?>" class="btn btn-xs btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>
                  <a title="Eliminar" href="javascript:void(0)" onclick="eliminar_empresa(<?php echo $emp->id ?>)" class="btn btn-xs btn-danger"  ><i class="glyphicon glyphicon-trash"></i></a>
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
    if (confirm("Desea activar esta empresa ?")) {
      $.post('<?php echo base_url()."super_admin/empresa/cambiar_estado"?>',{id:id},function(data){
        alert('Empresa activada exitosamente.');
        window.location.reload();
      });
    }
  }
  function cambiar_estado_empresa(id,estado) {
    if (confirm("Desea cambiar estado de la empresa ?")) {
      $.post('<?php echo base_url()."super_admin/empresa/cambiar_estado_empresa"?>',{id:id,estado:estado},function(data){
        alert('Empresa activada exitosamente.');
        window.location.reload();
      });
    }
  }
  function eliminar_empresa(id) {
    if (confirm("Desea eliminar esta cuenta ?")) {
      $.post('<?php echo base_url()."super_admin/empresa/eliminar_empresa"?>',{id:id},function(data){
        
        alert('Cuenta eliminada exitosamente.');
        window.location.reload();
      });
    }
  }
</script>
