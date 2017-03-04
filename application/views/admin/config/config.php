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
    Configuracion Cabecera Sucursal

  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url()."admin"?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Configurar Sucursal</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Template</h3>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group text-center">
              <select class="form-control" name="template" id="template">
                <?php foreach ($templates as  $tmp): ?>
                  <?php if($sucursal->id_template == $tmp->id){?>
                    <option value="<?php echo $tmp->id; ?>" selected ><?php echo $tmp->nombre ?></option>
                    <?php } ?>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <input type="hidden" id="id_sucursal" value="<?php echo $sucursal->id; ?>">
    <input type="hidden" id="template_bd" value="<?php echo $sucursal->id_template; ?>">
    <!-- /.row -->
    <div class="row">

      <div class="box box-primary" id="basico_1">
        <form role="form" action="" method="post" enctype="multipart/form-data">
          <div class="box-header with-border">
            <h3 class="box-title">Configurando : <strong><?php echo $sucursal->template; ?></strong></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

          <input type="hidden" name="id_sucursal" value="<?php echo $sucursal->id; ?>">
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Logo</label>
                <br>
                <input type="file" name="logo"  />
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="exampleInputEmail1">Activa Logo</label>
                <br>
                <input type="checkbox" name="activa_logo" <?php if ($conf->activa_logo == 1) {echo "checked";}?> >
              </div>
            </div>
            <input type="hidden" name="color_titulo" value="">
            <input type="hidden" name="size_titulo" value="">
            <input style="display:none;" type="file" name="banner"  />
            <!-- <div class="col-md-6">
            <div class="form-group text-center">
            <label for="exampleInputFile">Imagen Fondo</label>
            <input type="file" name="img_fondo"  />
          </div>
        </div> -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <button type="submit" class="btn btn-lg btn-primary" onclick="loading()">Actualizar</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
  <div class="box box-primary" id="basico_2">
    <form role="form" action="<?php echo base_url()."admin/config/configurar_sucursal/".$sucursal->id ?>" method="post" enctype="multipart/form-data">
      <div class="box-header with-border">
        <h3 class="box-title">Configurando : <strong><?php echo $sucursal->template; ?></strong></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <input type="hidden" name="id_sucursal" value="<?php echo $sucursal->id; ?>">
      <div class="box-body">
        <div class="col-md-12">
          <div class="form-group">
            <label for="exampleInputPassword1">Titulo</label>
            <input type="titulo" name="titulo" value="<?php echo $conf->titulo; ?>" class="form-control" placeholder="Titulo" />
          </div>

        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Color titulo </label>
            <div class="input-group my-colorpicker2">
              <input type="text" class="form-control" name="color_titulo" value="<?php echo $conf->color_titulo ?>" >
              <div class="input-group-addon">
                <i></i>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Tamaño Titulo</label>
            <div class="input-group">
              <input type="number" class="form-control" name="size_titulo" value="<?php echo $conf->size_titulo ?>" >
            </div>
          </div>
          
        </div>
        <div style="clear:both"></div>
        <div class="col-md-6">
          <div class="form-group ">
            <label for="exampleInputEmail1">Logo</label>
            <input type="file" name="logo"  />
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputFile">Imagen Fondo</label>
            <input type="file" name="img_fondo" />
          </div>
        </div>
      </div>
      <div class="col-md-2 center-block">
        <div class="form-group">
          <label for="exampleInputEmail1">Activa Logo</label>
          <br>
          <input type="checkbox" name="activa_logo" <?php if ($conf->activa_logo == 1) {echo "checked";}?> >
        </div>
      </div>
      <div style="clear:both">

      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <button type="submit" class="btn btn-lg btn-primary" onclick="loading()">Actualizar</button>
      </div>
    </form>

  </div>
  <div class="box box-primary" id="video_1">
    <form role="form" action="" method="post" enctype="multipart/form-data">
      <div class="box-header with-border">
        <h3 class="box-title">Configurando : <strong><?php echo $sucursal->template; ?></strong></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <input type="hidden" name="id_sucursal" value="<?php echo $sucursal->id; ?>">
      <div class="box-body">
        <div class="col-md-6">
          <div class="form-group text-center">
            <label for="exampleInputEmail1">Logo</label>
            <input type="file" name="logo"  />
          </div>
        </div>
        <input style="display:none;" type="file" name="banner"  />
        <div class="col-md-6">
          <div class="form-group text-center">
            <label for="exampleInputFile">Imagen Fondo</label>
            <input type="file" name="img_fondo"  />
          </div>
        </div>
        <input type="hidden" name="color_titulo" value="">
        <input type="hidden" name="size_titulo" value="">
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <button type="submit" class="btn btn-lg btn-primary" onclick="loading()">Actualizar</button>
      </div>
    </form>
  </div>
  <!-- /.box -->

  <!-- <div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Pre-visualizacion</h3>
