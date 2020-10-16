<?php

	session_start(); 
	
	/*creamos un elemento en el array $_SESSION y le asignamos un valor.*/
	function session_set($nombre, $valor){
		$_SESSION[$nombre]=$valor;
	}
	
	/*Buscamos un elemento en el array $_SESSION y devolvemos su valor*/
	function session_get($nombre){
		if(isset($_SESSION[$nombre])){  //isset verifica la existencia de la variable
			return $_SESSION[$nombre];
		} else {
			return FALSE;
		}
	}
	/*Buscamos un elemento en el array $_SESSION y eliminamos su valor*/
	function session_var_unset($nombre){
		if(isset($_SESSION[$nombre])){  //isset verifica la existencia de la variable
			unset($_SESSION[$nombre]);
			return TRUE;
		} else {
			return FALSE;
		}
	}
	/*Finalizamos la sesion liberando los recursos asignados.*/
	function session_terminate(){
		session_unset();//Destruye todas las variables asociadas con la sesion en curso.
		session_destroy();//Destruye toda la info relacionada con la sesion incluyendo cookies.
	}
?>