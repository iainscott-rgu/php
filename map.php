<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<script src="https://maps.googleapis.com/maps/api/js"
        type="text/javascript"></script>
<script type="text/javascript">



    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.2), zoom: 10
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
</script>




    <div id="map" style="width:400px;height:400px;background:snow"></div>







</body>
</html>