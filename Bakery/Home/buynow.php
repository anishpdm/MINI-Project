<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

if(isset($_GET['id']))
{
  $dbhost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "online_bakery";

  //creating mysql connection
  $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);


  $id=$_GET['id'];

  $sql = "SELECT `id`, `category_id`, `product_name`, `product_pic1`, `description`, `price` FROM `products` where id=$id";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<form method='POST'> <table class='table'> ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $imag=$row['product_pic1'];
      $name=$row['product_name'];
      $description=$row['description'];

      echo "<tr> <td>  <a href=''><img src='http://localhost/miniprojects/Bakery/Admin/$imag' style=width:200px;height:200px; alt=Image placeholder class=img-fluid></a>
 </td> </tr> ";

      echo "<tr> <td> Product Name  </td> <td>$name </td> </tr> ";

        echo "<tr> <td> Quantity  </td> <td> <input name='qty' type='number' pattern='[0-9]+' min='1' required/> </td> </tr> ";

        echo "<tr> <td> NAME  </td>   <td> <input type='text' name='name' />  </td> </tr> ";

        echo "<tr> <td> Address  </td>   <td> <input type='text' name='addr' />  </td> </tr> ";

        echo "<tr> <td> Pincode  </td>   <td> <input type='text' name='pincode' />  </td> </tr> ";

        echo "<tr> <td> Mobile number  </td>   <td> <input type='text' name='mob' />  </td> </tr> ";



        echo "<tr> <td> </td>  <td>
        <button class='btn btn-success' name='approvebtn' value='$id'> Go to Payments </button>


          </td> </tr> ";






}

echo " </table> </form>";
}



}






     ?>

  </body>
</html>

<?php


if(isset($_POST['approvebtn']))
{


   $PId=$_POST['approvebtn'];
 $qty=$_POST['qty'];


$sql = "SELECT  `price` FROM `products` where id=$id";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

echo "<form method='POST'> <table class='table'> ";
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $price=$row['price'];



  }

  echo $totalAmount=$price*$qty;


echo " <script> window.location.href='placeorder.php?pid=$PId&qty=$qty&price=$totalAmount' </script> ";

}







}

 ?>
