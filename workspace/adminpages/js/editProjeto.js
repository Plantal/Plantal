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
                    console.log("sdassdfsfasd");
                $('#editProjeto').modal('hide');
                          w$('#grupo').load(document.URL +  ' #grupo');

                         
          }); 
      });

  
  
      
  
});




