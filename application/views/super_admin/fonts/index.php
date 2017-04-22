<?php foreach ($fonts as $key => $fo): ?>
  <?php echo "<".$fo->link_html.">"; ?>
<?php endforeach; ?>

<style media="screen">
<?php $i=0; foreach ($fonts as $key => $fo): ?>
.<?php echo "font_props".$i ?>{
  font-size: 30px;
  <?php echo $fo->propiedad_css; ?>
}
<?php $i++; endforeach; ?>
</style>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Listado Fonts</h3>

      <div class="box-tools pull-right">
        <a href="<?=base_url('super_admin/fonts/nuevo')?>" class="btn btn-md btn-primary ">Nueva Font</a>
      </div>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped nowrap">
        <thead>
          <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nombre Fuente</th>
            <th class="text-center">Ejemplo</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; foreach ($fonts as $fo): ?>
            <tr>
              <td class="text-center"><strong><?php echo $fo->id ?></strong></td>
              <td class="text-center"><?php echo $fo->nombre_font ?></td>
              <td class="text-center <?= "font_props".$i ?>"><?php echo $fo->nombre_font ?></td>
              <td class="text-center">
                <?php if ($fo->estado == 1): ?>
                  <button type="button" title="Desactivar" onclick="cambiar_estado(<?php echo $fo->id ?>,0)" class="btn btn-xs btn-success" name="button"><i class="glyphicon glyphicon-ok"></i></button>
                <?php else: ?>
                  <button type="button" title="Activar" onclick="cambiar_estado(<?php echo $fo->id ?>,1)" class="btn btn-xs btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <a title="Eliminar" href="<?= base_url()."super_admin/fonts/eliminar_font/".$fo->id?>" class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-trash"></i></a>
                </div>
              </td>
            </tr>
            <?php $i++; endforeach; ?>
          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <script type="text/javascript">
  function cambiar_estado(id,estado) {
    if (confirm("Desea cambiar estado de la font ?")) {
      $.post('<?php echo base_url()."super_admin/fonts/cambiar_estado"?>',{id:id,estado:estado},function(data){
        if (estado==1) {
          alert("Font activada exitosamente")
        }else{
          alert("Font desactivada exitosamente")
        }
        window.location.reload();
      });
    }
  }
  </script>
