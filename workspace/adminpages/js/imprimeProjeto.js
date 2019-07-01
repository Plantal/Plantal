$(document).ready(function(){

$("#imprimir").click( function(){
            
              var container = $(this);
              idProjeto = container.data('service');

        
              console.log(idProjeto);
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



