
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
                  <a href="<?= base_url()."admin/config/configurar_sucursal/".$suc->id?>" title="Configurar Cabecera" class="btn btn-md btn-warning" ><i class="ion ion-wrench"></i></a>
                  <a href="<?= base_url()."admin/config/configurar_slides/".$suc->id?>" title="Ver Diapositivas" class="btn btn-success"><i class="ion ion-ios-albums-outline"></i></a>
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
