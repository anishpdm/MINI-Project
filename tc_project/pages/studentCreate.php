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
                  <h3 class="mb-0">Create a Student </h3>
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST">
                <h6 class="heading-small text-muted mb-4"> Student information</h6>
                <div class="pl-lg-4">
              



                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Student Name </label>
                        <input name="studentname" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Program Name" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">  Admission Number </label>
                        <input name="admno" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Program Name" >
 

</div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Select Department </label>

                        <select class="form-control form-control-alternative" name="dept">

<option value="Bsc Comp Science">Bsc Comp Science</option>

</select> 
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">    Address </label>
                        <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Enter Address" name="address">
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Pincode  </label>

                        <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Enter pincode" name="pincode">

                    </div>


                  
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Mobile Number</label>

                                   <input name="mob" type="text" id="input-email" class="form-control form-control-alternative" placeholder="Enter Mobile number">

                    </div>
                    </div>
                   
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username  </label>
                        <input name="username" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter the user Name" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">  Password   </label>
                        <input name="password" type="password" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Password" >
 

</div>
                    </div>
                  </div>


                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
<button class="btn btn-info" type="submit" name="but"> SUBMIT </button>                      </div>
                    </div>
                  


                    </div>
                    

                 
                  
            
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

    $studentname=$_POST['studentname'];
    $admno=$_POST['admno'];
    $address=$_POST['address'];

    $dept=$_POST['dept'];

    $pincode=$_POST['pincode'];

    $mob=$_POST['mob'];
    $username=$_POST['username'];
    $password=$_POST['password'];

     $sql = "INSERT INTO `students`( `name`, `admno`, `department`,
      `address`, `pincode`, `mobileno`, `username`, `password`) VALUES 
      ('$studentname','$admno','$dept','$address','$pincode','$mob','$username','$password')
      ";
    $result = $conn->query($sql);

    if ($result === true) {
      echo "<script type='text/javascript'> alert('Student Created Succesfully ') </script>";
    } else {
     echo   $errorMessage=$conn->error;
//echo "<script type='text/javascript'> alert('$errorMessage') </script>";
    }


}

?>

