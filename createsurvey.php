<?php
include("connection.php");
   if(isset($_POST['submit'])){
$modulecode= $_POST['module'];
$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$Q5 = $_POST['Q5'];
echo "module: ",$modulecode;
echo "<br>";
echo "q1 : ",$Q1;
echo "<br>";
$conn = new mysqli($servername, $username, $password, $db_name);
echo "hello";
	  $sqlfetchreward="select MAX(SURVEYID) FROM MODULESURVEY "; 
	  $resultfetchreward = mysqli_query($conn, $sqlfetchreward);
	  $rowfetchreward = mysqli_fetch_row($resultfetchreward);
	  $surveyid=$rowfetchreward[0] + 1;
	    $sql1 = "insert into MODULESURVEY (MODULECODE,SURVEYID,Q1,Q2,Q3,Q4,Q5) values ('$modulecode','$surveyid','$Q1','$Q2','$Q3','$Q4','$Q5')";
   	$result1 = mysqli_query($conn, $sql1);


	echo "data inserted into the modeulesurvey table successfully ";
   }
?>