<?php
session_start();
include './dbcon.php';
if (isset($_POST["but"])) {

    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    $cpin = $_POST["cpin"];

    $cname = $_POST["cname"];

    $creg = $_POST["creg"];

    $cplace = $_POST["cplace"];



    $sql = " INSERT INTO `company`( `company_name`, `company_regno`, `place`, `pincode`,
     `username`, `password`, `status`) VALUES('$cname','$creg','$cplace','$cpin','$Username','$Password',0)  ";

    $result = $conn->query($sql);

    if ($result===TRUE) {

        echo "<script type='text/javascript'> alert('Registration Success') </script>";


        echo "<script type='text/javascript'> window.location.href='companylogin.php' </script>";
    } else {
        
        echo "<script type='text/javascript'> alert('Registration Failed') </script>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <center> <b> Online Verification System </b> </center>
                            </div>
                            <h4> </h4>
                            <h6 class="font-weight-light">
                                <center> <b> Company   Registration  </b> </center>
                            </h6>
                            <form class="pt-3" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Company name" name="cname">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Company Register number" name="creg">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Company Place" name="cplace">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Company PinCode" name="cpin">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Company username" name="Username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="but"> REGISTER </button>
                                    
                                    
\
                                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="companylogin.php"> Company LogIn   </a>
                                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="index.php"> Admin LogIn   </a>

                                    <!-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="index.html">SIGN IN</a> -->
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
</body>

</html> 