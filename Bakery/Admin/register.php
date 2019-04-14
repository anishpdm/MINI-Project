<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div>
        <div class="page-content--bge5">
            <div class="container" style="background-color:white;">
                <div class="login-wrap" >
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div> -->
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain 6 or more characters" type="password" name="psw_one" placeholder="Password">
                                </div>
                                <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain 6 or more characters" type="password" name="psw_two" placeholder="Re-Enter Password">
                                    </div>
                                <div class="form-group">
                                        <label>Phone number</label>
                                        <input class="au-input au-input--full" type="tel" name="phone" placeholder="Phone Number">
                                        </div>
                                <div class="form-group">
                                        <label>Address</label>
                                        <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                        <label>Pin-Code</label>
                                        <input class="au-input au-input--full" type="number" name="pin" placeholder="Pin-Code">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="../login/user_login.html">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <?php
    session_start();
    //database properties
    include '../dbConnection.php';
    //creating mysql connection
    $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $name = $_POST['name'];
        $u_name = $_POST['username'];
        $psw_one = $_POST['psw_one'];
        $psw_two = $_POST['psw_two'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pin = $_POST['pin'];
        if($psw_one === $psw_two){
                $query = "insert into users(name,username,password,ph,address,pincode) 
                VALUES('".$name."','".$u_name."','".$psw_one."','".$phone."','".$address."','".$pin."')";  
            $response = $conn->query($query);
            if($response){
                header('Location:../Login/index_user.php');
            }
        }
    }
    ?>
</body>

</html>
<!-- end document-->