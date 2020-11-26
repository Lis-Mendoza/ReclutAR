<?php

include( "funciones.php" );

include( "database_min.php" );


$consulta = "SELECT id,e_mail,nombre,apellido FROM `usuario` WHERE id_rol=2 and id_negocio=2";
$resultado = db_query( $consulta );

foreach ( $resultado as $fila ) {

  echo "<option value='" . $fila[ id ] . "'> " . $fila[ id ] . " " . $fila[ nombre ] . " " . $fila[ apellido ] . " - " . $fila[ e_mail ] . "</option>";
}
?>