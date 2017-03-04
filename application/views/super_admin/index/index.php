<div class="row">
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $rpt_empresas_nuevas; ?></h3>

        <p>Empresas Nuevas</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="<?= base_url()."super_admin/index/index/nuevas"?>" class="small-box-footer">Ver detalle <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $rpt_empresas_activas; ?></h3>
        <p>Empresas Activas</p>
      </div>
      <div class="icon">
        <i class="ion ion-checkmark-round"></i>
      </div>
      <a href="<?= base_url()."super_admin/index/index/activas"?>" class="small-box-footer" onclick="ver_reporte_empresa('activas')">Ver detalle <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $rpt_planes_x_vencer; ?></h3>
        <p>Planes por Vencer</p>
      </div>
      <div class="icon">
        <i class="ion ion-document-text"></i>
      </div>
      <a href="<?= base_url()."super_admin/index/index/x_vencer"?>" class="small-box-footer" >Ver detalle <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $rpt_planes_vencen_hoy; ?></h3>

        <p>Vencen Hoy</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-timer-outline"></i>
      </div>
      <a href="<?= base_url()."super_admin/index/index/vencen_hoy"?>"  class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-primary">
      <div class="inner">
        <h3><?php echo $rpt_empresas_desactivadas; ?></h3>

        <p>Empresas Desactivadas</p>
      </div>
      <div class="icon">
        <i class="ion ion-close-round"></i>
      </div>
      <a href="<?= base_url()."super_admin/index/index/desactivadas"?>"  class="small-box-footer">Ver Detalle <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $rpt_sucursales_activas; ?></h3>
        <p>Sucursales Activas</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-home"></i>
      </div>
      <p class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></p>
    </div>
  </div>
</div>
  <?php if ($datos): ?>
<div class="box box-info" id="table_sucursales">
  <div class="box-header with-border">
    <h3 class="box-title">Detalle</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <!-- /.box-header -->


  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <thead>
          <tr>
            <th>Empresa</th>
            <th>Fecha Activacion</th>
            <th>Fecha Finalizacion</th>
            <th>Sucursales</th>
          </tr>
        </thead>
        <tbody id="tabla_datos">
          <?php foreach ($datos as $dat): ?>
            <tr>
              <td><p ><?php echo $dat->empresa ?></p></td>
              <td><p ><?php echo $dat->fecha_activacion ?></p></td>
              <td><p ><?php echo $dat->fecha_finalizacion ?></p></td>
              <td><p ><?php echo $dat->sucursales ?></p></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.box-body -->

<?php endif; ?>

  <!-- /.box-footer -->
</div>
<!-- /.box -->
