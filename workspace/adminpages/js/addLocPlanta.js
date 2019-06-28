var map;
var lat;
var lng;



function loadMap() {
	var viana = {lat: 41.6946, lng: -8.83016};
    map = new google.maps.Map(document.getElementById('mapid'), {
      zoom: 11,
      center: viana
    });

    
   google.maps.event.addListener(map, 'click', function(event) {
   	$('#latitudeInput').val();


  $('#local').modal('show');
  //placeMarker(map, event.latLng);
});

  
}



function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  lat = location.lat();
  console.log(lat);
  lng = location.lng();


  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() +
    '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}