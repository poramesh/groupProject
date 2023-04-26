<?php
include("connection.php");
	  $sqlfetchreward="select MAX(SURVEYID) FROM MODULESURVEY WHERE MODULECODE ='TECH7004' "; 
	  $resultfetchreward = mysqli_query($conn, $sqlfetchreward);
	  $rowfetchreward = mysqli_fetch_row($resultfetchreward);
	  $surveyid=$rowfetchreward[0];
$sql = "SELECT MODULECODE,SURVEYID,Q1,Q2,Q3,Q4,Q5 from MODULESURVEY where MODULECODE ='TECH7004' and SURVEYID='$surveyid'";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module</title>
    <!--bootsrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Boostrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- MDB -->
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!---Header Start-->
    <header class="dashboard-header">
        <div class="container container-lg container-md container-sm">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <a href="/" class="nav-brand">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg main-nav">
                        <!-- Icons -->
                        <ul class="navbar-nav d-flex flex-row me-1">
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link text-white active" href="module.php"><i class="bi bi-grid"></i>
                                    Modules</a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link text-white" href="rewards.php"><i class="bi bi-chat"></i> Rewards</a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link text-white" href="individualfeedback.html"><i class="bi bi-arrow-counterclockwise"></i>
                                    Feedback</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Navbar -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <nav class="navbar navbar-expand-lg avatar-nav">
                        <ul class="navbar-nav">
                            <!-- Avatar -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    <span> <?php session_start();
                                             $username=$_SESSION['username'];
                                             echo substr($username,0,1);
                                        ?></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#">My profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!---Header end-->

    <!---content start-->
    <div class="content">
        <div class="container container-lg container-md container-sm">
            <div class="row">
                <!--side bar start-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <nav class="side-nav">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-1 active">
                                <a href="javascript:void(0)">
                                    <div class="groupicon">
                                        <i class="bi bi-person"></i>
                                        <span> Dashboard</span>
                                    </div>
                                    <span class="notify">3</span>
                                </a>
                            </li>
                            <li class="list-group-item py-1">
                                <a href="javascript:void(0)">
                                    <div class="groupicon">
                                        <img src="assets/img/pencil-circle.png" alt="">
                                        <span> Survey</span>
                                    </div>
                                    <span class="notify">7</span>
                                </a>
                            </li>
                            <li class="list-group-item py-1">
                                <a href="javascript:void(0)">
                                    <div class="groupicon">
                                        <i class="bi bi-star"></i>
                                        <span> Rewards</span>
                                    </div>
                                    <span class="notify">12</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!---Module-->
                    <div class="module-content">
                        <div class="people-heading">
                            <h4>Module (3)</h4>
                            <img src="assets/img/downarrow.png" alt="">
                        </div>

                        <!---module content-->
                        <div class="module-boxes">

                            <!--box1-->
                            <div class="m-boxes">
                                <img src="assets/img/grid-image.png" alt="">
                                <div class="m-content">
                                    <a href="COMP7002.php"<p>COMP7002 - Modern Computer Systems</p></a>
                                </div>
                            </div>
                            <!--box2-->
                            <div class="m-boxes">
                                <img src="assets/img/grid-image.png" alt="">
                                <div class="m-content">
                                    <a href="COMP7029.php"<p>COMP7029 - Group Project</p></a>
                                </div>
                            </div>
                            <!--box3-->
                            <div class="m-boxes">
                                <img src="assets/img/grid-image.png" alt="">
                                <div class="m-content">
                                    <a href="TECH7004.php"<p>TECH7004 - Cyber Security & The Web</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--side bar end-->
                <!--page start-->
                
               <div class="col-lg-9 col-md-9 col-sm-9">
                        <!--your objectives-->
                        <div class="white-box">
                            <form action="feedback.php" method="post">
                                <div class="white-box-heading">
                                    <h5>TECH7004 - Cyber Security & The Web </h5>
                                    <textarea name="modulecode" value="TECH7004"><?php echo $row[0]; ?></textarea>
                                    <textarea name="surveyid" value="1"><?php echo $row[1]; ?></textarea>
                                </div>
                                <h1>FEEDBACK</h1>
                                <p>1.<?php  echo $row[2]; ?></p>
                                <input type="radio" id="Poor" name="q1" value="1">
                                <label for="Poor">&#128542;</label>

                                <input type="radio" id="Average" name="q1" value="2">
                                <label for="Average">&#128577;</label>
                                <input type="radio" id="happy" name="q1" value="3">
                                <label for="happy">&#128578;</label>
                                <input type="radio" id="excellent" name="q1" value="4">
                                <label for="excellent">&#128525;</label>
                                <br><br>
                                <p>2.<?php  echo $row[3]; ?></p>
                                <input type="radio" id="Poor" name="q2" value="1">
                                <label for="Poor">&#128542;</label>
                                <input type="radio" id="Average" name="q2" value="2">
                                <label for="Average">&#128577;</label>
                                <input type="radio" id="happy" name="q2" value="3">
                                <label for="happy">&#128578;</label>
                                <input type="radio" id="excellent" name="q2" value="4">
                                <label for="excellent">&#128525;</label>
                                <br><br>
                                <p>3.<?php  echo $row[4]; ?></p>
                                <input type="radio" id="Poor" name="q3" value="1">
                                <label for="Poor">&#128542;</label>
                                <input type="radio" id="Average" name="q3" value="2">
                                <label for="Average">&#128577;</label>
                                <input type="radio" id="happy" name="q3" value="3">
                                <label for="happy">&#128578;</label>
                                <input type="radio" id="excellent" name="q3" value="4">
                                <label for="excellent">&#128525;</label>
                                <br><br>
                                <p>4.<?php  echo $row[5]; ?></p>
                                <input type="radio" id="Poor" name="q4" value="1">
                                <label for="Poor">&#128542;</label>
                                <input type="radio" id="Average" name="q4" value="2">
                                <label for="Average">&#128577;</label>
                                <input type="radio" id="happy" name="q4" value="3">
                                <label for="happy">&#128578;</label>
                                <input type="radio" id="excellent" name="q4" value="4">
                                <label for="excellent">&#128525;</label>
                                <br><br>
                                <p>5.<?php  echo $row[6]; ?></p>
                                <input type="radio" id="Poor" name="q5" value="1">
                                <label for="Poor">&#128542;</label>
                                <input type="radio" id="Average" name="q5" value="2">
                                <label for="Average">&#128577;</label>
                                <input type="radio" id="happy" name="q5" value="3">
                                <label for="happy">&#128578;</label>
                                <input type="radio" id="excellent" name="q5" value="4">
                                <label for="excellent">&#128525;</label>
                                <br><br><br>
                                <textarea rows="4" cols="50" name="q5" placeholder="Provide your Suggestions here..."></textarea>
                                <br>
                                <br>
                                <button input type="submit" id="btn" value="Login" name="submit">SUBMIT</button> </br></br>
</div>
                    </div>
                    </form>
                    <!--page end-->
            </div>
            </div>
       
	
        <p class="copyright">Teachwise - All Rights Reserved</p>
        </div>
        
    </div>
    <!---content end-->



    <!---Bootstrap js---->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!---MDB js---->
    <script src="assets/js/mdb.min.js"></script>
</body>

</html>

