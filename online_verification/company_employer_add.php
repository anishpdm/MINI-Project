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
                        <h4 class="card-title"> Add Employers </h4>
                        <form class="form-sample" method="POST" enctype="multipart/form-data" >
                            <p class="card-description">

                            </p>

<table class='table'>
  <tr>
    <td> Employer Name </td>
<td> <input class="form-control" type="text" name="ename" pattern="[A-Za-z]+" required > </td>

  </tr>

  <tr>
    <td> Employer Mobile </td>
<td> <input class="form-control" type="text" name="mob" pattern="[6789]{1}[0-9]{9}" required> </td>

  </tr>

  <tr>
    <td> Employer Email </td>
<td> <input class="form-control" type="text" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> </td>

  </tr>

  <tr>
    <td> Document Upload </td>
<td>
  <input class="file-upload-browse btn btn-gradient-primary" type="file" name="fileToUpload" id="fileToUpload" required>

 </td>

  </tr>

  <tr>
    <td> Educational Qualification Details  </td>
<td> 

    <input type="checkbox" name="check_list[]" value="SSLC"> SSLC
    <input type="checkbox" name="check_list[]" value="Plus Two"> Plus Two
    <input type="checkbox" name="check_list[]" value="Degree"> Degree
    <input type="checkbox" name="check_list[]" value="PG"> PG

</td>

  </tr>

  <tr>
    <td> </td>
<td>

<Button type='submit' class="btn btn-success" name="but"> SUBMIT  </Button>

 </td>

  </tr>
</table>

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

    $ename = $_POST["ename"];
    $mob = $_POST["mob"];
    $email = $_POST["email"];
    foreach($_POST['check_list'] as $check) {
     $edu .= ",".$check; //echoes the value set in the HTML form for each checked checkbox.
                   //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                   //in your case, it would echo whatever $row['Report ID'] is equivalent to.
}

    $target_dir = "documents/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$tr=mysqli_real_escape_string($conn,$target_file);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
// echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
} else {
 //echo "Sorry, there was an error uploading your file.";
}

 $sId=   $_SESSION['Cid'] ;
    $sql = " INSERT INTO `employers`( `company_id`, `employer_name`,
       `mob_no`, `email`, `status`, `documents`, `eduqualification`)
       VALUES ($sId,'$ename','$mob','$email',0,'$tr','$edu')  ";

    $result = $conn->query($sql);

    if ($result===TRUE) {


        echo "<script type='text/javascript'> alert(' Employer details submitted for Verification') </script>";

        // echo "<script type='text/javascript'> alert('Succcess') </script>";

        // echo "<script type='text/javascript'> window.location.href='index.php' </script>";
    } else {

        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}




?>
