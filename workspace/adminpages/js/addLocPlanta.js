var map;
var geocoder;



function loadMap() {
	var viana = {lat: 41.6946, lng: -8.83016};
    map = new google.maps.Map(document.getElementById('mapid'), {
      zoom: 13,
      center: viana
    });

}

google.maps.event.addListener(map, 'click', function(event) {
   placeMarker(event.latLng);
});

function placeMarker(location) {
    var marker = new google.maps.Marker({
        position: location, 
        map: map
    });
}