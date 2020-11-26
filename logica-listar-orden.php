<?php

include( "funciones.php" );

include( "database_min.php" );


$consulta = "SELECT * FROM  pedidos WHERE estado!=1 ";
$resultado = db_query( $consulta );


foreach ( $resultado as $fila ) {

  $id = ( isset( $fila[ 'id' ] ) ) ? $fila[ 'id' ] : 0;

  if ( $fila[ 'estado' ] == 1 ) {
    $estado = '<div class="btn-group project-list-ad">
	   		<button class="btn btn-white btn-xs"> &nbsp;&nbsp;Enviado&nbsp;&nbsp; </button>
		   		</div>';
  } else {
    $estado = '<div class="btn-group project-list-ad-rd">
			<button class="btn btn-white btn-xs">Guardado</button>
				</div>';
  }

  echo "<tr>
<td>" . "$fila[id]" . "</td>
<td>" . "$fila[fecha]" . "</td>
<td>" . $estado . "</td>
<td>

    <div class='btn-group project-list-action'>

		<button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='send(this.value)';><i class='fa fa-eye'></i></button>
		<button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='eliminar(this.value)';><i class='fa fa-trash'></i></button>
		<button class='btn btn-white btn-xs' value='" . $id . "' onclick='agregar(this.value)';>Enviar Pedido </button>
        
        		
	</div>
				
													
			
            
            

</td>

</tr>";


}

?>