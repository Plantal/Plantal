$(document).ready(function(){
	
	$(document).on('click', '.edit_data', function(){  
             var idProjeto = $(this).attr("id");
           
           $.ajax({  
                url:"fetchProjeto.php",  
                method:"POST",  
                data:{idProjeto:idProjeto},  
                dataType:"json",  
                success:function(res){  
                   
                    $("#nomeEditar").val(res.nome);
                    

                   
                    $("#latitudeEditar").val(res.latitude);

                    $("#longitudeEditar").val(res.longitude);

                   
                    $("#orientadorEditar").val(res.username);



                    
                    
                    $('#editarProjeto').val("Atualizar");  
                    $('#editProjeto').modal('show');  


                }  
           }); 


           $('#editarProjeto').click( function(event){

               if($('#nomeEditar').val() == '')  
           {  
                alert("Introduza o nome do projeto !");  
           }  
           else if($('#latitudeEditar').val() == '')  
           {  
                alert("Introduza a latitude do projeto !");  
           } 
           else if($('#longitudeEditar').val() == '')  
           {  
                alert("Introduza a longitude do projeto !");  
           } 
           else if($('#orientadorEditar').val() == '')  
           {  
                alert("Introduza o orientador do projeto !");  
           } 
           else {




                     obj = {
                            "idProjeto" : idProjeto,
                            "nome" : $("#nomeEditar").val(),
                            "latitude" : $("#latitudeEditar").val(),
                            "longitude" : $("#longitudeEditar").val(),
                            "userId" : $("#orientadorEditar").val()
                      }
                     jsonData = JSON.stringify(obj);
                     console.log(jsonData);
    


                   $.ajax({      
                     method:"POST",
                     url:"editProjeto.php",   
                     contentType : "application/json",
                     data : jsonData,
                     dataType : "json"
                    
                  
                
                     
                          
                     
                });
                    
              setTimeout(function(){
                      window.location.reload(true);
                }, 3000);          
              
             }            
          }); 
      });

  
  
      
  
});




