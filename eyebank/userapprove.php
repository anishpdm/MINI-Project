
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



$sql = "SELECT  id,`name`, `address`, `blood_group`, `pin_code`, `mobile`, `email` FROM `user` WHERE `status`=0";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<form method='POST'> <table class='table'>  ";

    echo " <tr> <th>  NAME</th> <th> Address </th><th> blood group </th> <th> PinCode </th> <th> Mobile </th> <th>  Email </th> <th> Action </th> </tr>  ";

    
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $name = $row["name"];
      $address = $row["address"];

      $blood_group = $row["blood_group"];

      $pincode = $row["pin_code"];
      $mobile = $row["mobile"];

      $email = $row["email"];


      $id = $row["id"];

     

     


     echo " <tr>  <td> $name </td>  <td> $address </td> <td> $blood_group </td>  <td> $pincode </td>  <td> $mobile </td> <td> $email </td>  <td>  <Button class='btn btn-success' value='$id' name='but'> Approve </Button> </td>    </tr>  ";
   




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
   

    $sql = "UPDATE `user` SET `status`=1 WHERE `id`= $id";

    $result = $conn->query($sql);

    if ($result===TRUE) {

       
        echo "<script type='text/javascript'> alert(' Donor Approved Succesfully') </script>";

        // echo "<script type='text/javascript'> alert('Succcess') </script>";

        echo "<script type='text/javascript'> window.location.href='userapprove.php' </script>";
    } else {
    
        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}




?>