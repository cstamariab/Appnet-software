
<style media="screen">
a {
color: #FFFFFF;
text-decoration: none;
}
</style>
<!-- Main content -->
<section class="content-header">
    <h1>
        Inicio
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url()."admin" ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
    </ol>
</section>
<br>

<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="<?= base_url()."public/admin/img_user/".$this->session->userdata('img_user'); ?>" alt="User profile picture">

                <h3 class="profile-username text-center"><?= $this->session->userdata('username'); ?></h3>

                <p class="text-muted text-center">Plan : <?php echo $datos_user->plan; ?></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Sucursales Activas :</b> <div class="pull-right"><?php echo $suc_activas ?></div>
                    </li>
                    <li class="list-group-item">
                        <b>Sucursales Desactivadas :</b> <div class="pull-right"><?php echo $suc_desact ?></div>
                    </li>
                    <li class="list-group-item">

                        <b>Expiracion : </b> <div class="pull-right"><?php echo $datos_user->fecha_finalizacion; ?></div>
                    </li>
                </ul>

                <a href="<?= base_url()."admin/login/logout"?>" class="btn btn-danger btn-block"><b>Salir</b></a>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->

        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li id="suc_x" class="active"><a href="#sucursales" data-toggle="tab">Resumen</a></li>

                <li id="perfil_x"><a href="#settings" data-toggle="tab">Perfil</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="sucursales">
                    <?php $i=0; foreach ($sucursales as  $suc): ?>

                        <?php switch ($i) {
                            case 0:
                                $color = "bg-light-blue";
                            break;
                            case 1:
                                $color = "bg-red";
                            break;
                            case 2:
                                $color = "bg-green";
                            break;
                            case 3:
                                $color = "bg-yellow";
                                $i = 0;
                            break;

                        } ?>

                        <div class="info-box <?php echo $color; ?>">
                            <span class="info-box-icon"><i class="ion ion-home"></i></span>

                            <div class="info-box-content">
                                
                                <span class="info-box-number"><a  target="_blank" href="<?php echo base_url().$suc->ruta ?>"><?php echo base_url().$suc->ruta ?></a></span>

                                <span class="progress-description">Template : <?php echo $suc->template; ?></span>
                                <span class="progress-description">
                                    <?php echo diapositivas($suc->id); ?>  / <?php echo $suc->slides ?> Diapositivas
                                </span>
                                <span class="progress-description">
                                     <?php echo size_folder($suc->ruta) ?> MB / <?php echo $suc->espacio_disco ?> MB Espacio Utilizado
                                </span>

                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    <?php $color="";$i++; endforeach; ?>


                    <!-- /.info-box -->


                    <!-- /.info-box -->
                </div>
                <!-- /.tab-pane -->


                <div class="tab-pane" id="settings">

                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <br>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Usuario</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo $datos_user->username; ?>" name="username" placeholder="Usuario">
                                <?php echo form_error('username', '<div class="label label-danger ">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email"  class="form-control" value="<?php echo $datos_user->email; ?>" name="email" placeholder="Email">
                                <?php echo form_error('email', '<div class="label label-danger ">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Imagen usuario</label>

                            <div class="col-sm-10">
                                <input type="file" name="userfile" size="20" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Color Skin</label>

                            <div class="col-sm-10">
                                <select class="form-control" name="color_skin">

                                    <option value="skin-blue" >Azul</option>
                                    <option value="skin-yellow" >Amarillo</option>
                                    <option value="skin-green" >Verde</option>
                                    <option value="skin-purple" >Purpura</option>
                                    <option value="skin-black" >Blanco</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                        <hr>
                        </form>
                        <form action="<?php echo base_url()."admin/index/cambio_contrasena" ?>" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Contraseña</label>
                                <input type="text" style="display:none">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                    <?php echo form_error('password', '<div class="label label-danger ">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Confirmar Contraseña</label>

                                <div class="col-sm-10">

                                    <input type="password" class="form-control" name="password2" placeholder="Confirmar Contraseña">
                                    <?php echo form_error('password2', '<div class="label label-danger ">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Cambiar Contraseña</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<?php if ($this->session->userdata('script')): ?>
    <?php echo $this->session->userdata('script'); ?>
<?php endif; ?>
