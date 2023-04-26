<?php
/*This page stores the register details into login table.
In addition, the student informations are stored into reward table*/
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
	$studentid = $_POST["id"];
	$reward = 0;
	$surveycount =0;
	$query = "insert into login(Username, Password, usertype, FirstName, LastName, Email,Studentid) values('$Username','$Password','$usertype','$FirstName','$LastName','$Email','$studentid')";
	$query1 = "insert into reward(Studentid,Surveycount,Reward) values('$studentid','$surveycount','$reward')";
	echo $query;
	$result = mysqli_query($conn,$query);
	$result1 = mysqli_query($conn,$query1);

	if($result){
		$_SESSION["msg"] = "Signup was succesful <br/><br/>Username : Your Email <br/>Password : firstname@123";
		$_SESSION["insertid"] = mysqli_insert_id($conn);
		header("Location:loginPage.html");
	}else{
		$_SESSION["msg"] = "Registration failed";
		header("Location:registerPage.html");
	}
?>