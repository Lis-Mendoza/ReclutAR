<div class="x-editable-area col-md-12">
  <div class="breadcome-list map-mg-t-40-gl shadow-reset">
    <div class="alert-title">
      <div id="resp" >
        <div >
          <section class="content-header " >
            <div class="login-title" >
              <h3>Expandí tu Negocio al Maximo</h3>
              <h1>Recordá que Muchos Venden Mejor que Uno!</h1>
                 
            </div>
            
               
          </section>
            <section class="content-header " >
           <div class="mail-title inbox-bt-mg">
                                                
             <a class="btn btn-white btn-action btn-xs pull-rigth" href="pantalla-principal-revendedores.php?menu=bienvenida"><i class="fa fa-reply "></i> Atras</a>
                                               
                                            </div>
</div>
          </section>
          
          <!-- /.box-header -->
          
          <div style="overflow-y: scroll;height:400px; width: 99%  " >
            <table id="example" class="table table-bordered table-striped " >
              <thead>
                <tr>
                  <th>N° Pedido</th>
                  <th>Fecha y Hora </th>
                  <th>Estado </th>
                  <th>Detalle</th>
              </thead>
              <tbody id="resp">
                <?php

                include( 'logica-listar-pedido.php' );

                ?>
              </tbody>
            </table>
              
          </div>
           
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.box -->

<script>
	
	function eliminar(id){  


 Swal.fire({
     title: 'Esta seguro que desea eliminar este pedido?',
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si eliminar!'
   }).then((result) => {
     if (result.isConfirmed) {

       var url = "delete-pedido.php";
       $.ajax({                        
          type: "POST",                
          url: url,                    
          data:{"id": id},
          success: function(data)            
          {  
          Swal.fire({
           title: 'El Pedido se elimino Exitosamente!',
           icon: 'success',
           showCancelButton: false,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Ok'
         }).then((result) => {
           if (result.isConfirmed) {
             //location.reload();
           }
         })
           
                       
          }
      });
       
       
     }
   })
 
       
}
    
    
    
    
	function send(id){  
        
        var url = "logica-detalle-pedido.php";
       $.ajax({                        
          type: "POST",                
          url: url,                    
          data:{"id": id},
          success: function(data)            
          {  
            $('#resp').html(data);  
            calcularTotal();      
          },
          error: function(data)
          {
            $('#resp').html(data);  
              calcularTotal();
          }
           
      });


       
}
    
    function calcularTotal(){
 //Defino los totales de mis 2 columnas en 0
 var total_col = 0;
 //Recorro todos los tr ubicados en el tbody
 $('#export_to_excel tbody').find('tr').each(function (i, el) {
           
       //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )    
       total_col += parseFloat($(this).find('td').eq(4).text());
               
   });
   //Muestro el resultado en el th correspondiente a la columna
   $('#export_to_excel tfoot tr th').eq(1).text(total_col);

}
    
    
//------------------------
    
    
function exportTableToExcel(tableID, filename){
   var downloadLink;
   var dataType = 'application/vnd.ms-excel';
   var tableSelect = document.getElementById(tableID);
   var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
   
   // Specify file name
   filename = filename?filename+'.xls':'excel_data.xls';
   
   // Create download link element
   downloadLink = document.createElement("a");
   
   document.body.appendChild(downloadLink);
   
   if(navigator.msSaveOrOpenBlob){
       var blob = new Blob(['ufeff', tableHTML], {
           type: dataType
       });
       navigator.msSaveOrOpenBlob( blob, filename);
   }else{
       // Create a link to the file
       downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
   
       // Setting the file name
       downloadLink.download = filename;
       
       //triggering the function
       downloadLink.click();
   }
}
	
</script>