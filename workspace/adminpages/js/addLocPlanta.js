var map;



function loadMap() {
	var viana = {lat: 41.6946, lng: -8.83016};
    map = new google.maps.Map(document.getElementById('mapid'), {
      zoom: 11,
      center: viana
    });

     
   google.maps.event.addListener(map, 'click', function(event) {
    console.log(event.latLng.lat());
   	$('#latitudeInput').val(event.latLng.lat());
    $('#longitudeInput').val(event.latLng.lng());

  $('#local').modal('show');

  $('#addLoc').click(function(event){

          if($('#plantaInput').val() == '')  
           {  
                alert("Escolha a planta!");  
           }  
           else if($('#latitudeInput').val() == '')  
           {  
                alert("Introduza a latitude da localização da planta!");  
           } 
           else if($('#longitudeInput').val() == '')  
           {  
                alert("Introduza a longitude da localização da planta!");  
           } 
           else {

                obj = {
                      
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
                     beforeSend:function(){  
                          $('#addLoc').val("Inserindo");  
                     }  ,
                     success : function (data) {
                         $('#insert_form')[0].reset();  
                         $('#local').modal('hide');
                         placeMarker(map, event.latLng);
                         //$('#dataTable').DataTable().ajax.reload();

                     }                  
                });


           }
  }


  

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


