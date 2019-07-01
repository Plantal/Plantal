$(document).ready(function(){
	
	$(document).on('click', '.edit_data', function(){  
             var nomeCientifico = $(this).attr("id");
           
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{nomeCientifico:nomeCientifico},  
                dataType:"json",  
                success:function(res){  
                    $("#qrCodeModal1").html("<img src='"+res.qrcode+"'/><hr/>");
                    $("#qrcodeInput1").val(res.qrcode);
                    $("#contentModal1").val(res.descricao);
                    $("#especieModal1").html(res.especie);
                    $("#especieInput1").val(res.especie);
                    $("#familiaModal1").html(res.familia);
                    $("#familiaInput1").val(res.familia);
                    $("#ordemModal1").html(res.ordem);
                    $("#ordemInput1").val(res.ordem);
                    $("#nomeComumModal1").html(res.nomeComum);
                    $("#nomeComumInput1").val(res.nomeComum);
                    $("#tituloModal1").html(res.especie);
                    $("#tituloInput1").val(res.especie);

                   // $("#folhaModal").html(res.tipofolha);
                    $("#folhaModal1").val(res.tipofolha);

                 //   $("#tituloModal").html(res.especie);
                    $("#utilModal1").val(res.utilizacao);



                    $("#fotosModal1").html(res.fotosURL);
                            $("#fotosInput1").val(res.fotosURL);
                    
                    $('#atualizar').val("Atualizar");  
                    $('#edit_data_Modal').modal('show');  


                }  
           }); 


           $('#insert').on("click", function(event){


                     obj = {
                            "nomeCientifico" : $("#especieInput").val(),
                            "descricao" : $("#contentModal").val(),
                            "tipofolha" : $("#folhaModal").val(),
                            "utilizacao" : $("#utilModal").val()
                      }
                     jsonData = JSON.stringify(obj);
                     console.log(jsonData);
    


                   $.ajax({      
                     method:"POST",
                     url:"edit.php",   
                     contentType : "application/json",
                     data : jsonData,
                     dataType : "json",
                     beforeSend:function(){  
                          $('#atualizar').val("Atualizando");  
                     },

                     success : function () {
                         
                        
                         
                     }
                
                     
                          
                     
                });
                 
               $('#edit_data_Modal').modal('hide');          
          }); 
      });

  
  
      
  
});




