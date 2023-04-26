<?php
/* Depending upon the selected modules this file will display all the surveys for that moduleThis shows details of each question and displays the result to the module leader */
include("connection.php");
 $moduleName = $_POST['module'];
	  $sqlfetchreward="select MAX(SURVEYID) FROM MODULESURVEY WHERE MODULECODE ='$moduleName' "; 
	  $resultfetchreward = mysqli_query($conn, $sqlfetchreward);
	  $rowfetchreward = mysqli_fetch_row($resultfetchreward);
	  $surveyid=$rowfetchreward[0];
$sql = "SELECT MODULECODE,SURVEYID,Q1,Q2,Q3,Q4,Q5 from modulesurvey where MODULECODE ='$moduleName' and SURVEYID<'$surveyid'";
$result = $conn->query($sql);
//$row = mysqli_fetch_row($result);

echo "SURVEYS FOR THE MODULE -$moduleName";
echo "<br>";
echo "MODULECODE   SURVEYID ";
while($row = mysqli_fetch_array($result)) {
	echo "<br>";
echo  $row['MODULECODE']." -----  ".  $row['SURVEYID'];


}

for ($count = 1; $count < $surveyid; $count++)
{
    $sql = "select count(studentid),sum(Q1),sum(Q2),sum(Q3),sum(Q4) from survey where MODULECODE ='$moduleName' and SURVEYID='$count' ";
   	$result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);	
	echo "<br>";
if ($row[0] !=0){
	 
    echo "-----------------------------------------------------------------------------------<br>";
  echo "The number of students completed survey for  $moduleName and surveyid $count is: " . $row[0] . "\n";
  $avgQ1=$row[1]/$row[0];
  $avgQ2=$row[2]/$row[0];
  $avgQ3=$row[3]/$row[0];
  $avgQ4=$row[4]/$row[0];
   echo "<br>";
  if($avgQ1>=1 && $avgQ1<1.5)  echo "Q1-maximum number of students said its Poor and the average of Q1 - " . $avgQ1 . "\n<br>";
   if($avgQ1>1.5 && $avgQ1<2.5)  echo "Q1-maximum number of students said its Average and the average of Q1 " . $avgQ1 . "\n<br>";
   if($avgQ1>2.5 && $avgQ1<3.5)  echo "Q1-maximum number of students said its Good and the average of Q1" . $avgQ1 . "\n<br>";
    if($avgQ1>3.5 && $avgQ1=4)  echo "Q1-maximum number of students said its Excellent and the average of Q1" . $avgQ1 . "\n<br>";
	
	
  if($avgQ2>=1 && $avgQ2<1.5)  echo "Q2-maximum number of students said its Poor and the average of Q2 -" . $avgQ2 . "\n<br>";
    if($avgQ2>1.5 && $avgQ2<2.5) echo "Q2-maximum number of students said its Average and the average of Q2 -" . $avgQ2 . "\n<br>";
	if($avgQ2>2.5 && $avgQ2<3.5)  echo "Q2-maximum number of students said its Good and the average of Q2 -" . $avgQ2 . "\n<br>";
	if($avgQ2>3.5 && $avgQ2=4)  echo "Q2-maximum number of students said its Excellent and the average of Q2 -" . $avgQ2 . "\n<br>";
	
	
  if($avgQ3>=1 && $avgQ3<1.5)  echo "Q3-maximum number of students said its Poor and the average of Q3 - " . $avgQ3 . "\n<br>";
  if($avgQ3>1.5 && $avgQ3<2.5)  echo "Q3-maximum number of students said its Average and the average of Q3 -  " . $avgQ3 . "\n<br>";
  if($avgQ3>2.5 && $avgQ3<3.5)  echo "Q3-maximum number of students said its Good and the average of Q3 -  " . $avgQ3 . "\n<br>";
  if($avgQ3>3.5 && $avgQ3=4)  echo "Q3-maximum number of students said its Excellent and the average of Q3 -  " . $avgQ3 . "\n<br>";
 

  if($avgQ4>=1 && $avgQ4<1.5)  echo "Q4-maximum number of students said its Poor and the average of Q4 - " . $avgQ4 . "\n<br>";
  if($avgQ4>1.5 && $avgQ4<2.5)  echo "Q4-maximum number of students said its Average and the average of Q4 - " . $avgQ4 . "\n<br>";
  if($avgQ4>2.5 && $avgQ4<3.5)  echo "Q4-maximum number of students said its Good and the average of Q4 -" . $avgQ4 . "\n<br>";
  if($avgQ4>3.5 && $avgQ4=4)  echo "Q4-maximum number of students said its Excellent and the average of Q4 -" . $avgQ4 . "\n<br>";

  
 /*echo "The average of  Q1 " . $avgQ1 . "\n";
 echo "The average of  Q2 " . $avgQ2 . "\n";
 echo "The average of  Q3 " . $avgQ3 . "\n";
 echo "The average of  Q4 " . $avgQ4 . "\n";*/
  
}
echo "<br>";
}

//echo "nisha";
//echo $row[0];
//echo $row[1];
//echo $row[2];
//echo $row[3];
//echo $row[4];
//echo $row[5];
?>
