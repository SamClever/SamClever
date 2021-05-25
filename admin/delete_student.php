<?php
require_once("include/connection.php");

    if(isset($_GET['Del'])){
        $userid =$_GET['Del'];
        $sql ="delete from student where stuid ='".$userid."'";
        $result = mysqli_query($con,$sql);

        if($result){
            header("location:view_student.php");
        }else{
            header("location:view_student.php");
        }
    }


?>
