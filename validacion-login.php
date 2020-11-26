<?php


include( "funciones.php" );
include( "session.php" );
include( "database_min.php" );


$e_mail =addslashes( $_POST[ 'e_mail' ]); 


$password = addslashes( $_POST[ 'password' ]) ;

$consulta = "SELECT * FROM `usuario` WHERE e_mail = '" . $e_mail . "' 
AND contrasenia = '" . sha1( $password  ). "'";
$resultado = db_query( $consulta );


if ( count( $resultado ) == 1 ) {
  session_set( "e_mail", $resultado[ 0 ][ 'e_mail' ] );
  session_set( "uid", $resultado[ 0 ][ 'id' ] );
  session_set( "nid", $resultado[ 0 ][ 'id_negocio' ] );
  session_var_unset( "error" );


  if ( $resultado[ 0 ][ 'id_rol' ] == 1 ) {
    session_set( "id_rol", 1 );
    header( "Location: pantalla-principal.php" );

  } else {
    session_set( "id_rol", 2 );
    header( "Location: pantalla-principal-revendedores.php" );

  }


} else {
  $error = "No se pudo validar el usuario!!";
  session_set( "error", $error );
  header( "Location: error.php " );
}


?>