<?php
include("connection.php");
$sql = "SELECT MODULECODE,SURVEYID,Q1,Q2,Q3,Q4,Q5 from MODULESURVEY where MODULECODE ='COMP7002' and SURVEYID=1";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);
?>