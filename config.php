<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "idekratif";


$conn = mysqli_connect($host, $username, $password, $database);


if ($conn->connect_error) {

die("database gagal terkoneksi: " . $conn->connect_error);
}


?>