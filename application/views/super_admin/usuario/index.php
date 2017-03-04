
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Listado Usuarios</h3>

      <div class="box-tools pull-right">
        <a href="<?=base_url('super_admin/usuarios/nuevo')?>" class="btn btn-primary ">Nuevo Usuario</a>
      </div>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Usuario</th>
            <th class="text-center">Email</th>
            <th class="text-center">Fecha Creacion</th>
            <th class="text-center">Estado</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $user): ?>
            <tr>
              <td class="text-center"><strong><?php echo $user->username ?></strong></td>
              <td class="text-center"><?php echo $user->email ?></td>
              <td class="text-center"><?php echo $user->fecha_creacion ?></td>
              <td class="text-center">
                <?php if ($user->estado == 1): ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $user->id ?>,0)" class="btn btn-xs btn-success" name="button"><i class="glyphicon glyphicon-ok"></i></button>
                <?php else: ?>
                  <button type="button" onclick="cambiar_estado(<?php echo $user->id ?>,1)" class="btn btn-xs btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <a href="<?= base_url()."super_admin/usuarios/editar/".$user->id?>" title="Editar Usuario" class="btn btn-xs btn-warning" ><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="<?= base_url()."super_admin/usuarios/permisos/".$user->id?>" title="Agregar Permisos" class="btn btn-xs btn-success" ><i class="glyphicon glyphicon-lock"></i></a>
                  <a href="javascript:void(0)" onclick="eliminar_usuario(<?php echo $user->id ?>)" title="Eliminar usuario" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-trash"></i></a>


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

  if (confirm("Desea cambiar el estado de la cuenta ?")) {
    $.post('<?php echo base_url()."super_admin/usuarios/cambiar_estado"?>',{id:id,estado:estado},function(data){
      if (estado == 1) {
        alert('Usuario activada exitosamente.');
      }else{
        alert('Usuario desactivado.');
      }
      window.location.reload();
    });
  }
}
function eliminar_usuario(id) {

  if (confirm("Desea eliminar este usuario?")) {
    $.post('<?php echo base_url()."super_admin/usuarios/eliminar_usuario"?>',{id:id},function(data){

        alert('Usuario eliminado exitosamente.');

      window.location.reload();
    });
  }
}
</script>
