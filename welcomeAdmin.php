<!-- This page is for the module leader to preform actions like 
1.creating survey
2.Completed Survey
3.Active survey
4.To display the feedback reaised by students individually
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
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
                                <a class="nav-link text-white active" href="#"><i class="bi bi-grid"></i>
                                    Modules</a>
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
                                            $username = $_SESSION['username'];
                                            echo substr($username, 0, 1);
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
                                    <p>COMP7002 - Modern Computer Systems</p>
                                </div>
                            </div>
                            <!--box2-->
                            <div class="m-boxes">
                                <img src="assets/img/grid-image.png" alt="">
                                <div class="m-content">
                                    <p>COMP7029 - Group Project</p>
                                </div>
                            </div>
                            <!--box3-->
                            <div class="m-boxes">
                                <img src="assets/img/grid-image.png" alt="">
                                <div class="m-content">
                                    <p>TECH7004- Cyber Security & The Web</p>
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
                        <div class="white-box-heading">
                            <h5>Welcome Admin</h5>
                            <img src="assets/img/downarrow.png" alt="">
                        </div>
                        <div class="white-box-heading-1">
                            <h5>My Modules</h5>
                        </div>
                    <!--white box two-->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="dm-bx-1">
                                <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/img/plus-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="dm-bx-1">
                                <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/img/plus-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="dm-bx-1">
                                <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/img/plus-2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--row 2-->
                    <div class="row mdrowtwo">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="dm-bx-1">
                                <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/img/plus-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="dm-bx-1">
                                <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/img/plus-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="dm-bx-1">
                                <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="assets/img/plus-2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--page end
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create a new survey</h5>
		  
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="createsurvey.php" method="post">
		    <INPUT TYPE="Radio" Name="module" Value="COMP7002" required="required">COMP7002- Modern Computer Systems</br>
            <INPUT TYPE="Radio" Name="module" Value="COMP7029" required="required">COMP7029 - Group Project</br>
			<INPUT TYPE="Radio" Name="module" Value="TECH7004" required="required">TECH7004- Cyber Security & The Web </br>
            <Label>Question no.1</Label>
            <input type="text" name="Q1" placeholder="Type your question here" size="40" required>
			<br>
            <Label>Question no.2</Label>
            <input type="text" name="Q2" placeholder="Type your question here" size="40" required>
			<br>
            <Label>Question no.3</Label>
            <input type="text" name="Q3" placeholder="Type your question here" size="40" required>
			<br>
            <Label>Question no.4</Label>
            <input type="text" name="Q4" placeholder="Type your question here" size="40" required>
			<br>
            <Label>Question no.5</Label>
            <input type="text" name="Q5" placeholder="Type your question here" size="40" required>
			<br>
           <!-- <input type="submit" name="submit">-->
			<button input type="submit" id="btn"  name="submit">SUBMIT</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
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