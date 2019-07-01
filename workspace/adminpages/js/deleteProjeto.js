$(document).ready(function(){
	
	$(document).on('click', '.delete_data', function(){
          $('#myModal').modal('show');

           var idProjeto = $(this).attr("id");
           
           console.log(idProjeto);
            
           if(idProjeto != '')  
           {  
            $('#delete').on("click", function(event){


                $.ajax({  
                     url:"deleteProjeto.php",  
                     method:"POST",  
                     data:{idProjeto: idProjeto},  
                          success:function(data){  
                            $('#myModal').modal('hide');
                             window.location.reload();
                            
                            
                            
                     }  
                });

              });    
           }            
      });
});	




