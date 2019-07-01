var idProjeto;

$(document).ready(function(){

$("#imprimir").click( function(){
   $('#imprimir').each(function() {
        var container = $(this);
         idProjeto = container.data('service');


    });
            
              
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



