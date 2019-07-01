

$(document).ready(function(){

var idProjeto;

$("#imprimir").click( function(){
   $('#imprimir').each(function() {
        var container = $(this);
         var idProjeto = container.data('service');
console.log(container);
         console.log(idProjeto);
    });
            
              
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



