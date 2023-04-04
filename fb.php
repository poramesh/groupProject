<?php
include("connection.php");
include("login.php");
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$modulecode = $_POST['modulecode'];
$surveyid = $_POST['surveyid'];

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

?>