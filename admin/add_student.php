<?php
ob_start(); //function to salove redirect page
$page = "student";
$student = "font-weight-bold active";
$dashboard = "";
require_once("include/dash_header.php");
require_once("include/connection.php");
?>



<!-- Star of Insert student -->

<?php
if (isset($_POST['btn_submit'])) {
    $firstname = ucwords(strtolower($_POST['fname']));
    $middlename = ucwords(strtolower($_POST['mname']));
    $lastname = ucwords(strtolower($_POST['lname']));
    $gender     = $_POST['gender'];
    $address   = ucwords(strtolower($_POST['address']));
    $birthdate   = $_POST['dob'];
    $classname = $_POST['cname'];

    $tsudent = "INSERT INTO student(Fistname ,Middlename,Lastname,Gender,Dateofbirth,Address)
        VALUES('$firstname',' $middlename',' $lastname',' $gender','$birthdate ','$address')";

    $run = mysqli_query($con, $tsudent);
    // Sweet alert
    if ($run) { ?>
        <script>
            swal({
                title: "successs",
                text: "You have been succesefull registered",
                icon: "success"
            });

            setTimeout(
                function() {
                    window.location.href = "view_student.php";
                }, 3000); //wait for 5 seconds then load index.php
        </script>

    <?php
    } else { ?>
        <script>
            swal({
                title: "Not register",
                text: "There is problem in database",
                icon: "error"
            });
        </script>
<?php }
} ?>


<!-- //  end Sweet alert -->
<?php




// End of insert student

//catch stuid

$select = "SELECT * from student ORDER by stuid DESC LIMIT 1";
$run = mysqli_query($con, $select);
$studetails = mysqli_fetch_array($run, MYSQLI_ASSOC);
$insertedUserId = $studetails['stuid'];


// Insert into studentclass

if (isset($_POST['btn_submit'])) {
    $classname = $_POST['cname'];
    $studentclass = "INSERT INTO studentclass(stuid,classno) VALUES('$insertedUserId','$classname')";
    $run = mysqli_query($con, $studentclass);
}

?>
<!-- End of Insert student -->


<div id="content" class="col-md-10 pt-2">
    <form action="" method="post">
        <fieldset class="border p-2 ">
            <legend>Student Registration Form</legend>
            <!-- first row -->
            <div class="row">
                <div class="col-md-4">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter first Name" name="fname" id="fname" required>
                </div>

                <div class="col-md-4">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" placeholder="Enter Middle Name" name="mname" id="mname" required>

                </div>

                <div class="col-md-4">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" id="lname" required>

                </div>
            </div>
            <br>
            <!-- Second row -->
            <div class="row">
                <div class="col-md-4">

                    <label for="lastname">Select Gender</label>
                    <select name="gender" id="" class="form-control" required>

                        <option value="">----</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>



                <div class="col-md-4">
                    <label for="middlename">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="mname" required>

                </div>


                <div class="col-md-4">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address" id="address" required>
                </div>



            </div>
            <!-- Third row -->
            <br>
            <div class="row">

                <div class="col-md-4">

                    <!-- start  of  Selecting class name from db -->
                    <?php
                    $sql = "SELECT  DISTINCT Classname,Classno FROM Class  ORDER BY Classname ASC";
                    $result1 = mysqli_query($con, $sql);
                    ?>

                    <label for="class name">Class Name</label>
                    <select name="cname" id="" class="form-control" required>
                        <?php
                        while ($DataRows = mysqli_fetch_array($result1)) {
                            $classname = $DataRows["Classname"];
                            $Classno = $DataRows["Classno"];

                        ?>

                            <option value="<?= $Classno ?>"> <?php echo   $classname; ?></option>
                        <?php  } ?>

                    </select>
                    <!-- end of Selecting class name from db -->

                </div>


                <div class="col-md-4">
                    <!-- start  of  Selecting class Class category from db -->
                    <?php
                    $sql = "SELECT DISTINCT Class_category FROM Class ORDER BY Class_category ASC";

                    $result = mysqli_query($con, $sql);

                    ?>

                    <label for="class name">Class Category</label>
                    <select name="c_category" id="" class="form-control" required>
                        <?php
                        while ($DataRows = mysqli_fetch_array($result)) {

                            $classcategory = $DataRows["Class_category"];
                        ?>


                            <option value="<?= $Classno ?> "><?php echo $classcategory; ?></option>

                        <?php } ?>
                        <!-- end  of  Selecting class Class category from db -->
                    </select>



                </div>


            </div>

            <div class="row">
                <div>
                    <br>
                    <button type="submit" class="btn btn-success form-control " name="btn_submit" style="margin-top:9px;margin-left:15px;">Submit</button>
                </div>
            </div>









        </fieldset>
    </form>



</div>

</div>

<?php
require_once("include/dash_footer.php");
?>