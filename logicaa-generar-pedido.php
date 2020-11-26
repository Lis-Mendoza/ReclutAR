<?php

include( "funciones.php" );
include( "database_min.php" );

$consulta = "SELECT * FROM  producto";
$resultado = db_query( $consulta );

foreach ( $resultado as $fila ) {

  echo "<option value='" . $fila[ id ] . "'>  " . $fila[ nombre ] . " </option>";
}

?>