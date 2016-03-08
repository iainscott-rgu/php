<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">


    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <title>Search Results: theB&Bhub</title>
</head>
<body>








<section class="googlemap" id="mapapi">


    <h1>My First Google Map</h1>

    <div id="map" style="width:400px;height:400px;background:snow"></div>



    <script>
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.2), zoom: 10
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
    </script>
</section>







</body>
</html>
