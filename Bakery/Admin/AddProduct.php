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
                            <a href="AddCategory.php">
                                <i class="fas fa-circle-o-notch "></i>Add Categories</a>
                        </li>
                        <li>
                            <a href="AddProduct.php">
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
                        <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name='catoption'>
                                        <?php
                                      //database properties
                                                    include '../dbConnection.php';
                                                    //creating mysql connection
                                                    $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
                                                    //query
                                                    $query = "select * from category";

                                                    $response = $conn->query($query);
                                                    if($response){
                                                        while($result = $response->fetch_assoc()){

                                                          $optid=$result['id'];
                                                          $category_name =$result['category_name'];

                                                        echo"<option value='$optid'>  $category_name </option>";
                                                        }
                                                        echo "</select>";
                                                    }
                                      ?>
                                </div>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Product Name">
                                </div>
                                <div class="form-group">
                                    <label>Product photo</label>

                                    <input class="file-upload-browse btn btn-gradient-primary" type="file" name="fileToUpload" id="fileToUpload">

                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="au-input au-input--full" type="text" name="description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="au-input au-input--full" type="number" name="price" placeholder="Price">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">SUBMIT</button>
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
    include '../dbConnection.php';
    //creating mysql connection
    $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $id = $_POST['catoption'];
        $name = $_POST['name'];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $tr=mysqli_real_escape_string($conn,$target_file);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
         //echo "Sorry, there was an error uploading your file.";
        }


        $description = $_POST['description'];
        $price = $_POST['price'];
                $query = "insert into products(category_id,product_name,product_pic1,description,price)
                VALUES('".$id."','".$name."','".$tr."','".$description."','".$price."')";
            $response = $conn->query($query);
            if($response){
                header('Location:./index.php');
            }
    }
    ?>

</body>

</html>
<!-- end document-->
