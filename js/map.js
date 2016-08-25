function initMap2() {
	 
	  var myLatLngAgB = {lat: -29.7009864, lng: -53.8224113}; //angelo bolson 468
	 
	  // Create a map object and specify the DOM element for display.
	  var mapAgBolson = new google.maps.Map(document.getElementById('mapAgBolson'), {
		center: myLatLngAgB,
		scrollwheel: false,
		zoom: 16
	  });
	  
	 
	  var markerAgBolson = new google.maps.Marker({
        position: myLatLngLagoa,
		map: mapAgBolson,
		title: 'Cidade Universitária Eco Village'
	  });
	}	