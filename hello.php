<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

<?php


/*
//mysql code
$db = new mysqli(
    "bbsqldb.database.windows.net",
    "teamdsqldb",
    "Sql20022016*",
    "SQL_BB"
);
// test if connection was established, and print any errors
if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}


$sql_query = "SELECT * FROM B&B";
// execute the SQL query
$result = $db->query($sql_query);
if (!$result) {
    die('No query');
}
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array

while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['bbname'] . "<br>";
}

*/


/*


echo ($row [bbname]);
echo ($row [latitude]);
echo ($row [longitude]);
}

*/

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}



//sql code
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try {
        $st = $conn->query("SELECT [bbname],[address],[latitude],[longitude] FROM [B&B] WHERE [city] = 'Aberdeen'");


        header("Content-type: text/xml");
        echo '<markers>';

        foreach ($st->fetchAll() as $row) {


            echo '<marker ';
            echo 'name="' . parseToXML($row['bbname']) . '" ';
            echo 'address="' . parseToXML($row['address']) . '" ';
            echo 'lat="' . $row['latitude'] . '" ';
            echo 'lng="' . $row['longitude'] . '" ';
            echo '/>';
        }

// End XML file
        echo '</markers>';


 }
    catch(PDOException $e)
    {print"$e";}

?>


    function load() {
    var map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(47.6145, -122.3418),
    zoom: 13,
    mapTypeId: 'roadmap'
    });
    var infoWindow = new google.maps.InfoWindow;

    // Change this depending on the name of your PHP file
    downloadUrl("hello.php", function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers.length; i++) {
    var name = markers[i].getAttribute("name");
    var address = markers[i].getAttribute("address");
    var type = markers[i].getAttribute("type");
    var point = new google.maps.LatLng(
    parseFloat(markers[i].getAttribute("lat")),
    parseFloat(markers[i].getAttribute("lng")));
    var html = "<b>" + name + "</b> <br/>" + address;
    var icon = customIcons[type] || {};
    var marker = new google.maps.Marker({
    map: map,
    position: point,
    icon: icon.icon
    });
    bindInfoWindow(marker, map, infoWindow, html);
    }
    });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
    google.maps.event.addListener(marker, 'click', function() {
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
    });
    }

    function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

    request.onreadystatechange = function() {
    if (request.readyState == 4) {
    request.onreadystatechange = doNothing;
    callback(request, request.status);
    }
    };

    request.open('GET', url, true);
    request.send(null);
    }

    function doNothing() {}

    //]]>

    </script>


    </p>
</body>
</html>



