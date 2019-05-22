<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php


  $dbhost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "online_bakery";

  //creating mysql connection
  $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);

  $Uid= $_SESSION['userid'];

  $sql = "SELECT  p.product_name,`user_id`, `product_id`, `quantity`, `amount`, `date` FROM `user_order` o JOIN products p on p.id=o.`product_id` where o.user_id=  $Uid ";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<form method='POST'> <table class='table'> <tr> <th> Date  </th> <th> Product Name  </th> <th> Qty </th><th> Amount </th> </tr> ";
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $pname=$row['product_name'];

        $quantity=$row['quantity'];

          $date=$row['date'];

            $amount=$row['amount'];


            echo " <tr>
<th>   $date  </th> <th> $pname  </th> <th>   $quantity </th><th>   $amount </th> </tr>
            ";






    }

          echo " <tr>  <td> <a class='btn btn-info'href='shop.php'>Back to Shopping  </a></td>  </tr>  ";


  }
    else{
      echo "No Orders Found";

      echo " <a class='btn btn-info'href='shop.php'>Back to Shopping  </a> ";

    }


 ?>


</table>


  </body>
</html>
