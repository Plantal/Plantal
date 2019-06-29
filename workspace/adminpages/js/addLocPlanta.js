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

  placeMarker(map, event.latLng);




  

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


