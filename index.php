<?php
//requiere por unica ves el modelo que contiene la base de datos;
require_once 'model/database.php';
session_start();
// hora actual de peru
// date_default_timezone_set('America/Bogota');
// http://localhost/pdo_mvc/index.php? c=contrador & a=accion & id=identificador
// var_dump(isset($_SESSION["user"]));

$controller = array('Login','Productos');
$valor_c = isset($_REQUEST['c'])? $_REQUEST['c']: null ;
$valor_a = isset($_REQUEST['a'])? $_REQUEST['a']: 'Index' ;
$session_auth = isset($_SESSION["user"]);
$value_auth = "";
autocarga($valor_c,$valor_a,$controller,$session_auth);
// limpiar_post();
function autocarga($c,$a,$array_controller,$session_auth){
	//verifica que tenga permitido el acceso al controlador
	$estado = in_array($c, $array_controller);
	if($session_auth == true){
		$value_auth = $_SESSION;
	}

	if($session_auth == false){
		$c = $array_controller[0];

	}else if(!$estado){
		$c = $array_controller[1];
		$a = 'Index';
	}
	try {
		if(!isset($c)){//no existe
			require_once ("controller/$c.controller.php");
			$controller = ucwords($c).'Controller';
			// echo $controller;
			$controller = new $controller;
			$controller->Index();
		}else{
			if(isset($c) || isset($a)){ //si existe
				$controller = strtolower($c);
				$accion = isset($a)? $a: 'Index' ;

				require_once "controller/$controller.controller.php";
				$controller = ucwords($controller).'Controller';
				// echo $controller."/".$accion;
				$controller = new $controller;
				//llama a el controlador
				call_user_func(array($controller,$accion));
				// echo $valor;
				}else{
					header('Location: index.php');
			}
		}
	} catch (Exception $e) {
		header('Location: index.php');
	}
}

