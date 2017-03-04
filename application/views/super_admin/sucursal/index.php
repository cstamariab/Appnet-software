
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Listado Sucursales</h3>

      <div class="box-tools pull-right">
        <a href="<?=base_url('super_admin/sucursal/nueva')?>" class="btn btn-primary ">Nueva Sucursal</a>
      </div>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Empresa</th>
            <th class="text-center">Nombre Sucursal</th>
            <th class="text-center">URL</th>
            <th class="text-center">Template</th>
            <th class="text-center">Fecha Creacion</th>
            <th class="text-center">Estado</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sucursales as $suc): ?>
            <tr>
              <td class="text-center"><strong><?php echo $suc->empresa ?></strong></td>
              <td class="text-center"><?php echo $suc->sucursal ?></td>
              <td class="text-center"><a href="<?php echo "http://www.appnet.cl/".$suc->ruta ?>" target="_blank"><?php echo "http://www.appnet/".$suc->ruta ?></a></td>
              <td class="text-center"><?php echo $suc->template ?></td>
              <td class="text-center"><?php echo $suc->fecha_creacion ?></td>
              <td class="text-center">
                <?php if ($suc->estado == 1): ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $suc->id ?>,0)" class="btn btn-xs btn-success" name="button"><i class="glyphicon glyphicon-ok"></i></button>
                <?php else: ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $suc->id ?>,1)" class="btn btn-xs btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <a title="Editar" href="<?= base_url()."super_admin/sucursal/editar/".$suc->id?>" class="btn btn-xs btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>
                  <a title="Eliminar Sucursal" onclick="delete_suc(<?= $suc->id ?>,'<?= $suc->ruta ?>')" href="javascript:void(0)" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-trash"></i></a>
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
  if (confirm("Desea cambiar el estado de la sucursal ?")) {
    $.post('<?php echo base_url()."super_admin/sucursal/cambiar_estado"?>',{id:id,estado:estado},function(data){
      switch (data) {
        case "0":
        alert("Empresa desactivada.");
        break;
        case "1":
        alert("Sucursal Activada exitosamente");
        break;
        case "2":
        alert("Sucursal Desactivada exitosamente");
        break;
        default:
      }
      window.location.reload();
    });
  }
}
function delete_suc(id,ruta) {
  if (confirm('Esta seguro que deseea eliminar la sucursal ? Nota : no quedaran registros de esta sucursal. ')) {
    $.post('<?php echo base_url()."super_admin/sucursal/delete_suc"?>',{id:id,ruta:ruta},function(data){
      alert('sucursal eliminada exitosamente');
      window.location.reload();
    });
  }
}
</script>
