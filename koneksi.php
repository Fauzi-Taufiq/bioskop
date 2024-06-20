<?php

$servername 	= "localhost";
$username 		= "root";
$password 		= "";
$database 		= "db_bioskop2";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
	die("Connection gagal! " . $connection->connect_error);
} else {
	// echo "Connection berhasil!";
}