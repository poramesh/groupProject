<?php
/*This file provides connection to the local database*/

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "groupproject1";
    $conn = new mysqli($servername, $username, $password, $db_name);
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

  //  echo "Connection succesfull nisha";
	/*
$db_username ='root';
$db_password = ''; 
$db_database ='groupproject';
$db_host='localhost'; 
?>*/
?>