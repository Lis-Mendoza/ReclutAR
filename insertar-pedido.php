<?php


include( "funciones.php" );
include( "session.php" );
include( "database.php" );


$user = session_get( "uid" );
$aux=0;
$consulta = "INSERT INTO pedidos (id_revendedor, estado, fecha) VALUES 
    (" . $_SESSION[ 'uid' ] . ",1, now())";
$resultado = db_query( $consulta );

if ( $resultado ) {

  $consulta2 = "SELECT id FROM `pedidos` ORDER BY id DESC LIMIT 1";
  $resultado2 = db_query( $consulta2 );


}

foreach($resultado2 as $fila){
    $aux=$fila['id'];
}

	

echo $aux ;


?>
