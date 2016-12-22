function initMap() {
   var uluru = {lat: 49.994507, lng: 36.1457421};
   var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 4,
		center: uluru
		});
		var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}