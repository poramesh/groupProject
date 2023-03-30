<?php
include("connection.php");
   if(isset($_POST['submit'])){
	   session_start();
	$username = $_POST['username'];
	$_SESSION['username']=$username;
	$pswrd = $_POST['pswrd'];
    $sql = "select * from login where username = '$username' and password = '$pswrd'";
	 $result = mysqli_query($conn, $sql);
	$sql1 = "select studentid from login where username = '$username' and password = '$pswrd'";
    
	$result1 = mysqli_query($conn, $sql1);
	 $row1 = mysqli_fetch_row($result1);
	$studentid= $row1[0];
	 echo "<br>";
	 $_SESSION['studentid']=$row1[0];
	 echo $studentid;


    $count = mysqli_num_rows($result);
    if($count=1){
        header("Location:module.html");
    }
    
    else{
        echo '<script>
              window.location.href = "loginPage.html";
              alert("Login failed. Invalid username or password");
              </script>';
            }
			
			
   }


?>