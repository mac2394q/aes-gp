<?php 
  header("Access-Control-Allow-Origin: *");
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
  require_once(CONTROLLERS_PATH."plantillaController.php");
  require_once(MODEL_PATH."plantilla_alcance.php");
  require_once(MODEL_PATH."certificado.php");
  require_once(MODEL_PATH."grupo_plantilla_alcance.php");
  //$_POST['contadorCertificados'];
  $grupo = null;
  
  $modelPlantilla = new plantilla_alcance(
     null,
     $_POST['area'],
     strtoupper($_POST['pais']),
     strtoupper($_POST['etiqueta']),
     null
  );
  $objPlantilla = plantillaController::registrarPlantilla($modelPlantilla);
  if($objPlantilla == false){
    echo "<div class='alert round bg-danger alert-dismissible mb-2' role='alert'>
              <button   class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>×</span>
              </button>
              <strong>Oh tenemos un problema !</strong>El registro de la plantilla no puedo ser realizada consulte con su administrador del sistema!.
          </div>";
 
  }else{
    
        $id=plantillaController::ultimaPlantilla();
        //echo "xxx ".$id;
        for ($i=0; $i <intval($_POST['contadorCertificados']); $i++) { 
       
            $modelPlantillaGrupo = new grupo_plantilla_alcance(
              null,
              $id,
              $_POST['consecutivo'.$i],
              $_POST['etiquetaPlantilla'.$i]
            );
        
            
            plantillaController::registrarPlantillaGrupo($modelPlantillaGrupo);
        }
        echo "<div class='alert alert-success' role='alert'>
             <li class='fa fa-check-circle'></li> La plantilla se ha registrado correctamente , ahora debe agregar individualmente cada elemento a la plantilla creada ! &nbsp 
           </div>
           <a class='btn btn-info round btn-min-width mr-1 mb-1 waves-effect waves-light' href='".MODULE_APP_SERVER.'plantillas/agregarElementos.php?id='.$id."'  class='btn btn-gradient-primary text-white'><li class='fa fa-clipboard-list fa-2x'></li> &nbsp; Agregar nuevo requisito al capítulo</a>
             ";
    
    
    
  }
  ?>  