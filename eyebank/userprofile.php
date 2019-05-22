<?php
session_start();
?>
<?php
include './donornavbar.php';
include './dbcon.php';
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">


            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> View Profile </h4>
                        <form class="form-sample" method="POST">
                            <p class="card-description">

                            </p>

                            <?php
 $sId=   $_SESSION['Cid'] ;


$sql = "SELECT  `name`, `streetname`, `housename`, `blood_group`, `pin_code`, `mobile`, `email`  FROM `user` WHERE `id`=$sId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<form method='POST'> <table class='table'>  ";


    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $Name = $row["name"];
      $streetname = $row["streetname"];

      $housename = $row["housename"];


      $blood_group = $row["blood_group"];

      $pin_code = $row["pin_code"];

      $mobile = $row["mobile"];
      $email = $row["email"];







     echo " <tr> <td> Name</td> <td> $Name </td> </tr>  ";
     echo " <tr> <td> Street name </td> <td> $streetname </td> </tr>  ";
     echo " <tr> <td> House name </td> <td> $housename </td> </tr>  ";

     echo " <tr> <td> Blood Group </td> <td> $blood_group </td> </tr>  ";
     echo " <tr> <td> Pincode </td> <td> $pin_code </td> </tr>  ";

     echo " <tr> <td> Mobile </td> <td> $mobile </td> </tr>  ";

     echo " <tr> <td> Email </td> <td> $email </td> </tr>  ";

     echo " <tr> <td>  </td> <td> <a href='deactivate.php?id=$sId'>DEACTIVATE </a> </td> </tr>  ";





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
