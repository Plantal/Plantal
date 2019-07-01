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
                    

                   // $("#folhaModal").html(res.tipofolha);
                    $("#latitudeEditar").val(res.latitude);

                    $("#longitudeEditar").val(res.longitude);

                 //   $("#tituloModal").html(res.especie);
                   
                    $("#orientadorEditar").val(res.username);



                    
                    
                    $('#editarProjeto').val("Atualizar");  
                    $('#editProjeto').modal('show');  


                }  
           }); 


           $('#editarProjeto').on("click", function(event){


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
                     dataType : "json",
                     beforeSend:function(){  
                          $('#editarProjeto').val("Atualizando");  
                     },

                     success : function (data) {
                        
                         
                     }
                
                     
                          
                     
                });
                $('#editProjeto').modal('hide');
                          window.location.reload();

                         
          }); 
      });

  
  
      
  
});




