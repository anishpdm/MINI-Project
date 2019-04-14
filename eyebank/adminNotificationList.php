<?php
include './mynavbar.php';
include './dbcon.php';


?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('table tr').click( function (x) {
        var closestTr = $(this).closest("tr") 
        // var $item = closestTr  // Finds the closest row <tr> 
        //             .text();   
        var notificationId = closestTr
                    .find('td[id]')
                    .attr("id");
        window.location.href="editNotification.php?id="+notificationId;
        });
});
</script>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Notifications </h4>
                            <p class="card-description"></p>
                            <?php
                                $sql = "SELECT `id`, `message` FROM `notification`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    echo "<form method='POST'> <table class='table'>  ";
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                    $message = $row["message"];
                                    $id = $row["id"];
                                    echo " <tr> <td id='$id'> $message </td> <td>  <Button class='btn btn-success' value='$id' name='but'> Delete </Button> </td> </tr>  ";
                                    }
                                    echo "</table> ";
                                }
                            ?>
                            <div class='row'></div>
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
<?php

include './dbcon.php';
if (isset($_POST["but"])) {

    $id = $_POST["but"];
    $sql = "DELETE FROM `notification` WHERE `notification`.`id` = $id";
    $result = $conn->query($sql);
    if ($result===TRUE) {
        echo "<script type='text/javascript'> alert(' Notification Deleted Successfully') </script>";
    } else {
        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}
?>