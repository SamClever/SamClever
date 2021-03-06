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
            $result = mysqli_query($con, $sql);
            $count = 0;
            while ($students = mysqli_fetch_array($result)) {
                $count++;

            ?>

                <tr>
                    <td><?= $count ?></td>
                    <td><?= $students['Fistname'] . " " . $students['Middlename'] . " " . $students['Lastname']; ?></td>
                    <td><?= $students['Gender']; ?></td>
                    <td><?= $students['Dateofbirth']; ?></td>
                    <td><?= $students['Address']; ?></td>
                    <td><?= $students['Classname']; ?></td>
                    <td class="text-center"><?= $students['Class_category']; ?></td>
                   <td>
                        <a href="update_student.php?GetID=<?php echo $students['stuid'];?>"> <i class="fa fa-pencil text-warning fa-md "></i></a>
                       &nbsp;&nbsp;
                    <i class="fa fa-trash text-danger fa-md delete" id="<?php echo $students['stuid'] ?>"></i>&nbsp;&nbsp;&nbsp

                        <?php
                        //confirm alert
                        if (isset($_GET['res'])) {
                            $resposnse = $_GET['res'];
                            if ($resposnse == "success") { ?>
                                <script>
                                    swal({
                                        title: "success",
                                        text: "student deleted",
                                        icon: "success"
                                    });

                                    setTimeout(function() {
                                        window.location = "view_student.php";
                                    }, 3000);
                                </script>
                            <?php } else { ?>
                                <script>
                                    swal({
                                        title: "error",
                                        text: "student not deleted",
                                        icon: "error"
                                    });
                                </script>
                        <?php }
                        }
                        ?>
                    </td>
                </tr>
            <? } ?>
        </tbody>
    </table>


</div>
</div>

<?php
require_once("include/dash_footer.php");

?>

<script>
//delete alert
$(".delete").on('click', function(){
    var stuid = $(this).attr("id");
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this student!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "delete_student.php?Del="+stuid;
        } else {
            swal("canceled");
        }
    });
});
</script>