<?php
require_once("include/connection.php");
require_once("include/dash_header.php");

$user_id =$_GET['GetID'];

    $sql = "select * from student where stuid ='".$user_id."'";
    $result =mysqli_query($con,$sql);

    while ($rows=mysqli_fetch_assoc($result)){
      $stuid= $rows['stuid'];
      $fname =$rows['Fistname'];
      $mname =$rows['Middlename'];
      $lname =$rows['Lastname'];
      $gender =$rows['Gender'];
      $dob    =$rows['Dateofbirth'];
      $address =$rows['Address'];
    }

?>
 <div id="content" class="col-md-10 pt-2">
    <form action="" method="post">
        <fieldset class="border p-2 ">
            <legend>Update Student</legend>
            <!-- first row -->
            <div class="row">
                <div class="col-md-4">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter first Name" name="fname" id="fname" required
                    value="<?php echo  $fname?>">
                </div>

                <div class="col-md-4">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" placeholder="Enter Middle Name" name="mname" id="mname" required
                           value="<?php echo  $mname?>">

                </div>

                <div class="col-md-4">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" id="lname" required
                           value="<?php echo  $lname?>">

                </div>
            </div>
            <br>
            <!-- Second row -->
            <div class="row">
                <div class="col-md-4">

                    <label for="lastname">Select Gender</label>
                    <select name="gender" id="" class="form-control" required value="<?php echo $gender?>">

                        <option value="">----</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>



                <div class="col-md-4">
                    <label for="middlename">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="mname" required value="<?php echo  $dob?>">

                </div>


                <div class="col-md-4">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address" id="address" required
                           value="<?php echo  $address?>">

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
                    <button type="submit" class="btn btn-primary form-control " name="btn_submit" style="margin-top:9px;margin-left:15px;">Update</button>
                </div>
            </div>


        </fieldset>
    </form>



 </div>

</div>


            <?php
            require_once("include/dash_footer.php");
            ?>


