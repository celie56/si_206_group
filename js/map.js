<script>
  function initialize() {
    var markerLatlng = new google.maps.LatLng(42.336722277546706, -83.67359161376953);
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
</script>