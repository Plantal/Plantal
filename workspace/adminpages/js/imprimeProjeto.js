

$(document).ready(function(){

var idProjeto = 0;

$("#imprimir").click( function(){
   
        var container = $(this);
         idProjeto = container.data('service');
console.log(container);
         console.log(idProjeto);

            
              
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



