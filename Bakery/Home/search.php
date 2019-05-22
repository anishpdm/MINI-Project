<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <!-- <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form> -->
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">BAKERY</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <!-- <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>  -->
            </div>

          </div>
        </div>
      </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children">
              <!-- <a href="index.html">Home</a> -->
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children">
              <!-- <a href="about.html">About</a> -->
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li class="active"><a href="shop.php">Shop</a></li>
            <!-- <li><a href="#">Catalogue</a></li> -->
            <!-- <li><a href="#">New Arrivals</a></li> -->
            <!-- <li><a href="contact.html">Contact</a></li> -->
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="../Login/index_user.php">Log-out</a> <span class="mx-2 mb-0"></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <!-- <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button> -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <!-- <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button> -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<form method="POST">

  <table class='table'>

    <tr>
      <td> <input class='form-control' type="text" name="pname" value="" placeholder="Enter a Product name ">

        <td><button class='btn btn-success' name='search' >SEARCH </button></td>


      </td>
    </tr>


  </table>

</form>



            <form method="POST">
            <div class="row mb-5">
                <?php
                //database properties
              if(isset($_POST['search']))
{

  $item=$_POST['pname'];

  $dbhost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "online_bakery";

  //creating mysql connection
  $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);


    $sql = "SELECT `id`, `category_id`, `product_name`, `product_pic1`, `description`, `price` FROM `products` where product_name like '$item' ";


  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {



$id=$row['id'];

                                  $imag=$row['product_pic1'];
                                  $name=$row['product_name'];
                                  $description=$row['description'];

                                  $price=$row['price'];


                                echo " <div class=col-sm-6 col-lg-4 mb-4 data-aos=fade-up>
                          <div class=block-4 text-center border>
                            <figure class=block-4-image>
                                <a href=''><img src='http://localhost/miniprojects/Bakery/Admin/$imag' style=width:400px;height:400px; alt=Image placeholder class=img-fluid></a>
                            </figure>

                            <div class='block-4-text p-4'>
                              <h3><a href='shop-single.html'> $name  </a></h3>
                              <p class='mb-0'> $description </p>
                              <p class='text-primary font-weight-bold'> Rs.$price </p>

                              <a class='btn btn-success' href='buynow.php?id=$id'>Buy Now </a>
                            </div>
                          </div>

                                </div>";

      }
  } else {
      echo "0 results";
  }

}


                ?>



            </div>

          </form>

          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <?php
                //database properties
                  $dbhost = "localhost";
                  $dbUser = "root";
                  $dbPass = "";
                  $dbName = "online_bakery";

                  //creating mysql connection
                  $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
                  //query
                  $query = "select * from category";

                  $response = $conn->query($query);
                  if($response){
      echo "<li><a href='shop.php' class=d-flex>ALL Products </a></li>";

                      while($result = $response->fetch_assoc()){
                        $catid=$result['id'];
                      echo"<li><a href='catshop.php?catid=$catid' class=d-flex>".$result['category_name']."</a></li>";
                      }
                      echo "</ul>";
                  }
                ?>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">

              <a class='btn btn-info'href='search.php'>Search a Product </a>

              <!-- <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div> -->

              <!-- <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                </label>
              </div> -->

              <!-- <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div> -->

            </div>
          </div>
        </div>



  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>

<?php

if(isset($_POST['buybutton']))
{

  echo $Id=$_POST['buybutton'];



}


 ?>
