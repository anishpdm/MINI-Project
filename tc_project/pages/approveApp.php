<?php
include './dbcon.php';
?>
<?php
include './header.php';
?>
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 300px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <!-- <h1 class="display-2 text-white">Hello Administrator</h1>
            <p class="text-white mt-0 mb-5"> </p>
            <a href="#!" class="btn btn-info">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
     
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">TC Applications </h3>
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST">
             
<?php
 $sql = "SELECT a.`id`,s.name, `studentid`, `applicationtype`, `message`, `status` FROM `application` a join students s on s.id=a.`studentid` WHERE `status`=0
 ";
$result = $conn->query($sql);

if ($result->num_rows>0) {

    echo " <form method='POST' ><table class='table'> <tr> <th>  NAME </th>  <th> TYPE </th>   <th> MESSAGE </th> <th> APPROVE </th> <th> REJECT </th></tr>  ";

    while($row=$result->fetch_assoc())
{
    $id=$row['id'];
$name=$row['name'];
$applicationtype=$row['applicationtype'];
$message=$row['message'];

    echo "<tr> <td> $name </td>  <td> $applicationtype </td>   <td> $message </td> <td> <Button class='btn btn-success' value='$id' name='aprbut' > APPROVE </Button> </td> <td> <Button class='btn btn-warning' value='$id' name='rejbut' > REJECT </Button> </td></tr>  ";

}

echo " </table> </form> ";

}
?>
                 
                  
            
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      

      <?php


?>

<?php

if(isset($_POST['aprbut'])){

    $aprbut=$_POST['aprbut'];
   

     $sql = "UPDATE `application` SET `status`=1 WHERE `id`=$aprbut";
    $result = $conn->query($sql);

    if ($result === true) {
      echo "<script type='text/javascript'> alert('Application approved Succesfully ') </script>";
      echo "<script>  window.location.href='approveApp.php'</script> ";
    } else {
     echo   $errorMessage=$conn->error;
//echo "<script type='text/javascript'> alert('$errorMessage') </script>";
    }


}

if(isset($_POST['rejbut'])){

    $aprbut=$_POST['rejbut'];
   

     $sql = "UPDATE `application` SET `status`=-1 WHERE `id`=$aprbut";
    $result = $conn->query($sql);

    if ($result === true) {
      echo "<script type='text/javascript'> alert('Application rejected Succesfully ') </script>";
    echo "<script>  window.location.href='approveApp.php'</script> ";
    
    } else {
     echo   $errorMessage=$conn->error;
//echo "<script type='text/javascript'> alert('$errorMessage') </script>";
    }


}

?>

