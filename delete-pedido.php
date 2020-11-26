<?php

include( "funciones.php" );

include( "database_min.php" );


$json = addslashes( $_POST[ 'id' ] );
$id = json_decode( $json, true );

$consulta = "SELECT * FROM `linea_pedido_producto` WHERE id_pedido=" . $id;
$resultado = db_query( $consulta );

foreach($resultado as $fila){
    
 $consulta2 = "DELETE FROM `linea_pedido_producto` WHERE id=". $fila['id'];
 $resultado2 = db_query( $consulta2 );   
}

$consulta3 = "DELETE FROM `pedidos` WHERE id=" . $id;
$resultado3 = db_query( $consulta3 );


?>