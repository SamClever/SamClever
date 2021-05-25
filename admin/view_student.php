<?php
$page = "view_student";
$student = "font-weight-bold active";
$dashboard = "";
require_once("include/dash_header.php");
require_once("include/connection.php");
?>




<div id="content" class="col-md-10 pt-2 col-sm-12 table-responsive-sm">
    <table class="table table-hover ">
        
        <thead class="thead-light">
            <th>id</th>
            <th>Full name</th>
            <th>Gender</th>
            <th>Date of birth</th>
            <th>Address</th>
            <th>Class name</th>
            <th> Class category</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?
                $sql = "SELECT  stuid,Fistname,Middlename,Lastname,Gender,Dateofbirth,Address,Classname,Class_category FROM student 
                INNER JOIN (Class INNER JOIN studentclass USING (Classno))USING(stuid)";
                $result = mysqli_query($con,$sql);
                $count =0;
                while($students =mysqli_fetch_array($result)){
                    $count++;
                
            ?>

            <tr>
                <td><?= $count?></td>
                <td><?= $students['Fistname']." ".$students['Middlename'] ." ".$students['Lastname'];?></td>
                <td><?= $students['Gender'];?></td>
                <td><?= $students['Dateofbirth'];?></td>
                <td><?=$students['Address'];?></td>
                <td><?= $students['Classname'];?></td>
                <td class="text-center"><?=$students['Class_category'];?></td>
                <td>
                    <a href="#"><i class="fa fa-pencil text-warning fa-md"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="delete_student.php?Del=<?php  echo $students['stuid']?>"><i class="fa fa-trash text-danger fa-md"></i></a>&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <?}?>
        </tbody>
    </table>


</div>
</div>

<?php
require_once("include/dash_footer.php");

?>