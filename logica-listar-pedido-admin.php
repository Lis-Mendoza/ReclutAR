<?php

include( "funciones.php" );

include( "database.php" );


$consulta = "SELECT * FROM  pedidos ";
$resultado = db_query( $consulta );


foreach ( $resultado as $fila ) {

  $id = ( isset( $fila[ 'id' ] ) ) ? $fila[ 'id' ] : 0;

  if ( $fila[ 'estado' ] == 1 ) {
    $estado = '<div class="btn-group project-list-ad">
	   		<button class="btn btn-white btn-xs"> &nbsp;&nbsp;Aprobado&nbsp;&nbsp; </button>
		   		</div>';
  } else {
    $estado = '<div class="btn-group project-list-ad-rd">
			<button class="btn btn-white btn-xs">Rechazado</button>
				</div>';
  }

  echo "<tr>
<td>" . "$fila[id]" . "</td>
<td>" . "$fila[fecha]" . "</td>
<td>" . $estado . "</td>
<td>

    <div class='btn-group project-list-action'>

		<button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='send(this.value)';><i class='fa fa-eye'></i></button>
        
        <button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='aprobar(this.value)';>Aprobar</button>
        
         <button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='rechazar(this.value)';>Rechazar</button>
        
	</div>												
			
            
            

</td>

</tr>";


}

?>