<?php



	include ("funciones.php");
	include ("session.php");
	include ("database_min.php");



$e_mail= $_POST['e_mail']; 
$password= $_POST['password'];

	$consulta="SELECT * FROM `usuario` WHERE e_mail = '".$e_mail."' AND contrasenia = '".$password."' ";
	$resultado=db_query($consulta);

	

if(count($resultado)==1){
	    session_set("e_mail",$resultado[0]['e_mail']);
		session_set("uid",$resultado[0]['id_cuenta']);
		session_var_unset("error");
	
		
		header("Location: pantalla-principal.php");
	
	}else{ 
		$error= "No se pudo validar el usuario!!";
		session_set("error",$error);
		header("Location: error.php ");
	}



?>