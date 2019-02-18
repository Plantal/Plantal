$(document).ready(function(){

$("#imprimir").click( function(){
            imprimir($("#imprimir").data("especie"));
          });


          function imprimir(nc) {
            window.open("http://localhost/ProjetoPlantal/workspace/adminpages/pdff.php?nomeCientifico="+nc);

          }
	
$(".view").click( function(){  
           var nomeCientifico = $(this).attr("id"); 
           $('#imprimir').data("especie","");

           if(nomeCientifico != '')  
           {                    
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{nomeCientifico: nomeCientifico},  
                          success:function(data){  
                          $('#planta_detalhe').html(data);  
                          $('#dataModal').modal('show'); 
                          $('#imprimir').data("especie",nomeCientifico);
                     }  
                });

          }



});	
});



