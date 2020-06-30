<?php



	include ("funciones.php");
	include ("session.php");
	include ("database.php");



$usuario= $_POST['usuario']; 
$password= $_POST['password'];

	$consulta="SELECT * FROM `usuario` WHERE usuario = '".$usuario."' AND contrasenia = '".$password."' ";
	$resultado=db_query($consulta);

	

if(count($resultado)==1){
	    session_set("usuario",$resultado[0]['usuario']);
		session_set("uid",$resultado[0]['id_cuenta']);
		session_var_unset("error");
	
		
		header("Location: pantalla-principal.php");
	
	}else{ 
		$error= "No se pudo validar el usuario!!";
		session_set("error",$error);
		header("Location: error.php ");
	}






session_start(); 
	
	/*creamos un elemento en el array $_SESSION y le asignamos un valor.*/
	function session_set($nombre, $valor){
		$_SESSION[$nombre]=$valor;
	} 

	function session_get($nombre){
		if(isset($_SESSION[$nombre])){  //isset verifica la existencia de la variable
			return $_SESSION[$nombre];
		} else {
			return FALSE;
		}
	}

	function session_var_unset($nombre){
		if(isset($_SESSION[$nombre])){  //isset verifica la existencia de la variable
			unset($_SESSION[$nombre]);
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	function session_terminate(){
		session_unset();//Destruye todas las variables asociadas con la sesion en curso.
		session_destroy();//Destruye toda la info relacionada con la sesion incluyendo cookies.
	} 
?>