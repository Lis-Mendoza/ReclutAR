<?php



	include ("funciones.php");
	include ("session.php");

	include ("database_min.php");



$nombre= $_POST['nombre']; 
$rubro= $_POST['rubro'];
$e_mail= $_POST['e_mail']; 
$domicilio= $_POST['domicilio']; 
$telefono= $_POST['telefono']; 
$foto = $_POST['foto'];
$fecha_inicio = $_POST['fecha_inicio'];
$minimo = $_POST['minimo'];
$porcentaje_revendedor = $_POST['porcentaje_revendedor'];
$bonificaciones = $_POST['bonificaciones'];


	$consulta="INSERT INTO `negocio`(`nombre`, `rubro`, `e_mail`, `domicilio`, `telefono`, `foto`,  `fecha_inicio`, `minimo`, `porcentaje_revendedor`, `bonificaciones`) VALUES('".$nombre."','".$rubro."','".$e_mail."','".$domicilio."','".$telefono."','".$foto."','".$fecha_inicio."','".$minimo."','".$porcentaje_revendedor."','".$bonificaciones."')";
	$resultado=db_query($consulta);

	


		header("Location: index.php?menu=login");
	
	
?>