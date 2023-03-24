<?php session_start();?>
<?php
	$fname = $_REQUEST["firstname"];
	$lname = $_REQUEST["lastname"];
	$dob = $_REQUEST["dob"];
	$city = $_REQUEST["city"];
	$file = $_FILES["image"];
	$gender = $_REQUEST["gender"];
	$mobile = $_REQUEST["mobile"];
	$email = $_REQUEST["email"];
	
	$size = $file["size"]/1024;
	$type =	$file["type"];
	$source = $file["tmp_name"];
	$destination = "../image_store/users/$email.jpg";
	
	if($size<12 && $type=="image/jpeg"){
		move_uploaded_file($source,$destination);
		//upload data
		
		$conn = mysqli_connect("localhost","root","","project");
		//db connection
		
		if(!$conn){
			die("Connection failed");
		}
		
		$username = $fname.".".$lname;
		$password = $fname."@123";
		$usertype = "client";
		
		$query = "insert into users values('','$username','$password','$fname','$lname','$dob','$city','$email','$gender','$destination','$usertype')";
		echo $query;
		$result = mysqli_query($conn,$query);
		
		if($result){
			$_SESSION["msg"] = "Login was succesful <br/><br/>Username : Your Email <br/>Password : firstname@123";
			$_SESSION["insertid"] = mysqli_insert_id($conn);
			header("Location:set_sec_question.php");
		}else{
			$_SESSION["msg"] = "Registration failed";
			header("Location:register.php");
		}
	}else{
		$_SESSION["msg"] = "use max 10kb and jpeg image only";
		header("Location:register.php");
	}
?>