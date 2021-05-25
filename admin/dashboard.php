<?php
$page = "dashboard";
$dashboard = "font-weight-bold active";
$student = "";
require_once("include/connection.php");
require_once("include/dash_header.php");

?>



<div id="content" class="col-md-10 pt-2">
    <!-- Card -->
    <div class="row">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-success text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="fa fa-graduation-cap fa-3x"></span>

                        </div>
                        <div class="col">
                            <h3 class="display-4">

                                <!-- Total no of student -->
                                <?php

                                $sql = "SELECT count(*) as count FROM `student`";
                                $result = mysqli_query($con, $sql);
                                $count = mysqli_fetch_array($result);

                                echo $count[0];
                            
                                ?>

                                <!-- End of loop  total no of student -->


                            </h3>
                            <h6>Students</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>
                        <a href="#" class="text-success">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>
                    </h5>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="fa fa-list-alt fa-3x"></span>
                        </div>
                        <div class="col">
                            <h3 class="display-4"> 00</h3>
                            <h6>classes</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>
                        <a href="#" class="text-primary">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-secondary text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="fa fa-users fa-3x"></span>
                        </div>
                        <div class="col">
                            <h3 class="display-4"> 00</h3>
                            <h6>Parents</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>
                        <a href="#" class="text-secondary">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>


                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header bg-warning text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="fa fa-users fa-3x"></span>
                        </div>
                        <div class="col">
                            <h3 class="display-4"> 00</h3>
                            <h6>Teachers</h6>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <h5>

                        <a href="#" class="text-warning">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>
                    </h5>
                </div>
            </div>
        </div>

    </div>




    <!-- Card  end-->

    <br>
    <!-- Card -->
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-success text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class=" fa fa-calendar fa-3x"></span>
                        </div>
                        <div class="col">
                            <h3 class="display-4"> 00</h3>
                            <h6>Attendence</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>

                        <a href="#" class="text-success">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>

                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-warning text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="fa fa-book fa-3x"></span>
                        </div>
                        <div class="col">
                            <h3 class="display-4"> 00</h3>
                            <h6>Subject</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>

                        <a href="#" class="text-warning">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="fa fa-file-text fa-3x"></span>
                        </div>
                        <div class="col">
                            <h3 class="display-4"> 00</h3>
                            <h6>Exams</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <h5>

                        <a href="#" class="text-primary">View Detalis <i class=" fa fa-arrow-circle-right"></i></a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Card  end-->




</div>

</div>

<?php
require_once("include/dash_footer.php");

?>