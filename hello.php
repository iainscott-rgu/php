<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

<?php


echo "Hello World";



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
// iterate over $result object one $row at a time
// use fetch_array() to return an associative array

while($row = $result->fetch_array()){
    // print out fields from row of data
    echo $row['bbname'] . "<br>";
}





/*
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = "SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try {
        $st = $conn->query("SELECT [bbname],[latitude], [longitude] FROM [B&B] WHERE [city] = 'Aberdeen'");

        foreach ($st->fetchAll() as $row) {

            echo($row['bbname']);
            echo($row['latitude']);
            echo($row['longitude']);

        }


*/
?>

</p>
</body>
</html>