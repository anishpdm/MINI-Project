
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
                        <h4 class="card-title"> Add EYE / BLOOD BANK  </h4>
                        <form class="form-sample" method="POST">
                            <p class="card-description">

                            </p>

                            <?php


    echo "<form method='POST'> <table class='table'>  ";

    echo " <tr> <td>  Type </td> <td>
<select name='opt' class='form-control'>
<option value='Blood Bank'>Blood Bank </option>

<option value='Eye Bank'>Eye Bank </option>

</select>

     </td> </tr>

<tr>

     <td> Location </td> <td> <input type='text' value='' name='loc' class='form-control' /> </td> </tr>



     <td>  </td> <td> <input type='submit'  name='but' class='btn btn-info' value='ADD' /> </td> </tr>";




    echo "</table> ";







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

    $opt= $_POST["opt"];

    $loc= $_POST["loc"];



    $sql = "INSERT INTO `nearest`( `type`, `location`) VALUES('$opt','$loc')";

    $result = $conn->query($sql);

    if ($result===TRUE) {


        echo "<script type='text/javascript'> alert(' Added Succesfully') </script>";

        // echo "<script type='text/javascript'> alert('Succcess') </script>";

        echo "<script type='text/javascript'> window.location.href='addeye.php' </script>";
    } else {

        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}







?>
