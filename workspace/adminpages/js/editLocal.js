$(document).ready(function(){
	
	$(document).on('click', '.edit_data', function(){  
             var id = $(this).attr("id");
           
           $.ajax({  
                url:"fetchLocal.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(res){  
                   
                    $("#plantaEditar").val(res.nomeCientifico);
                    

                   
                    $("#latitudeEditar").val(res.latitude);

                    $("#longitudeEditar").val(res.longitude);

                   
                    



                    
                    
                      
                    $('#editLocal').modal('show');  


                }  
           }); 


           $('#editLoc').click( function(event){


                     obj = {
                            "id" : id,
                            "latitude" : $("#latitudeEditar").val(),
                            "longitude" : $("#longitudeEditar").val(),
                            "plantaId" : $("#plantaEditar").val()
                      }
                     jsonData = JSON.stringify(obj);
                     console.log(jsonData);
    


                   $.ajax({      
                     method:"POST",
                     url:"editLocal.php",   
                     contentType : "application/json",
                     data : jsonData,
                     dataType : "json"
                    
                  
                
                     
                          
                     
                });
                    
               $('#editLoc').modal('hide');
               window.location.reload(true);
                         
          }); 
      });

  
  
      
  
});




