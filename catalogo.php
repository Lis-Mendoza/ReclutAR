
<div id="ID_DIV" >
	
	<div class="logo">
		<a href="#"><img src="logo_chiquito.jpg" alt="" />
        </a>
												</div>
	<br></br>
<?php

include ("traer-productos.php");


?>
</div>
<div class="breadcome-list map-mg-t-40-gl shadow-reset  col-md-12 ">
 <div class="mail-title inbox-bt-mg  ">
                                                <h2>Generar Documento</h2>
                                                <div class="view-mail-action view-mail-ov-d-n">
                                                    
                                                    <a class="compose-draft-bt" href="javascript:window.imprimirDIV('ID_DIV');"> Generar PDF</a>
                                                    
                                                </div>
                                            </div>
  </div>
<script>
    function imprimirDIV(contenido) {
        var ficha = document.getElementById(contenido);
        var ventanaImpresion = window.open(' ', 'popUp');
        ventanaImpresion.document.write(ficha.innerHTML);
        ventanaImpresion.document.close();
        ventanaImpresion.print();
        ventanaImpresion.close();
    }
</script>

	</div>