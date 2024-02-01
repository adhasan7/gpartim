<!DOCTYPE html>
<html>

<head>
    <title>Get Address from Marker</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initMap" async defer></script>
</head>

<body>
    <div id="map" style="height: 400px; width: 100%;"></div>
    <div id="address"></div>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -6.2088,
                    lng: 106.8456
                },
                zoom: 13
            });

            var geocoder = new google.maps.Geocoder();
            var marker = new google.maps.Marker({
                position: {
                    lat: -6.2088,
                    lng: 106.8456
                },
                map: map,
                title: 'Marker'
            });

            // Event listener for marker dragend event
            google.maps.event.addListener(marker, 'dragend', function() {
                getAddress(marker.getPosition());
            });

            // Initial call to get the address at marker's initial position
            getAddress(marker.getPosition());
        }

        function getAddress(latLng) {
            var geocoder = new google.maps.Geocoder();

            geocoder.geocode({
                'location': latLng
            }, function(results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        document.getElementById('address').innerHTML = 'Address: ' + results[0].formatted_address;
                    } else {
                        document.getElementById('address').innerHTML = 'No address found';
                    }
                } else {
                    console.error('Geocoder failed due to: ' + status);
                }
            });
        }
    </script>
</body>

</html>