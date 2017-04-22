<section class="content-header">
  <h1>
    Listado Sucursales
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url()."admin"?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Listado Sucursales</li>
  </ol>
</section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Listado Sucursales</h3>
    </div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center">Empresa</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Template</th>
            <th class="text-center">Ruta</th>
            <th class="text-center">MB Utilizados</th>
            <th class="text-center">Diapositivas Disponibles</th>
            <th class="text-center">*</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($sucursales as $suc): ?>
            <tr>
              <td class="text-center"><strong><?php echo $suc->empresa ?></strong></td>
              <td class="text-center"><strong><?php echo $suc->nombre ?></strong></td>
              <td class="text-center"><?php echo $suc->template ?></td>
              <td class="text-center"><a target="_blank" href="<?php echo base_url().$suc->ruta; ?>"><?php echo base_url().$suc->ruta; ?></a></td>
              <td class="text-center"><?php echo size_folder($suc->ruta) ?> MB / <?php echo round($suc->espacio_disco/cantidad_sucursales_empresa($suc->id_empresa)) ?> MB</td>
              <td class="text-center"><?php echo diapositivas($suc->id) ?> / <?php echo $suc->slides ?></td>
              <td class="text-center">
                <div class="button-group">
                  <?php switch ($suc->template) {
                    case 'basico_4':
                      ?>
                        <a href="<?= base_url()."admin/config/conf_tmp_4/".$suc->id?>" title="Configurar Contenido" class="btn btn-xs btn-success" ><i class="ion ion-wrench"></i></a>
                      <?php
                    break;

                    default:
                    ?><a href="<?= base_url()."admin/config/configurar_sucursal/".$suc->id?>" title="Configurar Cabecera" class="btn btn-xs btn-warning" ><i class="ion ion-wrench"></i></a>
                      <a href="<?= base_url()."admin/config/configurar_slides/".$suc->id?>" title="Ver Diapositivas" class="btn btn-xs btn-success"><i class="ion ion-ios-albums-outline"></i></a> <?php
                      break;
                  } ?>

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
