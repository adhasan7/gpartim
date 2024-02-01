<!DOCTYPE html>
<html>

<head>
    <title>Google Maps Marker</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initMaps" async defer></script>
</head>

<body>
    <div id="map1" style="height: 400px; width: 48%; float: left;"></div>
    <div id="map2" style="height: 400px; width: 48%; float: right;"></div>

    <script>
        function initMaps() {
            var map1 = new google.maps.Map(document.getElementById('map1'), {
                center: {
                    lat: -6.2088,
                    lng: 106.8456
                }, // Replace with desired coordinates
                zoom: 13
            });

            var marker1 = new google.maps.Marker({
                position: {
                    lat: -6.2088,
                    lng: 106.8456
                }, // Replace with desired coordinates
                map: map1,
                draggable: true,
                animation: google.maps.Animation.DROP,
                title: 'Marker 1'
            });

            var map2 = new google.maps.Map(document.getElementById('map2'), {
                center: {
                    lat: -6.2188,
                    lng: 106.8356
                }, // Replace with desired coordinates
                zoom: 13
            });

            var marker2 = new google.maps.Marker({
                position: {
                    lat: -6.2188,
                    lng: 106.8356
                }, // Replace with desired coordinates
                map: map2,
                draggable: true,
                animation: google.maps.Animation.DROP,
                title: 'Marker 2'
            });
        }
    </script>
</body>

</html>