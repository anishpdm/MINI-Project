<?php
    session_start();
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
    <title>Dashboard</title>

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
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="AddConsumption.php">
                                <i class="fas fa-circle-o-notch "></i>Add Water consumption</a>
                        </li>
                        <li>
                            <a href="AddWaterTax.php">
                                <i class="fas fa-circle-o-notch"></i>add water Tax</a>
                        </li>
                        <li>
                            <a href="register.php">
                                <i class="fas fa-circle-o-notch "></i>Add User</a>
                        </li>

                        <li>
                            <a href="generatebills.php">
                                <i class="fas fa-circle-o-notch "></i> Generate Bills </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." /> -->
                                <!-- <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->

                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <!-- <i class="zmdi zmdi-comment-more"></i> -->
                                        <!-- <span class="quantity">1</span> -->
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <!-- <i class="zmdi zmdi-email"></i> -->
                                        <!-- <span class="quantity">1</span> -->
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <!-- <i class="zmdi zmdi-notifications"></i> -->
                                        <!-- <span class="quantity">3</span> -->
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <!-- <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">
                                                <?php
                                                    echo $_SESSION['username']
                                                ?>
                                            </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <!-- <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">
                                                        <?php
                                                            echo $_SESSION['username']
                                                            ?>
                                                        </a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../Login/index.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

                            </div>
                        </div>
                        <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                        </div>
                        <div class="login-form">



                                <div class="form-group">
                                    <label>Month</label>
                                    <select name="month" class='form-control'>
                                                 <option value="1"> Jan </option>
                                                 <option value="2"> Feb </option>
                                                 <option value="3"> Mar </option>
                                                 <option value="4"> Apr </option>
                                                 <option value="5"> May </option>
                                                 <option value="6"> Jun </option>
                                                 <option value="7"> Jul </option>
                                                 <option value="8"> Aug </option>
                                                 <option value="9"> Sep </option>
                                                 <option value="10"> Oct </option>
                                                 <option value="11"> Nov </option>
                                                 <option value="12"> Dec </option>


                                               </select>

                                                                             </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <select name="year" class='form-control'>
                                                 <option value="2019"> 2019 </option>



                                               </select>
                                </div><div class="form-group">

                                </div>
                                <button name="but" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">SUBMIT</button>
                            </form>


                        </div>
                    </div>





                </div>
            </div>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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


</body>

</html>


<?php

if(isset($_POST['but']) ){

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "nature";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);


    $month = $_POST['month'];
    $year = $_POST['year'];



     $sql="SELECT  `unitprice` FROM `unitprice`  order by `id` DESC LIMIT 1";


       $response = $conn->query($sql);


              if($response){


            while($result = $response->fetch_assoc()){

    $unitprice= $result['unitprice'];

     $sql="SELECT `unit`,consumer_no FROM `consumption` WHERE `month`=$month  AND `year`=$year ";
      $response = $conn->query($sql);


              if($response){
            while($result = $response->fetch_assoc()){

              $UsedUnit= $result['unit'];

              $consumer_no= $result['consumer_no'];

              $Price=$UsedUnit*$unitprice;


              $sql="INSERT INTO `bills`(`consumer_no`, `month`, `year`,
                `amount`, `paid_status`) VALUES ('$consumer_no',$month,$year,$Price,0)  ";
                $response = $conn->query($sql);
if($response){

  echo "<script>alert('Succesfully Added') </script> ";
}





   }
  }
}

}
else{

//echo $err=$conn->error;
//  echo "<script> alert('$err')</script>";

}





    }
    else {
      echo ";k;k;l";
    }
?>
<!-- end document-->
