<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Agregar permisos </h3>
    </div>
    <div class="box-body">
      <form class="" action="" method="post">

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
        <div class="col-md-6">
          <div class="form-group">
            <button type="submite" class="btn btn-success" role="button" name="button">Agregar permiso</button>
          </div>
        </div>
      </form>
    </div>
    <hr>
    <div class="box-header with-border">
      <h3 class="box-title">Listado Permisos Usuario </h3>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Empresa</th>
            <th class="text-center">Sucursal</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($permisos as $perm): ?>
            <tr>
              <td class="text-center"><strong><?php echo $perm->empresa ?></strong></td>
              <td class="text-center"><a target="_blank" href="<?php echo base_url()."".$perm->sucursal ?>"><?php echo base_url()."".$perm->sucursal ?></a></td>
              <td class="text-center">
                <div class="button-group">
                  <a  href="<?= base_url()."super_admin/usuarios/permisos/".$user->id?>" title="Eliminar Permisos" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-trash"></i></a>
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
function carga_sucursal(id_empresa) {
  $.post('<?php echo base_url()."super_admin/usuarios/carga_sucursal" ?>',{id_empresa:id_empresa},function(data){
    $('#sucursales').html(data);
  });
}
</script>
