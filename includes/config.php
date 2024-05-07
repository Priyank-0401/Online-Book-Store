
<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "store";

$conn = new mysqli("localhost","root","","store");

// Check connection
if(!$conn){
    die("Connection failed: ".$conn->connect_error());
}
?>