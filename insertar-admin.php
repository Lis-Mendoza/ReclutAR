<?php



	include ("funciones.php");
	include ("session.php");
	include ("database_min.php");


$e_mail = $_POST['e_mail'];
$nombre= $_POST['nombre']; 
$apellido= $_POST['apellido'];
$dni= $_POST['dni']; 
$fecha_nacimiento= $_POST['fecha_nacimiento'];
$domicilio= $_POST['domicilio']; 
$telefono= $_POST['telefono']; 
$contrasenia= $_POST['contrasenia'];
$pregunta_secreta= $_POST['pregunta_secreta']; 
$respuesta_secreta= $_POST['respuesta_secreta'];


	$consulta="INSERT INTO `usuario`(`e_mail`, `nombre`, `apellido`, `dni`, `fecha_nacimiento`, `domicilio`, `telefono`, `fecha_alta`, `contrasenia`, `pregunta_secreta`, `respuesta_secreta`, `id_rol`, `estado`) VALUES ('".$e_mail."','".$nombre."','".$apellido."','".$dni."','".$fecha_nacimiento."','".$domicilio."','".$telefono."',now(),'".$contrasenia."','".$pregunta_secreta."','".$respuesta_secreta."',1,1)";
	$resultado=db_query($consulta);

	


		header("Location: index.php?menu=registro-perfil-negocio");
	
	
?>