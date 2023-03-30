<?php
include("connection.php");
   if(isset($_POST['submit'])){
	$username1 = $_POST['username'];
	$pswrd = $_POST['pswrd'];
    $sql = "select studentid from login where username = '$username1' and password = '$pswrd'";
	 setcookie($username1);
	 setcookie($pswrd);
    $studentid= mysqli_query($conn, $sql);

    
   }


?>