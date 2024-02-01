<html>

<head>
    <title>Retrieving Autocomplete Predictions</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
</head>

<body>
    <p>Query suggestions for 'pizza near Syd':</p>
    <ul id="results"></ul>
    <!-- Replace Powered By Google image src with self hosted image. https://developers.google.com/maps/documentation/places/web-service/policies#other_attribution_requirements -->
    <img class="powered-by-google" src="https://storage.googleapis.com/geo-devrel-public-buckets/powered_by_google_on_white.png" alt="Powered by Google" />

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
    <script>
        // This example retrieves autocomplete predictions programmatically from the
        // autocomplete service, and displays them as an HTML list.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initService() {
            const displaySuggestions = function(predictions, status) {
                if (status != google.maps.places.PlacesServiceStatus.OK || !predictions) {
                    alert(status);
                    return;
                }

                predictions.forEach((prediction) => {
                    const li = document.createElement("li");

                    li.appendChild(document.createTextNode(prediction.description));
                    document.getElementById("results").appendChild(li);
                });
            };

            const service = new google.maps.places.AutocompleteService();

            service.getQueryPredictions({
                input: "pizza near Syd"
            }, displaySuggestions);
        }

        window.initService = initService;
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initService&libraries=places&v=weekly" async defer></script>
</body>

</html>