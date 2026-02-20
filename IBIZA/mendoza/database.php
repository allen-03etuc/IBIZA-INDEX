<?php
$host = "localhost";
$user = "root";
$password ="";
$dbname = "mendoza" 

$conn = new mysqli($host, $user, $password, $dbname);

IF ($conn->Connect_Error) {
    die ("Connection Failed") , ($conn->connect_error);

}
?>
