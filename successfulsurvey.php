<?php
/* This page provides acknowledgement for the student for providing survey.In addition it shows the reward point*/
include("connection.php");
 session_start();
$username1=$_SESSION['username'];
$studentid=$_SESSION['studentid'];
	  $sql = "select reward from reward where studentid='$studentid'; ";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <h2>Thank You for providing your valuable feedback  <?php  echo "$username1 "; ?> !! your reward point is added </h2>
	<h2>Total reward point is <?php  echo $row[0]; ?></h2>
	<button onclick="history.back()">Go Back</button> 
</body>
</html>