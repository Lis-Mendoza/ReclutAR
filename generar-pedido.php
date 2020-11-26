<?php

include( "funciones.php" );

include( "database.php" );


$json =  $_POST[ 'id' ];
$id = json_decode( $json, true );

$consulta = "UPDATE pedidos SET estado=1 where id=" . $id;
$resultado = db_query( $consulta );


?>