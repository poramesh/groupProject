<?php
include("connection.php");
 session_start();
$username1=$_SESSION['username'];
$studentid=$_SESSION['studentid'];

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$modulecode = $_POST['modulecode'];
$surveyid = $_POST['surveyid'];
echo "<br>";

echo "username1: ",$username1;
echo "<br>";
echo "studentid : ",$studentid;
echo "<br>";
echo "q1: ", $q1;
echo "<br>";
echo "q2: ", $q2;
echo "<br>";
echo "q3: ", $q3;
echo "<br>";
echo "q4: ", $q4;
echo "<br>";
echo "q5: ", $q5;
echo "<br>";
echo "moduleid: ", $modulecode;
echo "<br>";
echo "surveyid: ", $surveyid;
echo "<br>";
	$sql="insert into survey (MODULECODE,SURVEYID,STUDENTID,Q1,Q2,Q3,Q4,Q5,STATUS) values ('$modulecode','$surveyid','$studentid','$q1','$q2','$q3','$q4','$q5','DONE')";
	$conn = new mysqli($servername, $username, $password, $db_name);
	$result = mysqli_query($conn, $sql);
	if($result)
		echo 'data inserted';
   

    
?>