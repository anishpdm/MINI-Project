<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

if(isset($_GET['pid']))
{
  $dbhost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "herb";

  //creating mysql connection
  $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);


  $id=$_GET['pid'];

  $_SESSION['qty']=  $qty=$_GET['qty'];

  $_SESSION['final']=  $price=$_GET['price'];






  $sql = "SELECT `id`, `category_id`, `product_name`, `product_pic`, `product_description`, `disease_1`, `disease_2`, `disease_3`, `price` FROM `products` WHERE `id`=$id";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<form method='POST'> <table class='table'> ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $imag=$row['product_pic'];
      $name=$row['product_name'];
      $description=$row['product_description'];

      echo "<tr> <td>  <a href=''><img src='http://localhost/miniprojects/herb/admin_panel/$imag' style=width:200px;height:200px; alt=Image placeholder class=img-fluid></a>
 </td> </tr> ";

      echo "<tr> <td> Product Name  </td> <td>$name </td> </tr> ";

        echo "<tr> <td> Quantity  </td> <td> $qty </td> </tr> ";

        echo "<tr> <td> Total Amount   </td>   <td> $price   </td> </tr> ";

        echo "<tr> <td> Payment Mode   </td>   <td> <input type='text' name='addr' value='Cash On Delivery' readonly />  </td> </tr> ";



        echo "<tr> <td> </td>  <td>
        <button class='btn btn-success' name='approvebtn' value='$id'> CONFIRM ORDER </button>


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
 $qty=$_SESSION['qty'];

 $price =$_SESSION['final'];

$Uid= $_SESSION['userid'];

$sql = "INSERT INTO `user_order`(user_id, `product_id`, `quantity`, `amount`, `date`) VALUES
($Uid,$PId,$qty,$price,now())";




$result = $conn->query($sql);

if ($result===TRUE) {


  echo "<script> alert('Order placed Succesfully')</script> ";

  echo "<script> window.location.href='shop.php'</script> ";
}
else{
  echo "<script> alert('Error')</script> ";


}







}

 ?>
