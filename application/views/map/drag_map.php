<!DOCTYPE html>
<html>

<head>
    <title>Google Maps Marker</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initMap" async defer></script>
</head>

<body>
    <div id="map" style="height: 400px; width: 100%;"></div>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -6.2088,
                    lng: 106.8456
                }, // Initial coordinates
                zoom: 13
            });

            var marker = new google.maps.Marker({
                position: {
                    lat: -6.2088,
                    lng: 106.8456
                }, // Initial coordinates
                map: map,
                title: 'Drag me!',
                draggable: true // Make the marker draggable
            });

            // Event listener for marker dragend event
            google.maps.event.addListener(marker, 'dragend', function(event) {
                console.log(event);
                var newLat = event.latLng.lat();
                var newLng = event.latLng.lng();

                // console.log('New Marker Position:', newLat, newLng);
                // alert('New Marker Position:\nLatitude: ' + newLat + '\nLongitude: ' + newLng);
            });
        }
    </script>
</body>

</html>