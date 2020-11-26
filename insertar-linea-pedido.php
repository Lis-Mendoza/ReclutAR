<?php


include( "funciones.php" );
include( "session.php" );
include( "database.php" );

$pedido =$_POST['pedido'];
$id =$_POST['id'];
$cantidad =$_POST['cantidad'];



    $consulta = "INSERT INTO `linea_pedido_producto`(`id_pedido`, `id_producto`, `cantidad`) VALUES (".$pedido.", ".$id.",".$cantidad.");";
    $resultado = db_query( $consulta );
    

    echo json_encode($resultado);


    ?>

