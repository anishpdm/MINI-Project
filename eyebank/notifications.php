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
                        <form class="form-sample" method="POST">
                        <textarea rows="4" cols="100" name="notification">
                        </textarea>
                            <div class='row'>
                    </div>
                    <Button class='btn btn-success' value='$id' name='but'> Post </Button>
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

    $notification = $_POST["notification"];
    $sql =  "INSERT INTO `notification`( `message`, `posted_date`) VALUES
    ('$notification',now())
      ";

    $result = $conn->query($sql);
    if ($result===TRUE) {
        echo "<script type='text/javascript'> alert('Notification Posted') </script>";
    } else {
        echo $conn->error;
       echo "<script type='text/javascript'> alert(Something went wrong.') </script>";
    }
}
?>