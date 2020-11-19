<?php



	include ("funciones.php");

	include ("database_min.php");


$nombre= $_POST['nombre']; 
$descripcion= $_POST['descripcion'];
$foto= $_POST['foto']; 
$fecha_ingreso= $_POST['fecha_ingreso'];
$fecha_vencimiento= $_POST['fecha_vencimiento'];
$precio_costo= $_POST['precio_costo']; 
$precio_con_ganancia= $_POST['precio_con_ganancia']; 
$cantidad= $_POST['cantidad']; 
$stock_minimo= $_POST['stock_minimo'];
$stock_maximo= $_POST['stock_maximo']; 


	$consulta="INSERT INTO `producto` (`nombre`, `descripcion`, `foto`, `fecha_ingreso`, `fecha_vencimiento`, `precio_costo`, `precio_con_ganancia`, `cantidad`, `stock_minimo`, `stock_maximo`, `estado`) VALUES ('".$nombre."','".$descripcion."','".$foto."','".$fecha_ingreso."','".$fecha_vencimiento."','".$precio_costo."','".$precio_con_ganancia."','".$cantidad."','".$stock_minimo."','".$stock_maximo."',1)";
	$resultado=db_query($consulta);

	


		header("Location: pantalla-principal.php?menu=ingreso-producto");
	
	
?>