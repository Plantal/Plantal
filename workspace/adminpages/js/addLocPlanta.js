var map;
var idProjeto;



function loadMap() {
	var viana = {lat: 41.6946, lng: -8.83016};
    map = new google.maps.Map(document.getElementById('mapid'), {
      zoom: 11,
      center: viana
    });

     
   google.maps.event.addListener(map, 'click', function(event) {

    $('.mapa').each(function() {
        var container = $(this);
         idProjeto = container.data('service');

console.log(idProjeto);
    });
    
   	$('#latitudeInput').val(event.latLng.lat());
    $('#longitudeInput').val(event.latLng.lng());

console.log(idProjeto);


  $('#local').modal('show');

  $('#addLoc').click(function(){

          if($('#plantaInput').val() == '')  
           {  
                alert("Introduza a planta a ser localizada !");  
           }  
           else if($('#latitudeInput').val() == '')  
           {  
                alert("Introduza a latitude da planta !");  
           } 
           else if($('#longitudeInput').val() == '')  
           {  
                alert("Introduza a longitude da planta !");  
           } 
           else {

              obj = { 

                      "idProjeto" : idProjeto,
                      "idPlanta" : $("#plantaInput").val(),
                      "latitude" : $("#latitudeInput").val(),
                      "longitude" : $("#longitudeInput").val()
                      
                     }
                     jsonData = JSON.stringify(obj);
                     console.log(jsonData);

                      $.ajax({ 
                     method:"POST",
                     url:"insertLoc.php",  
                     contentType : "application/json",
                     data : jsonData,
                     dataType : "json",
                     
                     success : function () {
                          
                        
                         
                         

                     }                  
                });
                      $('#local').modal('hide');
                      placeMarker(map, event.latLng);


           }

  });


  




  

});
}


function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  

  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() +
    '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}


