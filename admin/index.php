<script src="../assets/sweetalert/sweetalert.js"></script>
<?php
require_once("include/connection.php");


if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['Password'];
    $sql = "select * from Login where Username='$username' AND Password ='$password'";
    $run = mysqli_query($con, $sql) or die("error");
    $row = mysqli_fetch_array($run);

    if($row){
        session_start();
        $_SESSION['username'] = $id;
        header('Location:dashboard.php');

    }else{
        header('Location:index.php');
    }
}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome  -->
    <link rel="../stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/js/jquery-3.2.1.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- javascript bootstrap -->
    <!-- <script src="assets/bootstrap/js/jquery-3.2.1.js"></script> -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</head>


<body>
    <div class="card col-md-6 mt-5" style="margin: auto">
        <div class="card-head">

        </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <!-- <div class="input-group">
                <span class="input-group-text " >
                <span class="fa fa-bars fa-lg text-light"></span>
                </span> -->
                    <input type="text" name="username" id="username" placeholder="username" class="form-control" required>
                </div>
                <!-- </div> -->

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" id="Password" name="Password" placeholder="Password" class="form-control" required>
                </div>
                <button type="submit" name="btn_login" id="btn_login" class="form-control btn btn-success">
                    Login
                </button>
            </form>
        </div>
    </div>

    
</body>

</html>