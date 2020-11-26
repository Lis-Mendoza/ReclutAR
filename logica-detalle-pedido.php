<?php

include( "funciones.php" );
include( "database_min.php" );

$id=$_POST['id']; 
    
$consulta = "SELECT lp.*,p.nombre, p.precio_con_ganancia,
            (p.precio_con_ganancia * lp.cantidad) as subtotal 
            FROM linea_pedido_producto lp 
            join producto p on lp.id_producto=p.id 
            WHERE id_pedido=".$id;
$resultado = db_query( $consulta );


echo "

  <div class='breadcome-list map-mg-t-40-gl shadow-reset'>
    <div class='alert-title'>
      <div id='resp' >
        <div >
          <section class='content-header ' >
            <div class='login-title'>
              <h3>Expandí tu Negocio al Maximo</h3>
              <h1>Recordá que Muchos Venden Mejor que Uno!</h1>
            </div>
          </section>
            <section class='content-header  ' >
           <div class='mail-title inbox-bt-mg  '>
                                                
             <a class='btn btn-white btn-action btn-xs pull-rigth' href='javascript:window.location.href=window.location.href'><i class='fa fa-reply  '></i> Atras</a>
                                               
                                            </div>
</div>
          </section>
          
          
          <!-- /.box-header -->
          
          <div style='overflow-y: scroll;height:400px; width: 99%  ' >
            <table id='export_to_excel' class='table table-bordered table-striped ' >
              <thead>
                <tr>
             
                  <th>N° Pedido </th>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Precio Unitario</th>
                  <th>Subtotal</th>
              </thead>
              <tbody>
";

foreach ( $resultado as $fila ) {

  $id = ( isset( $fila[ 'id' ] ) ) ? $fila[ 'id' ] : 0;



  echo "<tr>

<td>" . "$fila[id_pedido]" . "</td>
<td>" . "$fila[nombre]" . "</td>
<td>" . "$fila[cantidad]" . "</td>
<td>" . "$fila[precio_con_ganancia]" . "</td>
<td>" . "$fila[subtotal]" . "</td>



</tr>";


}

echo "
</tbody>
<tfoot>
               <tr>
                 <th colspan='4'>Total</th>
                 <th id='total'>0</th>
               </tr>
               </tfoot>
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </div>

";


?>