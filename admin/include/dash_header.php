<?php
// to Hide All Errors:
error_reporting(0);
ini_set('display_errors', 0);

// to Show All Errors:
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWAHABA ACADEMY</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="css/dash_style.css" rel="stylesheet">

    <!-- font-awesome  -->
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/js/jquery-3.2.1.js"></script>

    <!-- Sweet alert -->
    <script src="../assets/sweetalert/sweetalert.js"></script>



    <!-- javascript bootstrap -->
    <!-- <script src="assets/bootstrap/js/jquery-3.2.1.js"></script> -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container-fluid">
        <!-- header -->
        <div class="row" style="height:50px;">
            <div id="heading" class="col-md-2 sm-12 " style="height:50px;">
                <h6 id="headinglogo">SWAHABA ACADEMY</h6>
            </div>
            <div id="leftheader" class="col-md-10 sm-12 ">
                <button class=" navbar-toggler" type="button" data-toggle="collapse" id="sidebarcollapse"
                    data-target="collapse_target" data-toggle="collapse">
                    <span id="bars" class="fa fa-bars fa-lg text-light"></span>


                </button>
                <div class="navbar-nav pull-right">
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </div>


        <!-- End of header -->

        <!-- starting center wrapper -->
        <div class="row sidebarrow" style=" height:550px;">
            <div id="sidebarmenu" class="col-md-2">

                <ul id="menu" class=" nav nav flex-column nav-pills nav-expad-md ">
                    <li class="nav-item">

                        <a class="nav-link  <?=@$dashboard ?> text-white" href="dashboard.php"> <i class="fa fa-th-large"></i>
                            &nbsp;Dashboard </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link feat-btn  <?=@$student?> " href="#"> <i class="fa fa-graduation-cap "></i> &nbsp;Students &nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"  ></i></a>
                        
                        <ul class="feat-show">
                            <li><a  href="add_student.php">add student</a></li>
                            <li><a  href="view_student.php">view student</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link feat-btn2" href="#"> <i class="fa fa-list-alt"></i> &nbsp;&nbsp;Classes &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
                        
                        <ul class="feat-show2">
                            <li><a href="#">add class</a></li>
                            <li><a href="#">view class</a></li>
                        </ul>
                        
                    </li>

                    <li class="nav-item">
                    <a class="nav-link feat-btn3" href="#"> <i class="fa fa-users"></i> &nbsp;Parent &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
                        
                        <ul class="feat-show3">
                            <li><a href="#">add parent</a></li>
                            <li><a href="#">view parent</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link feat-btn4" href="#"> <i class="fa fa-male"></i> &nbsp;Teachers &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-down"></i></a>
                        
                        <ul class="feat-show4">
                            <li><a href="#">add teachers</a></li>
                            <li><a href="#">view teachers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link feat-btn5" href="#"> <i class="fa fa-calendar"></i> &nbsp;Attendence <i class="fa fa-caret-down"></i></a>
                        
                        <ul class="feat-show5">
                            <li><a href="#">add attendence</a></li>
                            <li><a href="#">view attendence</a></li>
                        </ul>
                    </li>



                    <li class="nav-item">
                    <a class="nav-link feat-btn6" href="#"> <i class="fa fa-book"></i> &nbsp;Subject &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
                        
                        <ul class="feat-show6">
                            <li><a href="#">add subject</a></li>
                            <li><a href="#">view subject</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link feat-btn7" href="#"> <i class="fa fa-file-text"></i> &nbsp;Exams &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
                        
                        <ul class="feat-show7">
                            <li><a href="#">add exams</a></li>
                            <li><a href="#">view exams</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

            <script>
                $('.feat-btn').click(function(){
                    $('.feat-show').toggleClass("show");
                });

                $('.feat-btn2').click(function(){
                    $('.feat-show2').toggleClass("show");
                });


                $('.feat-btn3').click(function(){
                    $('.feat-show3').toggleClass("show");
                });

                $('.feat-btn4').click(function(){
                    $('.feat-show4').toggleClass("show");
                });

                $('.feat-btn5').click(function(){
                    $('.feat-show5').toggleClass("show");
                });


                $('.feat-btn6').click(function(){
                    $('.feat-show6').toggleClass("show");
                });
            


                $('.feat-btn7').click(function(){
                    $('.feat-show7').toggleClass("show");
                });
            </script>