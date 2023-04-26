<?php
include("connection.php");
session_start();
$username1=$_SESSION['username'];
$studentid=$_SESSION['studentid'];


$conn = new mysqli($servername, $username, $password, $db_name);
$sql="select reward from Reward where studentid=' $studentid'";
$result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_row($result);
echo "<h2>Hi $username1 your Reward point is $row[0]</h2>";
echo '<button onclick="history.back()">Go Back</button>';
?>