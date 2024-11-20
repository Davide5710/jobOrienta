
<?php

/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Studios";


$servername = "31.11.39.87";
$username = "Sql1621673";
$password = "Bricklayer2003!";
$dbname = "Sql1621673_4";

$servername = "localhost";
$username = "gyfxryjv_nastri";
$password = "catalogoSitecal172";
$dbname = "gyfxryjv_CATALOGO";


$servername = "31.11.39.140";
$username = "Sql1754148";
$password = "sqlCaBerta19!";
$dbname = "Sql1754148_1";
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
