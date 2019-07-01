

$(document).ready(function(){

var idProjeto = 0;

$("#imprimir").click( function(){
   $('#imprimir').each(function() {
        var container = $(this).attr("data-service");
         
console.log(container);
         console.log(idProjeto);
    });
            
              
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



