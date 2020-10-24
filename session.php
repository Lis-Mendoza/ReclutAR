<?php

	session_start(); 
	
	/*creamos un elemento en el array $_SESSION y le asignamos un valor.*/
	function session_set($e_mail, $valor){
		$_SESSION[$e_mail]=$valor;
	}
	
	/*Buscamos un elemento en el array $_SESSION y devolvemos su valor*/
	function session_get($e_mail){
		if(isset($_SESSION[$e_mail])){  //isset verifica la existencia de la variable
			return $_SESSION[$e_mail];
		} else {
			return FALSE;
		}
	}
	/*Buscamos un elemento en el array $_SESSION y eliminamos su valor*/
	function session_var_unset($e_mail){
		if(isset($_SESSION[$e_mail])){  //isset verifica la existencia de la variable
			unset($_SESSION[$e_mail]);
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