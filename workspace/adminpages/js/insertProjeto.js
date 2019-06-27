$(document).ready(function(){
	
	$('#addProjeto').click(function(event){  
           //event.preventDefault(); 
          // event.stopImmediatePropagation();
           if($('#nomeInput').val() == '')  
           {  
                alert("Introduza o nome do projeto !");  
           }  
           else if($('#latitudeInput').val() == '')  
           {  
                alert("Introduza a latitude do projeto !");  
           } 
           else if($('#longitudeInput').val() == '')  
           {  
                alert("Introduza a longitude do projeto !");  
           } 
           else if($('#orientadorInput').val() == '')  
           {  
                alert("Introduza o orientador do projeto !");  
           } 
          
           else  
           { 

            obj = {
                      
                      "nomeProjeto" : $("#nomeInput").val(),
                      "latitude" : $("#latitudeInput").val(),
                      "longitude" : $("#longitudeInput").val(),
                      "orientador" : $("#orientadorInput").val()
                      
                     }
                     jsonData = JSON.stringify(obj);
                     console.log(jsonData);
           
              $.ajax({ 
                     method:"POST",
                     url:"insertProjeto.php",  
                     contentType : "application/json",
                     data : jsonData,
                     dataType : "json",
                     beforeSend:function(){  
                          $('#addProjeto').val("Inserindo");  
                     }  ,
                     success : function (data) { 
                     	$('#mapid').load(document.URL +  '#mapid');
                         $('#projeto').modal('hide');
                         $('#addProjeto').val("Inserir");
                         

                     }                  
                });

                            
              
           }  
      });
});	




