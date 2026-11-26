<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "peminjaman_alat";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>