<?php
session_start();
?>
<?php
include './dbcon.php';
?>
<?php
include './studheader.php';
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
                  <h3 class="mb-0"> Certificate Apply  </h3>
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST">
                <h6 class="heading-small text-muted mb-4"> Application Status  </h6>
                <div class="pl-lg-4">
              

<?php
 $id= $_SESSION['id'];



 $sql = "SELECT a.`id`,s.name ,s.AcademicYear,`studentid`, `applicationtype`, `message`, `status` FROM `application` a JOIN students s on s.id=a.`studentid` WHERE `studentid`=$id
 ";
 $result = $conn->query($sql);
 if($result->num_rows>0)
 {
    echo " <form method='POST' ><table class='table'> <tr> <th>  TYPE </th>  <th> MESSAGE </th>   <th> STATUS </th> <th> View Certificate </th> </tr>  ";

    while($row=$result->fetch_assoc())
    {
        $applicationtype=$row['applicationtype'];

        $message=$row['message'];
        $status=$row['status'];

        $name=$row['name'];
        $AcademicYear=$row['AcademicYear'];

        echo "<tr> <td> $applicationtype </td> 
         <td> $message </td>  ";

         if( $status==1 )
         {
            echo " <td> Approved </td> ";

            echo " <td> <a href='viewcert.php?name=$name&year=$AcademicYear' target='_blank' >View Certificate </a> </td> ";


         }
         else if($status==-1)
         {
            echo " <td> Rejected </td> ";

         }
         else{
            echo " <td> In process </td> ";

         }

         
  

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

if(isset($_POST['but'])){

  $id= $_SESSION['id'];

  $type=$_POST['type'];

  $msg=$_POST['text'];

  $sql = "INSERT INTO `application`( `studentid`, `applicationtype`, `message`, `status`) VALUES 
  ($id,'$type','$msg',0)
  ";
  $result = $conn->query($sql);

  if ($result === true) {
    echo "<script type='text/javascript'> alert('Application submitted Succesfully ') </script>";
    echo "<script>  window.location.href='apply.php'</script> ";
  } else {
   echo   $errorMessage=$conn->error;
//echo "<script type='text/javascript'> alert('$errorMessage') </script>";
  }

    
    


}

?>

