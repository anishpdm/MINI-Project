<?php
include './dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                    <form class="form-sample" method="POST">
                        <h4 class="card-title"> Search by Blood Group </h4>
                            <p class="card-description"></p>
<select class='form-control' name="searchBox" >
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select>

<br>

                           
                            <Button class='btn btn-success' value='$id' name='but'> Search </Button>
                         <br>
                            </form>
                            <div class='row'></div>
                            <?php

                            
                            if (isset($_POST["but"])) {
                                    $serachString = $_POST["searchBox"];
                                    $sql = "Select `name`, `address`, `blood_group`, mobile from user WHERE `blood_group`= '$serachString'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        echo " <br> <table class='table'>  ";
                                        echo " <tr>";
                                        echo " <th>NAME</th> ";
                                        echo " <th>Mobile</th> ";
                                        echo " <th>Address</th> ";
                                        echo " <th>Blood Group</th> ";
                                        echo "</tr>  ";
                                        while ($row = $result->fetch_assoc()) {
                                        $name = $row["name"];
                                        $address = $row["address"];
                                        $mobile = $row["mobile"];
                                        $blood_group = $row["blood_group"];
                                        echo " <tr>";
                                        echo " <td> $name </td>";
                                        echo " <td> $mobile </td>";
                                        echo " <td> $address </td>";
                                        echo " <td> $blood_group </td>";
                                        echo "</tr>  ";
                                        }
                                        echo "</table> ";
                                    
                                    }
                                }
                            ?>
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
