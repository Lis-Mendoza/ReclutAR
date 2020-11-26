<?php


include( "funciones.php" );
include( "session.php" );
include( "database_min.php" );


$nombre = addslashes( $_POST[ 'nombre' ] );
$rubro = addslashes( $_POST[ 'rubro' ] );
$e_mail = addslashes( $_POST[ 'e_mail' ] );
$domicilio =addslashes( $_POST[ 'domicilio' ] );
$telefono = addslashes( $_POST[ 'telefono' ] );
$foto = addslashes( $_POST[ 'foto' ] );
$duracion = addslashes( $_POST[ 'duracion' ] );
$fecha_inicio = addslashes( $_POST[ 'fecha_inicio' ] );
$minimo = addslashes( $_POST[ 'minimo' ] );
$porcentaje_revendedor = addslashes( $_POST[ 'porcentaje_revendedor' ] );
$bonificaciones = addslashes( $_POST[ 'bonificaciones' ] );


$consulta = "INSERT INTO `negocio`(`nombre`, `rubro`, `e_mail`, `domicilio`, `telefono`, `foto`, `duracion`, `fecha_inicio`, `minimo`, `porcentaje_revendedor`, `bonificaciones`) VALUES('" . $nombre . "','" . $rubro . "','" . $e_mail . "','" . $domicilio . "','" . $telefono . "','" . $foto . "','" . $duracion . "','" . $fecha_inicio . "','" . $minimo . "','" . $porcentaje_revendedor . "','" . $bonificaciones . "')";
$resultado = db_query( $consulta );


header( "Location: index.php?menu=login" );



?>