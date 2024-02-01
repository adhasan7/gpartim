<html>

<head>
    <title>Simple Markers</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style>
    /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
    #map {
        height: 100%;
    }
</style>

<body>
    <div class="container">
    <div style="width: 500px;height: 500px;" id="map"></div>
    <div>
        <div class="form-group">
          <label for=""></label>
          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
    </div>
    </div>

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
    <script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function() {
            getLocation();
        });
        const x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            sessionStorage.setItem("latitude", position.coords.latitude)
            sessionStorage.setItem("longitude", position.coords.longitude)
            console.log({
                latitude: position.coords.latitude,
                longitude: position.coords.longitude
            });
        }
    </script>
    <script>
        function initMap() {

            let latitude = parseFloat(sessionStorage.getItem('latitude'));
            let longitude = parseFloat(sessionStorage.getItem('longitude'));
            const myLatLng = {
                lat: latitude,
                lng: longitude
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: myLatLng,
            });

            marker = new google.maps.Marker({
                map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: myLatLng,
            });
            marker.addListener("click", toggleBounce);
            google.maps.event.addListener(map, 'center_changed', function() {
                // 0.1 seconds after the center of the map has changed,
                // set back the marker position.
                window.setTimeout(function() {
                    var center = map.getCenter();
                    marker.setPosition(center);
                }, 100);
            });
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
        window.initMap = initMap;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initMap&v=weekly" defer></script>
</body>

</html>