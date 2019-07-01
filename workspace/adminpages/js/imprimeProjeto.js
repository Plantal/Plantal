

$(document).ready(function(){

var idProjeto = 0;

$(".btn btn-danger").click( function(){
   
        var container = $(this).attr("id");
         
console.log(container);
         console.log(idProjeto);

            
              
        
 


          });


          function imprimir(id) {
            window.open("http://flora.ipvc.pt/workspace/adminpages/pdfProjeto.php?idProjeto="+id);

          }
	

});



