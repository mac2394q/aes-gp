<?php session_start(); ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php
       include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
       require_once (PLATFORM_PATH."global/inc/platform/head.php");
       require_once (LIB_PATH."session.php");
       require_once (CONTROLLERS_PATH."empresaController.php");
       require_once (CONTROLLERS_PATH."areaController.php");
       session::verificarSesion($_SESSION['idsesion']);
       date_default_timezone_set('America/Bogota');
       setlocale(LC_ALL,"es_CO");
  ?>
    <style>
        .user-profile {
            background: url(https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/app-assets/images/gallery/dark-menu.jpg) center center no-repeat;
        }

        .user-profile .user-info {
            background-color: rgba(0, 0, 0, 0.35);
        }
    </style>
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" style="zoom:75%">
    <!-- BEGIN: Header-->
    <?php require_once (PLATFORM_PATH."global/inc/component/fixed_top.php"); ?>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <?php require_once (PLATFORM_PATH."global/inc/component/main_menu.php"); ?>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-header row">
            <div class="content-header-dark bg-img col-12">
                <div class="row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <h3 class="content-header-title">Modulo Empresa</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Listado de empleados</a>
                                    </li>
                                    <li class="breadcrumb-item active">Registro de nuevo empleado
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- contendio -->
                <div class="text-black">
                    <section id="basic-form-layouts">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-form">A tener en cuenta</h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <div class="form row">
                                                <div class="form-group mb-1 col-sm-12 col-md-3">
                                                    <label for="projectinput3">
                                                        <h5 class="card-title"><span class="text-danger">*</span>
                                                            </span> Fecha de registro</h5>
                                                    </label>
                                                    <input type="date" id="fecha" class="form-control"
                                                        placeholder=". . . " name="fecha">
                                                </div>
                                                <div class="form-group mb-1  col-md-3">
                                                    <label for="email-addr">
                                                        <h5 class="card-title"><span class="text-danger">*</span>
                                                            Tipo:</h5>
                                                    </label>
                                                    <br><br>
                                                    <select class="form-control" id="tipo" name="tipo">
                                                        <option value="EMPRESA">EMPRESA</option>
                                                        <option value="REPRESENTANTE">REPRESENTANTE
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-1 col-md-4">
                                                    <label for="projectinput3">
                                                        <h5 class="card-title"><span class="text-danger">*</span>
                                                            </span> Tipo de documento </h5>
                                                    </label><br><br>
                                                    <input type="text" id="documento" class="form-control"
                                                        placeholder=". . . " name="documento">
                                                </div>
                                                <div class="form-group mb-1 col-sm-12 col-md-8">
                                                    <label for="projectinput3">
                                                        <h5 class="card-title"><span class="text-danger">*</span>
                                                            </span> Descripcion </h5>
                                                    </label>
                                                    <input type="text" id="descripcion" class="form-control"
                                                        placeholder=". . . " name="descripcion">
                                                </div>


                                            </div>

                                            <div class="form row ">
                                                <div class="form-group col-md-3">
                                                    <button id="registrarValidacion"
                                                        class="btn btn-success waves-effect waves-light">
                                                        <i class="fa fa-plus fa-2x"></i>&nbsp; Guardar validacion
                                                    </button>
                                                   
                                                </div>
                                              

                                            </div>
                                            <div id="smgValidacion"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
                <!--/ contendio -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Customizer-->
    <!-- End: Customizer-->
    <!-- Buynow Button-->
    <?php
    //require_once (PLATFORM_PATH."global/inc/component/customizer.php");
    //require_once (PLATFORM_PATH."global/inc/component/buy.php");
    require_once (PLATFORM_PATH."global/inc/component/footer.php");
    require_once (PLATFORM_PATH."global/inc/platform/lib.php");
    
  ?>
    <script src="<?php echo CORE_JS_SERVER."directory.js"; ?>"></script>
    <script src="<?php echo CORE_JS_SERVER."app.js"; ?>"></script>
    <script src="<?php echo PLATFORM_SERVER."modules/seguridad/triggers/module.js"; ?>"></script>

</body>
<!-- END: Body-->

</html>
