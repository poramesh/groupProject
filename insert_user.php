<?php
include("connection.php");
	
	session_start();
	echo "<br>";
	echo "isset successful";
	echo "<br>";
	$FirstName = $_POST["firstname"];
	$LastName = $_POST["lastname"];
	$Email = $_POST["email"];
	$Username = $_POST["username"];
	$Password = $_POST["password"];
	$usertype = $_POST["usertype"];

	$query = "insert into login(Username, Password, usertype, FirstName, LastName, Email) values('$Username','$Password','$usertype','$FirstName','$LastName','$Email')";
	echo $query;
	$result = mysqli_query($conn,$query);

	if($result){
		$_SESSION["msg"] = "Signup was succesful <br/><br/>Username : Your Email <br/>Password : firstname@123";
		$_SESSION["insertid"] = mysqli_insert_id($conn);
		header("Location:loginPage.html");
	}else{
		$_SESSION["msg"] = "Registration failed";
		header("Location:registerPage.html");
	}
?>