<?php session_start(); ?>
<!DOCTYPE html>
<html class="loading" lang="es-ES" data-textdirection="ltr">
<head>
    <?php
       include_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
       require_once (PLATFORM_PATH."global/inc/platform/head.php");
       require_once (LIB_PATH."session.php");
       require_once (CONTROLLERS_PATH."empresaController.php");
       require_once (CONTROLLERS_PATH."areaController.php");
       require_once (CONTROLLERS_PATH."plantillaController.php");
       session::verificarSesion($_SESSION['idsesion']);
       date_default_timezone_set('America/Bogota');
       setlocale(LC_ALL,"es_CO");
       //echo "xcx".$_GET['id'];
       $objPlantilla = plantillaController::itemId($_GET['id']);
       $objGupo = plantillaController::grupoId($objPlantilla->getId_grupo_plantilla_certificacion());
       //print_r( $objGupo);
      //  echo "id".$_SESSION['idusuario'];
      //print_r($_SESSION);
    ?>
</head>
<body class="vertical-layout vertical-menu-modern material-vertical-layout material-layout 2-columns   fixed-navbar"
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" style="zoom:75%;">

    <input type="hidden"  name="idplantilla" value="<?php echo $_GET['id']; ?>" />
    <!-- fixed-top-->
    <?php
    /* top bar  */
    require_once (PLATFORM_PATH."global/inc/component/fixed_top.php");
    /* Menu  */
    require_once (PLATFORM_PATH."global/inc/component/main_menu.php");
  ?>
    <div class="app-content content">
    <div class="content-header row">
                <div class="content-header-dark bg-img col-12">
                    <div class="row">
                        <div class="content-header-left col-md-9 col-12 mb-2">
                            <h3 class="content-header-title titulo">Módulo Plantilla</h3>
                            <div class="row breadcrumbs-top">
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item parrafo"><a class="text-black" href="index.php">Listado </a>
                                        </li>
                                        <li class="breadcrumb-item parrafo"><a class="text-black" href="<?php echo "verFicha.php?id=".$objGupo->getId_plantilla_alcance(); ?>">Plantilla y  Capítulos</a>
                                        </li>
                                        <li class="breadcrumb-item parrafo"><a class="text-black" href="<?php echo "verCapitulos.php?id=".$objPlantilla->getId_grupo_plantilla_certificacion(); ?>">Listado de Requistos</a>
                                        </li>
                                        <li class="breadcrumb-item active parrafo text-black">Requisito
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
                <div class="content-body">
                    <section id="basic-form-layouts">
                        <div class="row match-height">
                           
        
                          
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="form-section"><i class="fa fa-business-time"></i>
                                            Elementos de Plantilla</h2>
                                            <a href="<?php echo "agregarElementos.php?id=".$objGupo->getId_plantilla_alcance();?>" class="btn capa text-white  round btn-sm"><i class="fa fa-folder-plus fa-2x"></i>&nbsp;  Agregar Requisito  al Capítulo</a>
                                       
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <div class="repeater-default">
                                                <div >
                                                    <div  style="">
                                                        <div id="smgPlantilla"></div>
                                                        <form class="form row">
                                                            
                                                            <div class="form-group mb-1 col-sm-12 col-md-4">
                                                                <label for="projectinput3">
                                                                    <h5 class="card-title">
                                                                        <span class="text-danger">*</span>
                                                                        <li class="fa fa-audio-description"></li>
                                                                        Numeral / Requisito
                                                                    </h5>
                                                                </label>
                                                                <input type="text" id="projectinput3"
                                                                    class="form-control" placeholder=". . . "
                                                                    name="etiquetaPlantilla" value="<?php echo $objPlantilla->getEtiqueta_item_plantilla();    ?>">
                                                            </div>
                                                            <div class="form-group mb-1 col-sm-12 col-md-4">
                                                            <div class="form-group col-sm-12 col-md-2 text-center ">
                                                                <a href="#" id="editarItem"
                                                                class="btn capa text-white  round btn-sm">  <i class="fa fa-edit fa-2x"></i>&nbsp; Modificar Requisito</a>
                                                            </div>
                                                            </div>
                                                            
                                                            <div class="form-group mb-1 col-sm-12 col-md-12">
                                                                <label for="projectinput3">
                                                                    <h5 class="card-title">
                                                                        <span class="text-danger">*</span>
                                                                        <li class="fa fa-digital-tachograph"></li>
                                                                        Descripción del Requisito
                                                                    </h5>
                                                                </label>
                                                                <textarea class="form-control" id="textarea2"
                                                                    name="textarea2" rows="15" cols="50"><?php  echo $objPlantilla->getDescripcion_item_plantilla();  ?></textarea>
                                                            </div>
                                                            <br>
                                                            <hr>
                                                            <div class="form-group col-sm-12 col-md-2 text-center ">
                                                                <a href="#" id="editarItem"
                                                                class="btn capa text-white  round btn-sm">  <i class="fa fa-edit fa-2x"></i>&nbsp; Modificar Requisito</a>
                                                            </div>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        
                </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php
    //require_once (PLATFORM_PATH."global/inc/component/customizer.php");
    //require_once (PLATFORM_PATH."global/inc/component/buy.php");
    require_once (PLATFORM_PATH."global/inc/component/footer.php");
    require_once (PLATFORM_PATH."global/inc/platform/lib.php");
    
  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="<?php echo CORE_JS_SERVER."directory.js"; ?>"></script>
    <script src="<?php echo CORE_JS_SERVER."app.js"; ?>"></script>
    <script src="<?php echo PLATFORM_SERVER."modules/plantillas/triggers/module.js"; ?>"></script>
    <script>
        $(document).on('click', '#agregarCertificado', function (e) {
            var contador = document.getElementsByName("certificadosDinamicos")[0].value;
            //alert(contador);
            contador = parseInt(contador) + 1;
            //alert(contador);
            document.getElementsByName("certificadosDinamicos")[0].value = contador;
        });
        $(document).on('click', '#eliminarCertificado', function (e) {
            var contador = document.getElementsByName("certificadosDinamicos")[0].value;
            if (parseInt(contador) > 0) {
                //alert(contador);
                contador = parseInt(contador) - 1;
                //alert(contador);
                document.getElementsByName("certificadosDinamicos")[0].value = contador;
            }
        });
    </script>
</body>
</html>