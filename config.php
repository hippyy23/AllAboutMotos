<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "root", "", "allaboutmotos");

    if (!$conn) {
        die("ERROR CONNECTIONG TO DATABASE: " . mysqli_connect_error());
    }

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/aboutmotos/');
?>