<?php
include("connection.php");
   if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$pswrd = $_POST['pswrd'];
    $sql = "select * from student where username = '$username' and password = '$pswrd'";
    $result = mysqli_query($conn, $sql);
	echo "hi nisha";
    $count = mysqli_num_rows($result);
    if($count==1){
        header("Location:welcome.php");
    }
    
    else{
        echo '<script>
              window.location.href = "loginform.html";
              alert("Login failed. Invalid username or password");
              </script>';
            }
   }

   
?>