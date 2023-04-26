<?php
/*The feedback from students are  stored into the feedback table */
include("connection.php");
$modulecode= $_POST['module'];
$feedback=$_POST['feedback'];
echo "module: ",$modulecode;
echo "<br>";
echo "feedback : ",$feedback;
echo "<br>";
$conn = new mysqli($servername, $username, $password, $db_name);
$sql="insert into FEEDBACK (MODULECODE,FEEDBACK) values ('$modulecode','$feedback')";
$result = mysqli_query($conn, $sql);
if($result)
	echo 'data inserted';
else
	echo'error in insertion of data into feedback table';

	echo "<script>if(confirm('Your individual feedback is submitted Sucessfully . ')){document.location.href='individualfeedback.html'};</script>";
   
?>