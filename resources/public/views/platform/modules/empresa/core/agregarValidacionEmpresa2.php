<?php 
	header("Access-Control-Allow-Origin: *");
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once($_SERVER['DOCUMENT_ROOT'].'/conf.php');
	require_once(CONTROLLERS_PATH."empresaController.php");
    require_once(PROVIDERS_PATH."pdo/seguridadDao.php");
    require_once(MODEL_PATH."asignacion_validacion_empresa.php");


    $model_asignacion= new asignacion_validacion_empresa(
        $_POST['idempresa'],
        $_POST['REPRESENTANTE'],
        strtoupper($_POST['descripcion3'])
    );
    //print_r($model_asignacion);

    seguridadDao::registrarAsignacion($model_asignacion);
    $directorio=DOCUMENTS_PATH."documentos/empresa/".$_POST['idempresa'];

  if(!is_dir($directorio)){ if(!mkdir($directorio, 0755,true)) {die('Fallo al crear las carpetas...'); }}
  $temp_archivo = $_FILES["filea"]["tmp_name"];
  $f1=move_uploaded_file($temp_archivo,$directorio . "/".$_POST['idempresa']."_".$_POST['REPRESENTANTE']);
  //echo $f1;

  $url =PLATFORM_SERVER."modules/empresa/seguridad.php?id=".$_POST['idempresa']; 
  //empresaController::retornarVista($url);     

?>