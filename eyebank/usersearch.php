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


    echo "<form method='POST'> <table class='table'>  ";

    

     echo " <tr> <td> Blood Group </td> <td> 
     <select class='form-control' name='searchBox' >
     <option value='A+'>A+</option>
     <option value='A-'>A-</option>
     <option value='B+''>B+</option>
     <option value='B-'>B-</option>
     <option value='AB+'>AB+</option>
     <option value='AB-'>AB-</option>
     </select> 
     </td> </tr>  ";

    

     echo " <tr> <td>  </td> <td> <Button type='submit' class='btn btn-success' name='but'> SEARCH </Button> </td> </tr>  ";

   

    echo "</table> ";







?>
                            <div class='row'>
                                


                    </div>
                    </form>

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
