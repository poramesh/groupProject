<?php
/* This file validates the login username and password and on successfull login it navigates to respective page*
student - module.php and moduleleader -welcomeadmin.html.On unsuccessful login alret message will be sent */
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

    $studentid = $row1[0];
    echo "<br>";

    $_SESSION['studentid'] = $row1[0];
    echo "studentid ", $studentid;

    $sql2 = "select usertype from login where username = '$username' and password = '$pswrd'";
   	$result2 = mysqli_query($conn, $sql2);
    echo "<br>";

    $row2 = mysqli_fetch_row($result2);

    $usrtype = $row2[0];

    echo "usertype ", $usrtype;

   $count = mysqli_num_rows($result);
    if($count==1){
        header("Location:module.html");
    }

    if($usrtype == 'student'){
        header("Location:module.php");
    } elseif($usrtype == 'moduleleader'){
        header("Location:moduleleader.php");
    }
    else{
        echo '<script>
              window.location.href = "loginpage.html";
              alert("Login failed. Invalid username or password");
              </script>';
            }
			
        }
		
?>