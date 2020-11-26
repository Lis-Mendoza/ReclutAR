<?php


include( "funciones.php" );

include( "database_min.php" );


$nombre = addslashes( $_POST[ 'nombre' ] );
$descripcion = addslashes( $_POST[ 'descripcion' ] );
$foto = addslashes( $_POST[ 'foto' ] );
$fecha_ingreso = addslashes( $_POST[ 'fecha_ingreso' ] );
$fecha_vencimiento = addslashes( $_POST[ 'fecha_vencimiento' ] );
$precio_costo = addslashes( $_POST[ 'precio_costo' ] );
$precio_con_ganancia = addslashes( $_POST[ 'precio_con_ganancia' ] );
$cantidad = addslashes( $_POST[ 'cantidad' ] );
$stock_minimo = addslashes( $_POST[ 'stock_minimo' ] );
$stock_maximo = addslashes( $_POST[ 'stock_maximo' ] );


$consulta = "INSERT INTO `producto` (`nombre`, `descripcion`, `foto`, `fecha_ingreso`, `fecha_vencimiento`, `precio_costo`, `precio_con_ganancia`, `cantidad`, `stock_minimo`, `stock_maximo`, `estado`) VALUES ('" . $nombre . "','" . $descripcion . "','" . $foto . "','" . $fecha_ingreso . "','" . $fecha_vencimiento . "','" . $precio_costo . "','" . $precio_con_ganancia . "','" . $cantidad . "','" . $stock_minimo . "','" . $stock_maximo . "',1)";
$resultado = db_query( $consulta );


header( "Location: pantalla-principal.php?menu=ingreso-producto" );


?>