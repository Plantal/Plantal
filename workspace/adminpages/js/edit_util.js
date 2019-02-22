$(document).ready(function(){
	
	$(document).on('click', '.edit_data', function(){  
             var iduser = $(this).attr("id");
           
           $.ajax({  
                url:"fetch_util.php",  
                method:"POST",  
                data:{iduser:iduser},  
                dataType:"json",  
                success:function(res){  
                   
                    $("#usernameInput").val(res.username);
                    $("#passwordInput").val(res.password);
                    $("#emailInput").val(res.email);
                   
                    
                    $('#insert').val("Atualizar");  
                    $('#editUtilizadores').modal('show');  


                }  
           }); 


           $('#insert').on("click", function(event){
    


    $.ajax({  
                     url:"edit_util.php",  
                     method:"POST",  
                     data:{
                      iduser:iduser,
                      username: $("#usernameInput").val(),
                      password:$("#passwordInput").val(),
                      email: $("#emailInput").val()
                      

                     }, 
                     dataType: "JSON",
                     contentType: 'application/x-www-form-urlencoded',
                     beforeSend:function(){  
                          $('#insert').val("Atualizando");  
                     },
                     success: function(data){
                          if(data.success == true){
                               setTimeout(function(){
                                    location.reload();
                               }, 3000)
                          }
                     }
                
                     
                          
                     
                });
                    
                  $('#editUtilizadores').modal('hide');
                  window.location.replace("http://flora.ipvc.pt/workspace/adminpages/admin_users.php");



                
          }); 
      });

  
  
      
  
});




