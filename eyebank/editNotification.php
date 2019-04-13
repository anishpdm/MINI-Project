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
                        <h4 class="card-title"> Notifications </h4>
                        <form class="form-sample" method="POST">
                            <p class="card-description"></p>
                            <?php
                                $sql = "SELECT  `message` FROM `notification`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    echo "<form method='POST'> <table class='table'>  ";
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                    $message = $row["message"];
                                    echo " <tr> <td> $message </td> </tr>  ";
                                    }
                                    echo "</table> ";
                                }

                            ?>
                            <div class='row'></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
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