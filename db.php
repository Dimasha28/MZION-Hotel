<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mzion_hotel.sql';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
