<?php
session_start();
?>
<?php
include './companynavbar.php';
include './dbcon.php';
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">


            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> View Status </h4>
                        <form class="form-sample" method="POST">
                            <p class="card-description">

                            </p>

                            <?php
 $sId=   $_SESSION['Cid'] ;


$sql = "SELECT `id`,`employer_name`, `mob_no`, `email`, `status`, `documents`, `eduqualification` FROM `employers` WHERE company_id=$sId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<form method='POST'> <table class='table'>  ";

 echo " <tr> <td>  NAME</td> <td> Mobile</td>  <td> Email</td> <td> Document </td> <td> Educational Qualification </td>
<td> Status  </td>
   </tr>  ";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $Name = $row["employer_name"];
      $mob_no = $row["mob_no"];

      $email = $row["email"];

      $status = $row["status"];

      $documents = $row["documents"];

      $eduqualification = $row["eduqualification"];








     echo " <tr> <td> $Name </td> <td>  $mob_no  </td>   ";
     echo "  <td> $email </td>    ";
     echo "  <td> <a href='./$documents' target='_blank'> View </a>  </td>
     <td> $eduqualification </td>   ";

     if($status==1){
       echo "<td> VERIFIED  </td> </tr>  ";
     }
     else if( $status==0 )
     {
       echo "<td> IN PROCESS  </td> </tr>  ";
     }
     else{
 echo "<td> FAKE DOCUMENTS  </td> </tr>  ";

     }






    }

    echo "</table> ";

}





?>
                            <div class='row'>



                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>

<?php

include './dbcon.php';
if (isset($_POST["but"])) {

    $exam_code = $_POST["exam_code"];
    $last_date = $_POST["last_date"];
    $Subject = $_POST["Subject"];
    $exam_name = $_POST["exam_name"];


    $sql = " INSERT INTO `Mains_Exam_Create`(`ExamCode`, `ExamName`, `LastDate`, `Subject`) VALUES ('$exam_code','$exam_name','$last_date','$Subject') ";

    $result = $conn->query($sql);

    if ($result===TRUE) {


        echo "<script type='text/javascript'> alert('Main Exam Created Succesfully') </script>";

        // echo "<script type='text/javascript'> alert('Succcess') </script>";

        // echo "<script type='text/javascript'> window.location.href='index.php' </script>";
    } else {

        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}




?>
