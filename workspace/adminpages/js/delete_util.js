$(document).ready(function(){
	
	$(document).on('click', '.delete_data', function(){
          $('#deleteutilizador').modal('show');

           var iduser = $(this).attr("id");
           

            
           if(iduser != '')  
           {  
            $('#delete').on("click", function(event){


                $.ajax({  
                     url:"delete_util.php",  
                     method:"POST",  
                     data:{iduser: iduser},  
                          success:function(data){  
                            $('#deleteutilizador').modal('hide');
                            window.location.replace("http://flora.ipvc.pt/workspace/adminpages/admin_users.php");
                            
                            
                            
                     }  
                });

              });    
           }            
      });
});	




