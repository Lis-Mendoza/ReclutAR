<?php

include( "funciones.php" );

include( "database_min.php" );


$json = addslashes( $_POST[ 'id' ] );
$id = json_decode( $json, true );

$consulta = "UPDATE pedidos SET estado=0 where id=" . $id;
$resultado = db_query( $consulta );


?>