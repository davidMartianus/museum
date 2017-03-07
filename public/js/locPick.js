function addMap(){
	var myOptions = {
		zoom: 12,
		scaleControl: true,
		center: new google.maps.LatLng(-6.175065, 106.827166),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("map"), myOptions);

	var geocoder = new google.maps.Geocoder();

	document.getElementById('geocode').addEventListener('click', function(){
		getAlamat(geocoder, map);
	});
}

function getAlamat(geocoder, resultsMap){
	var address = document.getElementById('address').value;
	

	geocoder.geocode({'address':address}, function(results,status){
		if (status == google.maps.GeocoderStatus.OK) {
			resultsMap.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: resultsMap,
				position: results[0].geometry.location
			});
			document.getElementById('lat').value = results[0].geometry.location.lat();
			document.getElementById('lng').value = results[0].geometry.location.lng();
		} else {
			alert('Geocode Gagal: ' + status);
		}
	});
}

// function updateMarkerPosisi(latLng){
// 	document.getElementById('lat').value = [latLng.lat()];
// 	document.getElementById('lng').value = [latLng.lng()];
// }

// var myOptions = {
// 	zoom: 12,
// 	scaleControl: true,
// 	center: new google.maps.LatLng(-6.175065, 106.827166),
// 	mapTypeId: google.maps.MapTypeId.ROADMAP
// };

// var map = new google.maps.Map(document.getElementById("map"), myOptions);

// var marker1 = new google.maps.Marker({
// 	position: new google.maps.LatLng(-6.175065, 106.827166),
// 	title: 'Lokasi',
// 	map: map,
// 	draggable: true
// });

// // updateMarkerPosisi(latLng);

// google.maps.event.addListener(marker1, 'drag' , function(){ updateMarkerPosisi(marker1.getPosition());
// });

