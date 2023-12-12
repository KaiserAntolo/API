<!DOCTYPE html>
<html>
<head>
    <title>Google Maps</title>
    <link rel="stylesheet" href="api.css"> <!-- Link to your api.css file -->
</head>
<body>
    <h1>Google Maps</h1>
    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU6xfgcNXiZmaMBP_mK4ieLAq4waa02Yw&callback=initMap" async defer></script>

    <script>
            function initMap() {
                var centerCoordinates = { lat: 10.680193901062012, lng: 122.96199035644531 };
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: centerCoordinates,
                    zoom: 18
                });
            }
    </script>
</html>
