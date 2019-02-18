$(document).ready(function(){
	
	$(document).on('click', '.edit_data', function(){  
             var nomeCientifico = $(this).attr("id");
           
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{nomeCientifico:nomeCientifico},  
                dataType:"json",  
                success:function(res){  
                    $("#qrCodeModal").html("<img src='"+res.qrcode+"'/><hr/>");
                    $("#qrcodeInput").val(res.qrcode);
                    $("#contentModal").val(res.descricao);
                    $("#especieModal").html(res.especie);
                    $("#especieInput").val(res.especie);
                    $("#familiaModal").html(res.familia);
                    $("#familiaInput").val(res.familia);
                    $("#ordemModal").html(res.ordem);
                    $("#ordemInput").val(res.ordem);
                    $("#nomeComumModal").html(res.nomeComum);
                    $("#nomeComumInput").val(res.nomeComum);
                    $("#tituloModal").html(res.especie);
                    $("#tituloInput").val(res.especie);

                   // $("#folhaModal").html(res.tipofolha);
                    $("#folhaModal").val(res.tipofolha);

                 //   $("#tituloModal").html(res.especie);
                    $("#utilModal").val(res.utilizacao);



                    $("#fotosModal").html(res.fotosURL);
                            $("#fotosInput").val(res.fotosURL);
                    
                    $('#insert').val("Atualizar");  
                    $('#add_data_Modal').modal('show');  


                }  
           }); 


           $('#insert').on("click", function(event){
    


    $.ajax({  
                     url:"edit.php",  
                     method:"POST",  
                     data:{
                      
                      nomeCientifico: $("#especieInput").val(),
                      descricao: $("#contentModal").val(),
                      tipofolha: $("#folhaModal").val(),
                      utilizacao: $("#utilModal").val()

                     }, 
                     dataType: "JSON",
                     contentType: 'application/x-www-form-urlencoded',
                     beforeSend:function(){  
                          $('#insert').val("Atualizando");  
                     }
                
                     
                          
                     
                });
                  $('#add_data_Modal').modal('hide');
                  window.location.replace("http://localhost/workspace/adminpages/admin_tables.php");
                
          }); 
      });

  
  
      
  
});




