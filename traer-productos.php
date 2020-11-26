<?php

include( "funciones.php" );

include( "database_min.php" );


$consulta = "SELECT * FROM  producto WHERE estado=1";
$resultado = db_query( $consulta );


foreach ( $resultado as $fila ) {


  echo "<div class='col-lg-4'>
       <div class='personal-info-wrap shadow-reset'>
                                <div class='widget-head-info-box'>
                                    <div class='persoanl-widget-hd'>
                                        <h2>" . "$fila[nombre]" . "</h2>
                                       
                                    </div>
                                    <img src='" . "$fila[foto]" . "' class='img-circle' alt='User Image' >
                                   
                                </div>
								
                                <div class='widget-text-box' >
							
                                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$" . "$fila[precio_con_ganancia]" . "</h4>
									 <p>" . "$fila[descripcion]" . "</p>
                                </div>
							
                            </div>
							<br></br>
                        </div>
						
 
";


}

?>