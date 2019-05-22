
<?php
include './mynavbar.php';
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



$sql = "SELECT `id`, `company_name`, `company_regno`, `place`, `pincode` FROM `company` WHERE `status`=0";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<form method='POST'> <table class='table'>  ";

    echo " <tr> <th> Company NAME</th> <th> Register Number </th><th> Place </th> <th> PinCode </th> <th> Action </th> </tr>  ";


    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $company_name = $row["company_name"];
      $company_regno = $row["company_regno"];

      $place = $row["place"];

      $pincode = $row["pincode"];

      $id = $row["id"];






     echo " <tr>  <td> $company_name </td>  <td> $company_regno </td> <td> $place </td>  <td> $pincode </td>
      <td>  <Button class='btn btn-success' value='$id' name='but'> Approve </Button> </td>

        <td>  <Button class='btn btn-warning' value='$id' name='rejbut'> Reject  </Button> </td>

        </tr>  ";





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

    $id = $_POST["but"];


    $sql = "UPDATE `company` SET `status`=1 where `id`= $id";

    $result = $conn->query($sql);

    if ($result===TRUE) {


        echo "<script type='text/javascript'> alert(' Company Approved Succesfully') </script>";

        // echo "<script type='text/javascript'> alert('Succcess') </script>";

        echo "<script type='text/javascript'> window.location.href='companyapprove.php' </script>";
    } else {

        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}




if (isset($_POST["rejbut"])) {

    $id = $_POST["rejbut"];


    $sql = "DELETE FROM `company` WHERE `id`= $id";

    $result = $conn->query($sql);

    if ($result===TRUE) {


        echo "<script type='text/javascript'> alert(' Company Rejected Succesfully') </script>";

        // echo "<script type='text/javascript'> alert('Succcess') </script>";

        echo "<script type='text/javascript'> window.location.href='companyapprove.php' </script>";
    } else {

        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}




?>
