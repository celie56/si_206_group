
   function initialize() {
     var markerLatlng = new google.maps.LatLng(42.336722277546706, -83.67359161376953);
     var geocoder = new google.maps.Geocoder();
    
     var mapCanvas = document.getElementById('map-canvas');
     var mapOptions = {
       center: new google.maps.LatLng(42.336722277546706, -83.67359161376953),
       zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP
     }
     var map = new google.maps.Map(mapCanvas, mapOptions);
     var marker = new google.maps.Marker({
         position: markerLatlng,
         map: map, title:"Character Creation"
     });
   }

 google.maps.event.addDomListener(window, 'load', initialize);  

function initiate_geolocation() {
  var mapOptions = {
    zoom: 6
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}




function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
  


jQuery(window).ready(function(){  
     jQuery("#btnInit").click(initiate_geolocation);  
});  



 



