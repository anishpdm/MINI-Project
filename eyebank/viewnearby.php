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
                        <h4 class="card-title"> View Nearby Eye / Blood Banks </h4>


                    <?php



        $sql = "SELECT `id`, `type`, `location` FROM `nearest` WHERE 1 ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo " <br> <table class='table'>  ";
            echo " <tr>";
            echo " <th>Type</th> ";
            echo " <th>Location</th> ";

            echo "</tr>  ";
            while ($row = $result->fetch_assoc()) {
            $name = $row["type"];
            $address = $row["location"];

            echo " <tr>";
            echo " <td> $name </td>";
            echo " <td> $address </td>";

            echo "</tr>  ";
            }
            echo "</table> ";

        }

?>
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
