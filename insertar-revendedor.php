<?php


include( "funciones.php" );
include( "session.php" );
include( "database_min.php" );


$e_mail = addslashes( $_POST[ 'e_mail' ] );
$nombre = addslashes( $_POST[ 'nombre' ] );
$apellido = addslashes( $_POST[ 'apellido' ] );
$dni = addslashes( $_POST[ 'dni' ] );
$fecha_nacimiento = addslashes( $_POST[ 'fecha_nacimiento' ] );
$domicilio = addslashes( $_POST[ 'domicilio' ] );
$telefono = addslashes( $_POST[ 'telefono' ] );
$contrasenia = addslashes( $_POST[ 'contrasenia' ] );
$pregunta_secreta = addslashes( $_POST[ 'pregunta_secreta' ] );
$respuesta_secreta = addslashes( $_POST[ 'respuesta_secreta' ] );
$referente = addslashes( $_POST[ 'referente' ] );


$consulta = "INSERT INTO `usuario`(`e_mail`, `nombre`, `apellido`, `dni`, `fecha_nacimiento`, `domicilio`, `telefono`, `fecha_alta`, `contrasenia`, `pregunta_secreta`, `respuesta_secreta`, `referente`, `bonificacion`, `id_rol`,`id_negocio`) VALUES('" . $e_mail . "','" . $nombre . "','" . $apellido . "','" . $dni . "','" . $fecha_nacimiento . "','" . $domicilio . "','" . $telefono . "',now(),'" .  $contrasenia  . "','" . $pregunta_secreta . "','" . $respuesta_secreta . "','" . $referente . "',0,2,2)";
$resultado = db_query( $consulta );


header( "Location: pantalla-principal.php" );


?>