<?php



	include ("funciones.php");
	include ("session.php");

	include ("database_min.php");


$json =$_POST['lista'];
$pedido = json_decode($json, true)



	$consulta="";
	$resultado=db_query($consulta);

	

	
	
?>