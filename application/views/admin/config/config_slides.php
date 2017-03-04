
<style media="screen">
.gallery
{
  display: inline-block;
  margin-top: 20px;
}
.blur {
  -webkit-filter: blur(4px)

}
img.resize{
  max-width:50%;
  max-height:50%;
}
</style>

<section class="content-header">
  <h1>
    Configuracion Diapositivas
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url()."admin"?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Configurar Diapositivas</li>
  </ol>
</section>
<section class="content">

  <input type="hidden" id="id_sucursal" value="<?php echo $sucursal->id; ?>">
  <!-- /.row -->
  <?php $cantidad_slides = $this->config_model->get_cant_slides($sucursal->id); ?>
  <div class="row">


    <div class="box box-primary">
      <div class="box-header with-border">
        <?php switch ($sucursal->id_template) {
          case '1':
          $nuevo = 'nuevo_slide';
          $editar = "editar_slide";

          break;
          case '2': case '3':
          $nuevo = 'nuevo_slide_tmp_2';
          $editar = "editar_slide_tmp_2";

          break;
          case '4':
          $nuevo = 'nuevo_slide_tmp_3';
          $editar = "editar_slide_tmp_3";

          break;
          case '5':
          $nuevo = 'nuevo_slide_video';
          $editar = "editar_slide_video";

          break;

        } ?>
        <?php if ($cantidad_slides > $sucursal->slides ): ?>
          <a href="#" class="btn btn-danger pull-right" disabled>Limite superado.</a>
        <?php else: ?>
            <a href="<?= base_url()."admin/config/".$nuevo."/".$sucursal->id;?>" class="btn btn-primary pull-right">Nueva Diapositiva</a>
        <?php endif; ?>

      </div>

      <div class="box-body">
        <?php if ($sucursal->id_template != 5): ?>
          <table id="example1" class="table table-bordered table-striped nowrap" nowrap>
            <thead>
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Nombre Diapositiva</th>
                <th class="text-center">Titulo Item</th>
                <th class="text-center">Desc. Item</th>
                <th class="text-center">Precio Item</th>
                <th class="text-center">+Iva Item</th>
                <th class="text-center">Posicion Diapositiva</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($slides as $img): ?>
                <tr>
                  <td class="text-center"><?php echo $img->id ?></td>
                  <td class="text-center"><strong><?php echo $img->nombre; ?></strong> </td>
                  <td class="text-center">
                    <?php if ($img->activa_titulo == 1): ?>
                      <button type="button" title="Desactivar" onclick="activar_prop(<?php echo $img->id ?>,'activa_titulo','0')" class="btn btn-md btn-success" name="button"><i class="ion ion-checkmark-round"></i></button>
                    <?php else: ?>
                      <button type="button" title="Activar" onclick="activar_prop(<?php echo $img->id ?>,'activa_titulo','1')" class="btn btn-md btn-danger" name="button"><i class="ion ion-ios-close-outline"></i></button>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <?php if ($img->activa_descripcion == 1): ?>
                      <button type="button" title="Desactivar" onclick="activar_prop(<?php echo $img->id ?>,'activa_descripcion','0')" class="btn btn-md btn-success" name="button"><i class="ion ion-checkmark-round"></i></button>
                    <?php else: ?>
                      <button type="button" title="Activar" onclick="activar_prop(<?php echo $img->id ?>,'activa_descripcion','1')" class="btn btn-md btn-danger" name="button"><i class="ion ion-ios-close-outline"></i></button>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <?php if ($img->activa_precio == 1): ?>
                      <button type="button" title="Desactivar" onclick="activar_prop(<?php echo $img->id ?>,'activa_precio','0')" class="btn btn-md btn-success" name="button"><i class="ion ion-checkmark-round"></i></button>
                    <?php else: ?>
                      <button type="button" title="Activar" onclick="activar_prop(<?php echo $img->id ?>,'activa_precio','1')" class="btn btn-md btn-danger" name="button"><i class="ion ion-ios-close-outline"></i></button>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <?php if ($img->activa_iva == 1): ?>
                      <button type="button" title="Desactivar" onclick="activar_prop(<?php echo $img->id ?>,'activa_iva','0')" class="btn btn-md btn-success" name="button"><i class="ion ion-checkmark-round"></i></button>
                    <?php else: ?>
                      <button type="button" title="Activar" onclick="activar_prop(<?php echo $img->id ?>,'activa_iva','1')" class="btn btn-md btn-danger" name="button"><i class="ion ion-ios-close-outline"></i></button>
                    <?php endif; ?>
                  </td>
                  <td class="text-center"><?php echo $img->posicion; ?> </td>
                  <td class="text-center">
                    <?php if ($img->estado == 1): ?>
                      <button type="button" title="Desactivar" onclick="activar_prop(<?php echo $img->id ?>,'estado','0')" class="btn btn-md bg-green" name="button"><i class="ion ion-checkmark-round"></i></button>
                    <?php else: ?>
                      <button type="button" title="Activar" onclick="activar_prop(<?php echo $img->id ?>,'estado','1')" class="btn btn-md bg-red" name="button"><i class="ion ion-ios-close-outline"></i></button>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <div class="button-group">

                      <a href="<?php echo base_url()."admin/config/".$editar."/".$sucursal->id."/".$img->id; ?>" title="Editar Diapositiva"  class="btn btn-md bg-aqua" ><i class="ion ion-wrench"></i></a>
                      <a href="<?php echo base_url()."admin/config/eliminar_slide/".$img->id; ?>" title="Eliminar"  class="btn btn-md btn-danger" ><i class="ion ion-trash-b"></i></a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
        <?php else: ?>
          <table id="example1" class="table table-bordered table-striped nowrap" nowrap>
            <thead>
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Proveedor video</th>
                <th class="text-center">Link video</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($slides_video as $slide): ?>

                <tr>
                  <td class="text-center"><?php echo $slide->id ?></td>
                  <td class="text-center">
                    <?php if ($slide->proveedor_video == 1): ?>
                      <?php echo "Vimeo" ?>
                    <?php else: ?>
                      <?php echo "Youtube" ?>
                    <?php endif; ?>
                  </td>
                  <td class="text-center"><a href="<?php echo $slide->link_video ?>"><?php echo $slide->link_video ?></a></td>
                  <td class="text-center">
                    <?php if ($slide->estado == 1): ?>
                      <button type="button" title="Desactivar" onclick="estado_video(<?php echo $slide->id ?>,'0')" class="btn btn-md bg-green" name="button"><i class="ion ion-checkmark-round"></i></button>
                    <?php else: ?>
                      <button type="button" title="Activar" onclick="estado_video(<?php echo $slide->id ?>,'1')" class="btn btn-md bg-red" name="button"><i class="ion ion-ios-close-outline"></i></button>
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <div class="button-group">
                      <a href="<?php echo base_url()."admin/config/".$editar."/".$sucursal->id."/".$slide->id; ?>" title="Editar Diapositiva"  class="btn btn-md bg-aqua" ><i class="ion ion-wrench"></i></a>
                      <a href="<?php echo base_url()."admin/config/eliminar_slide/".$slide->id; ?>" title="Eliminar"  class="btn btn-md btn-danger" ><i class="ion ion-trash-b"></i></a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<script type="text/javascript">

function elimina_img(id,id_sucursal,url,posicion) {
  if (confirm("Desea eliminar esta imagen ?")) {
    $.post('<?php echo base_url()."admin/config/elimina_img"?>',{id:id,id_sucursal:id_sucursal,url:url,posicion:posicion},function(data){

      alert('Imagen eliminada exitosamente');

      window.location.reload();
    });
  }
}
function activar_prop(id,propiedad,estado) {
  let id_sucursal = document.getElementById('id_sucursal').value;
  $.post('<?php echo base_url()."admin/config/activar_prop"?>',{id:id,propiedad:propiedad,estado:estado,id_sucursal:id_sucursal},function(data){

    alert('Propiedad editada exitosamente');
    window.location.reload();
  });

}
function estado_video(id,estado) {
  let id_sucursal = document.getElementById('id_sucursal').value;
  $.post('<?php echo base_url()."admin/config/estado_video"?>',{id:id,estado:estado,id_sucursal:id_sucursal},function(data){

    alert('Estado modificado exitosamente');
    window.location.reload();
  });

}



</script>