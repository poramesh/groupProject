<!--This page is the homepage for Module Leader user type and serves as the entry point for users who log in as module leaders-->

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
                    <a href="moduleLeader.html" class="nav-brand">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg main-nav">
                        <!-- Icons -->
                        <ul class="navbar-nav d-flex flex-row me-1">
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link text-white active" href="#"><i class="bi bi-grid"></i>
                                    Modules</a>
                            </li>
                            <!--<li class="nav-item me-3 me-lg-0">
                                <a class="nav-link text-white" href="rewards.php"><i class="bi bi-chat"></i> Rewards</a>
                            </li>-->
                            <!--<li class="nav-item me-3 me-lg-0">
                                <a href="feedback.html" class="nav-link text-white" href="#"><i class="bi bi-arrow-counterclockwise"></i>
                                    Feedback</a>
                            </li>-->
                        </ul>
                    </nav>
                    <!-- Navbar -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <nav class="navbar navbar-expand-lg avatar-nav">
                        <ul class="navbar-nav">
                            <!-- Avatar dropdown -->
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
                    
                </div>
                <!--side bar end-->

                <!--page start-->
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <!--your objectives-->
                    <div class="white-box">
                        <div class="white-box-heading">
                            <a href='####'><h5>WELCOME </h5>
                            <img src="assets/img/downarrow.png" alt="">
                        </div>
                    <!--white box two-->
                    <div class="row">
                        <!--<button input type="button" id="btn" value="Login" name="button"></button>-->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="md-bx-1">
                                <div class="bckclr"></div>
                                <div class="bx-cntnt">
                                <div class="inr-hd">
                                <a href="welcomeAdmin.php"><h4>Create Survey</h4></a>
                                <img src="assets/img/menu-horizontal.png" alt="">
                                </div>
                                </div>
                            </div>
                        </div>
                       <!-- </button>-->

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="md-bx-1">
                                <div class="bckclr"></div>
                                <div class="bx-cntnt">
                                <div class="inr-hd">
                                <a href="completedsurvey.html"><h4>Completed Surveys</h4></a>
                                <img src="assets/img/menu-horizontal.png" alt="">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--row 2-->
                    <div class="row mdrowtwo">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="md-bx-1">
                                <div class="bckclr"></div>
                                <div class="bx-cntnt">
                                <div class="inr-hd">
                                <a href="activesurvey.html"><h4>Active Surveys</h4></a>
                                <img src="assets/img/menu-horizontal.png" alt="">
                                </div>
                                </div>
                            </div>
                        </div>
						    <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="md-bx-1">
                                <div class="bckclr"></div>
                                <div class="bx-cntnt">
                                <div class="inr-hd">
                                <a href="indivFeedModLeader.html"><h4>Individual Student Feedback</h4></a>
                                <img src="assets/img/menu-horizontal.png" alt="">
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
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