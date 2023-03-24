<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "groupproject";
    $conn = new mysqli($servername, $username, $password, $db_name);
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

    echo "Connection succesfull";
	/*
$db_username ='root';
$db_password = ''; 
$db_database ='groupproject';
$db_host='localhost'; 
?>*/
?>