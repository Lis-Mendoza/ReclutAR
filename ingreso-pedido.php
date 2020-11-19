<div class="x-editable-area col-md-12">
	<div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                
		
					<div class="alert-title">
						
<div id="resp" >
<div >
<section class="content-header " >
     
	<div class="login-title">
	 									
		<h3>Expandí tu Negocio al Maximo</h3>
		
	
													
		<h1>Recordá que Muchos Venden Mejor que Uno!</h1>
	
												
	</div>

</section>
	<div class="dual-list-box-area mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline10-list shadow-reset">
                                <div class="sparkline10-hd">
                                    <div class="main-sparkline10-hd">
                                        <h1>Selecciona los productos </h1>
                                        <div class="sparkline10-outline-icon">
                                            <span class="sparkline10-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            
                                            <span class="sparkline10-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline10-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="dual-list-box-inner">
                                                    <form id="form" action="listar-prepedido.php" class="wizard-big" metod=POST>
                                                        <select class="form-control dual_select"  multiple  id="nombre">
															
                                                            <?php
                                                            include("logicaa-generar-pedido.php");
														
                                                                ?>
														
                                                        </select>
													<br></br>
															<button type="button" class="btn btn-custon-rounded-two btn-warning" id="button" onClick="send()"> Agregar Cantidades </button>
                                                    </form>
												
												   <div id="resp"> 
	   
	   
													</div>
												
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	
            </div>


	<!-- /.box-header -->
<script>
	function send ()
	{
		

		
       var selectedValues="";    
	   var count=0;
		
       $("#nombre :selected").each(function(){
		   if (count>0) {
	    	selectedValues+=" , ";
	    }
           selectedValues+=($(this).val()); 
		   count++;
		   
       });
       
		
		$.ajax({                        
           type: "POST",                 
           url: "listar-prepedido.php",                     
           data: {"nombre":selectedValues}, 
           success: function(data)             
           {
             $('#resp').html(data);               
           }
       });
	}
	</script>  
	<script>
	
	function eliminar(id){  


 Swal.fire({
     title: 'Esta seguro que desea eliminar este producto?',
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si eliminar!'
   }).then((result) => {
     if (result.isConfirmed) {

       var url = "delete-producto.php";
       $.ajax({                        
          type: "POST",                
          url: url,                    
          data:{"id": id},
          success: function(data)            
          {  
          Swal.fire({
           title: 'El Producto se elimino Exitosamente!',
           icon: 'success',
           showCancelButton: false,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ok'
         }).then((result) => {
           if (result.isConfirmed) {
              location.reload();
           }
         })
           
                       
          }
      });
       
       
     }
   })
 
       
}


        
        
function cach(){
    
        var lista = new Array();
  $("#tabla tr").each(function(index, elem){
      if(index!=0){
         
            lista.push({
              id: $(this).find('td').eq(0).html(),
              cant: $(this).find('td').eq(2).find('input').val()
            });
          
  }
          
          
         });
   
 Swal.fire({
     title: '¿Esta seguro que desea enviar el pedido?',
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si eliminar!'
   }).then((result) => {
     if (result.isConfirmed) {

       var url = "insertar-orden.php";
       $.ajax({                        
          type: "POST",                
          url: url,                    
          data:{"lista": lista},
          success: function(data)            
          {  
          Swal.fire({
           title: 'El pedido se envio exitosamente!',
           icon: 'success',
           showCancelButton: false,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ok'
         }).then((result) => {
           if (result.isConfirmed) {
              location.reload();
           }
         })
           
                       
          }
      });
       
       
     }
   })
 
    
    }
    
</script>
    
             