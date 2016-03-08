<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
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




<section class="container" id="content2">


    <div class="main">


        <?php
        $city = $_POST['location'];
        $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        try{
            $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = '$city'");


            foreach($st->fetchAll() as $row) {
                $newhtml =
                    <<<NEWHTML
                        <div class="table4">
    <p>According to our database, your search of: <strong>{$row[city]}</strong> has returned the following results: </p>
    <p><strong>{$row[city]}</strong></p>
    <p><strong>{$row[bbname]}</strong></p>
    <p><strong>{$row[address]}</strong></p>
    <p><strong>{$row[email]}</strong></p>




    <p><a href="Customerinfo.html"><input type="submit" value="BOOK" /></a></p>



</div>
NEWHTML;
                print($newhtml);
            }
        }
        catch(PDOException $e)
        {print"$e";}
        ?>

    </div>
</section>








</body>
</html>
