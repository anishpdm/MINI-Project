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
                            <a href="index5.html">
                                <i class="fas fa-circle-o-notch "></i>Add Categories</a>
                        </li>
                        <li>
                            <a href="index6.html">
                                <i class="fas fa-circle-o-notch"></i>Add Products</a>
                        </li>

                        <li>
                            <a href="vieworders.php">
                                <i class="fas fa-circle-o-notch"></i>View Orders </a>
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
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." /> -->
                                <!-- <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
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
                                            <a href="../login/index.html">
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
                            <form action="" method="post">


                              <?php


                                $dbhost = "localhost";
                                $dbUser = "root";
                                $dbPass = "";
                                $dbName = "herb";

                                //creating mysql connection
                                $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);


                                $sql = "SELECT u.`id`,us.name, quantity,`amount`, `date`,`category_id`, `product_name`, `product_pic`, `product_description`, `disease_1`, `disease_2`, `disease_3`, `price` FROM `products` p JOIN user_order u  on p.id=u.`product_id` JOIN users us on us.id=u.user_id order by us.`id` desc";


                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {

                                echo "<form method='POST'> <table class='table'>
                                <tr> <th> Date  </th> <th> NAME  </th>  <th> Product Name  </th> <th> Qty </th><th> Amount </th> </tr> ";
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {

                                    $pname=$row['product_name'];

                                      $quantity=$row['quantity'];

                                        $date=$row['date'];

                                          $amount=$row['amount'];
                                              $name=$row['name'];




                                          echo " <tr>
                              <td>   $date  </td> <td>   $name  </td> <td> $pname  </td> <td>   $quantity </td><td>   $amount </td> </tr>
                                          ";






                                  }



                                }
                                  else{
                                    echo "No Orders Found";


                                  }


                               ?>


                              </table>





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
    <?php

    ?>

</body>

</html>
<!-- end document-->
