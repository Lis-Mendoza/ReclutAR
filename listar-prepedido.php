<?php

include( "funciones.php" );

include( "database_min.php" );


$nombre[] = $_POST[ "nombre" ];


$consulta = "SELECT * FROM  producto where id in (" . $nombre[ 0 ] . ")";
$resultado = db_query( $consulta );

echo "<div class='login-title'>
	 									
		<h3>Expandí tu Negocio al Maximo</h3>
												
		<h1>Recordá que Muchos Venden Mejor que Uno!</h1>
	
												
	</div>";

echo " <table  class='table table-bordered table-striped' id='tabla' >
               <thead>

               <tr>
			   <th>Id</th>
                 <th>Producto</th>
                 <th>Cantidad</th>
				 <th>Precio </th>
				 <th>Accion</th>
               </thead>
               <tbody>";


foreach ( $resultado as $fila ) {
  $id = ( isset( $fila[ 'id' ] ) ) ? $fila[ 'id' ] : 0;


  echo "<tr>
	<td>" . $fila[ 'id' ] . "</td>
			<td>" . $fila[ 'nombre' ] . "</td>
			
			<td><input type='number' value='1' id='cant' min='1' /></td>
			<td>" . $fila[ 'precio_con_ganancia' ] . "</td>
<td>
 <div class='btn-group project-list-action'>

		<button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='detalle(this.value)';><i class='fa fa-eye'></i></button>
		<button class='btn btn-white btn-action btn-xs' value='" . $id . "' onclick='eliminar(this.value)';><i class='fa fa-trash'></i></button>
		
	</div>
													
														

</td>


			</tr>";
}

echo "</tbody>
               
             </table>";
echo "<div>
<br></br>
															<div class='mail-title inbox-bt-mg  '>
                                                
                                                <div class='view-mail-action view-mail-ov-d-n'>
                                                    <a href='#'> Guardar Orden</a>
                                                    <a class='compose-draft-bt' href='#' onclick='cach()';> Enviar Pedido</a>
                                                    <a class='compose-discard-bt' href='pantalla-principal-revendedores.php?menu=ingreso-pedido'><i class='fa fa-reply  '></i> Atras</a>
                                                </div>
                                            </div>
</div>"
?>