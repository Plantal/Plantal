

$(document).ready(function(){

var idProjeto;

$("#imprimir").click( function(){
   $('.btn btn-danger').each(function() {
        var container = $(this);
         var idProjeto = container.data('service');

         console.log(idProjeto);
    });
            
              
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



