<html><head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>spherical triangle</title>
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body data-gr-c-s-loaded="true">
    <div id="map"></div>
	<script>

// This example creates a 2-pixel-wide red polyline showing the path of
// the first trans-Pacific flight between Oakland, CA, and Brisbane,
// Australia which was made by Charles Kingsford Smith.

var lat1 = <?php echo $_POST["lat11"];?>;
var lat2 = <?php echo $_POST["lat12"];?>;
var lat3 = <?php echo $_POST["lat13"];?>;

var lng1 = <?php echo $_POST["lng11"];?>;
var lng2 = <?php echo $_POST["lng12"];?>;
var lng3 = <?php echo $_POST["lng13"];?>;



function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 3,
	center: {lat: 9.0820, lng: 8.6753},
	mapTypeId: 'terrain'
  });

  var flightPlanCoordinates = [
	{lat: lat1, lng: lng1},
	{lat: lat2, lng: lng2},
	{lat: lat3, lng: lng3},
	{lat: lat1, lng: lng1}

  ];


  var flightPath = new google.maps.Polyline({
	path: flightPlanCoordinates,
	geodesic: true,
	strokeColor: '#FF0000',
	strokeOpacity: 1.0,
	strokeWeight: 2
  });

  flightPath.setMap(map);
}
</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAH6mRLTmgq_o8GDA3XWPkli9RN5pnjbwA&callback=initMap">
    </script>
  
</body></html>