</div>
<div class="box-body">
<div class="col-md-12">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="<?php echo base_url().$sucursal->ruta ?>"></iframe>
</div>
</div>
</div>

</div> -->

<div class="box box-primary">
  <div class="box-header with-border">
    <h3>Imagenes Cabecera</h3>
  </div>
  <div class="box-body">
    <?php if (!$img_conf): ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-warning">
            No hay imagenes disponibles.
          </div>
        </div>
      </div>
    <?php else: ?>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Url Imagen</th>
            <th class="text-center">Posicion</th>
            <th class="text-center">Tamaño</th>
            <th class="text-center">Estado</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($img_conf as $img): ?>
            <tr>
              <td class="text-center"><?php echo $img->id ?></td>
              <td class="text-center"><a target="_blank" href="<?php echo base_url()."public/sucursales/".$sucursal->ruta."/".$img->url_imagen ?>"><?php echo $sucursal->ruta."/".$img->url_imagen ?></a></td>
              <td class="text-center"><strong><?php echo $img->posicion ?></strong></td>
              <td class="text-center"><?php echo $img->size; ?> MB</td>
              <td class="text-center">
                <?php if ($img->estado == 1): ?>
                  <label for="" class="btn btn-md btn-success" title="ACTIVADO"><i class="glyphicon glyphicon-check"></i></label>
                <?php else: ?>
                  <button type="button"  title="Activar" onclick="cambiar_img(<?php echo $img->id ?>,<?php echo $sucursal->id ?>,'<?php echo $img->url_imagen ?>','<?php echo $img->posicion ?>')" class="btn btn-md btn-danger" name="button"><i class="glyphicon glyphicon-remove"></i></button>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <div class="button-group">
                  <button title="Eliminar" onclick="elimina_img(<?php echo $img->id ?>,<?php echo $sucursal->id ?>,'<?php echo $img->url_imagen ?>','<?php echo $img->posicion ?>')" class="btn btn-md btn-danger" ><i class="ion ion-trash-a"></i></button>
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
$(document).ready(function(){

  $('#basico_1').hide();
  $('#basico_2').hide();
  $('#video_1').hide();

  let template_bd = $('#template_bd').val();

  switch (template_bd) {
    case "1":
    $('#basico_1').show();
    $('#basico2').hide();
    $('#video_1').hide();
    break;
    case "2": case "3":
    $('#basico_1').hide();
    $('#basico_2').show();
    $('#video_1').hide();
    break;
    case "4":
    $('#basico_1').hide();
    $('#basico_2').hide();
    $('#video_1').hide();
    break;
    case "5":
    $('#basico_1').hide();
    $('#basico_2').hide();
    $('#basico_3').hide();
    $('#video_1').show();
    break;

    break;
    default:

  }
  $( "#template" ).change(function() {
    let id = $(this).val();
    let id_sucursal = $('#id_sucursal').val();
    if (confirm('¿ Esta seguro que desea cambiar la plantilla ?')) {
      $.post('<?php echo base_url()."admin/config/change_template" ?>',{id:id,id_sucursal:id_sucursal},function(){

        window.location.reload();
      });
    }
  });
  //FANCYBOX
  //https://github.com/fancyapps/fancyBox

});
function elimina_img(id,id_sucursal,url,posicion) {
  if (confirm("Desea eliminar esta imagen ?")) {
    $.post('<?php echo base_url()."admin/config/elimina_img"?>',{id:id,id_sucursal:id_sucursal,url:url,posicion:posicion},function(data){

      alert('Imagen eliminada exitosamente');

      window.location.reload();
    });
  }
}
function cambiar_img(id,id_sucursal,url,posicion) {
  if (confirm("Desea activar esta imagen ?")) {
    $.post('<?php echo base_url()."admin/config/cambiar_img"?>',{id:id,id_sucursal:id_sucursal,url:url,posicion:posicion},function(data){

      alert('Imagen cambiada exitosamente');

      window.location.reload();
    });
  }
}



</script>