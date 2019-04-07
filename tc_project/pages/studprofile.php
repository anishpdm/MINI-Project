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
                  <h3 class="mb-0"> Profile View  </h3>
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">My Profile </h6>
                <div class="pl-lg-4">
            
                    


                 <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">

<?php

$id= $_SESSION['id'];
$sql = "SELECT  `name`, `admno`, `department`, `address`, `pincode`, `mobileno` FROM `students` WHERE `id`=$id ";
$result = $conn->query($sql);

if($result->num_rows>0)
{
    echo "    <table class='table align-items-center table-flush'>
    <thead class='thead-light'>
    
    </thead>
    <tbody> ";

    while($row=$result->fetch_assoc())
    {
        $name=$row['name'];
        $admno=$row['admno'];
        $department=$row['department'];
        $address=$row['address'];
        $pincode=$row['pincode'];
        $mobileno=$row['mobileno'];

        echo "<tr>
        <th scope='row'>
       
            <div class='media-body'>
              <span class='mb-0 text-sm'  >Name  </span>
            </div>
          </div>
        </th>
        <td>
          $name
        </td>
      </tr> 



      <th scope='row'>
       
            <div class='media-body'>
              <span class='mb-0 text-sm'  >Admission Number  </span>
            </div>
          </div>
        </th>
        <td>
          $admno
        </td>
      </tr> 
      


      <th scope='row'>
       
      <div class='media-body'>
        <span class='mb-0 text-sm'  > Department  </span>
      </div>
    </div>
  </th>
  <td>
    $department
  </td>
</tr>



<th scope='row'>
       
<div class='media-body'>
  <span class='mb-0 text-sm'  > Address  </span>
</div>
</div>
</th>
<td>
$address
</td>
</tr>
      


<th scope='row'>
       
<div class='media-body'>
  <span class='mb-0 text-sm'  > pincode  </span>
</div>
</div>
</th>
<td>
$pincode
</td>
</tr>


<th scope='row'>
       
<div class='media-body'>
  <span class='mb-0 text-sm'  > Mobile  </span>
</div>
</div>
</th>
<td>
$mobileno
</td>
</tr>
      
      
      
      ";

    }
}


?>

                  
                  
  
                </tbody>
              </table>



                    </div>
                  


                    </div>

                 
                  
            
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      

   