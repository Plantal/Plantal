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

                 //   $("#tituloModal").html(res.especie);
                   
                    $("#orientadorEditar").val(res.username);



                    
                    
                    $('#editarProjeto').val("Atualizar");  
                    $('#editProjeto').modal('show');  


                }  
           }); 


           $('#insert').on("click", function(event){


                     obj = {
                            "idProjeto" : idProjeto,
                            "nome" : $("#especieInput").val(),
                            "latitude" : $("#contentModal").val(),
                            "longitude" : $("#folhaModal").val(),
                            "userId" : $("#utilModal").val()
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

                     success : function () {
                         $('#editProjeto').modal('hide');
                         window.location.replace("http://flora.ipvc.pt/workspace/adminpages/admin_projetos.php");
                         
                     }
                
                     
                          
                     
                });
                 
                         
          }); 
      });

  
  
      
  
});




