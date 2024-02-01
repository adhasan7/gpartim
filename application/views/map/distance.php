<!DOCTYPE html>
<html>

<head>
    <title>Google Maps Route Distance</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initMap" async defer></script>
</head>

<body>
    <div id="map" style="height: 400px; width: 100%;"></div>
    <div id="distance"></div>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -6.2088,
                    lng: 106.8456
                },
                zoom: 13
            });

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer({
                map: map
            });

            var origin = new google.maps.LatLng(-6.2088, 106.8456); // Starting point
            var destination = new google.maps.LatLng(-6.2188, 106.8356); // Ending point

            var request = {
                origin: origin,
                destination: destination,
                travelMode: 'DRIVING'
            };

            directionsService.route(request, function(result, status) {
                if (status == 'OK') {
                    directionsRenderer.setDirections(result);

                    // Display distance
                    var distanceText = result.routes[0].legs[0].distance.text;
                    document.getElementById('distance').innerHTML = 'Distance: ' + distanceText;
                } else {
                    console.error('Directions request failed:', status);
                }
            });
        }
    </script>
</body>

</html>