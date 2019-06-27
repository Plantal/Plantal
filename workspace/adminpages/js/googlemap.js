


var map;
var geocoder;



function loadMap() {
	var viana = {lat: 41.6946, lng: -8.83016};
    map = new google.maps.Map(document.getElementById('mapid'), {
      zoom: 11,
      center: viana
    });

   

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllProjetos(allData)
}

function showAllProjetos(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');
		
		strong.textContent = data.nome;
		content.appendChild(strong);

		/*var img = document.createElement('img');
		img.src = 'img/Leopard.jpg';
		img.style.width = '100px';
		content.appendChild(img);
		*/
		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.latitude, data.longitude),
	      map: map
	    });


	    

	    marker.addListener('click', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.nome ;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.idProjeto;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateProjetosWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateProjetosWithLatLng(points) {
	$.ajax({
		url:"pedidoProjeto.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}

