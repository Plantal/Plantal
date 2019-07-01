$(document).ready(function(){
	
	$('#add').click(function(e){
		//e.preventDefault();
		$.ajax({
			url: "addPlanta.php",
			dataType: "JSON",
			method: "GET",
			data: { search: $("#searchPlanta").val()}
		}).done(function(res) {

      $("#fotosModal").empty();
			
			$("#qrCodeModal").html("<img src='"+res.qrcode+"'/>");
      $("#qrcodeInput").val(res.qrcode);
      $("#contentModal").val(res.content);
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
			$.each(res['imagens'], function( index, value ){
    			$("#fotosModal").append("<img class='imgPlanta' src='"+value+"' />");
          $("#fotosInput").val("<img class='imgPlanta' src='"+value+"' />");
        $('#addModal').modal('show');
			});
		});

	});
	$('#insert').click(function(event){  
           //event.preventDefault(); 
          // event.stopImmediatePropagation();
           if($('#nomeComumInput').val() == '')  
           {  
                alert("Introduza pelo menos um nome comum da planta !");  
           }  
           else if($('#especieInput').val() == '')  
           {  
                alert("Introduza a especie da planta !");  
           } 
           else if($('#familiaInput').val() == '')  
           {  
                alert("Introduza a familia da planta !");  
           } 
           else if($('#ordemInput').val() == '')  
           {  
                alert("Introduza a ordem da planta !");  
           } 
           else if($('#fotosInput').val() == '')  
           {  
                alert("Introduza pelo menos uma foto da planta !");  
           } 
           else if($('#qrcodeInput').val() == '')  
           {  
                alert("Falta do QR Code !");  
           }
           else if($('#contentModal').val() == '')  
           {  
                alert("Introduza a descrição da planta !");  
           }  
           
           else  
           { 

            obj = {
                      
                      "nomeCientifico" : $("#tituloInput").val(),
                      "nomeComum" : $("#nomeComumInput").val(),
                      "especie" : $("#especieInput").val(),
                      "familia" : $("#familiaInput").val(),
                      "ordem" : $("#ordemInput").val(),
                      "fotosUrl" : $("#fotosModal").html(),
                      "qrcode" : $("#qrcodeInput").val(),
                      "descricao" : $("#contentModal").val(),
                      "tipofolha" : $("#folhaModal").val(),
                      "utilizacao" : $("#utilModal").val()

                     }
                     jsonData = JSON.stringify(obj);
                     console.log(jsonData);
           
              $.ajax({ 
                     method:"POST",
                     url:"insert.php",  
                     contentType : "application/json",
                     data : jsonData,
                     dataType : "json",
                     beforeSend:function(){  
                          $('#insert').val("Inserindo");  
                     }  ,
                     success : function (data) {
                         $('#insert_form')[0].reset();  
                         $('#addModal').modal('hide');
                         $('#insert').val("Inserir");
                         window.location.reload();
                         
                     }                  
                });

                setTimeout(function(){
                      window.location.reload(true);
                }, 3000);          
              
           }  
      });
});	




