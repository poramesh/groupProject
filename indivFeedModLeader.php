<?php
include("connection.php");


        $moduleName = $_POST['module'];
        #echo $moduleName;

        echo "<br>";
        $sqlQuery = "SELECT modulecode, feedback FROM feedback WHERE modulecode = '$moduleName'";
        $result = mysqli_query($conn,$sqlQuery);


        while($row = mysqli_fetch_array($result, MYSQLI_NUM)){

         echo "<br><br>", $row[0], "  ";  // The code
         echo ($row[1]);  // The feedback
        }


?>        






