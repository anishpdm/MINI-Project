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
                  <h3 class="mb-0">Create a ClassInCharge </h3>
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST">
                <h6 class="heading-small text-muted mb-4"> Class In Charge information</h6>
                <div class="pl-lg-4">




                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"> Name </label>
                        <input name="studentname" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Program Name" pattern="[A-Za-z]+" required >
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
                        <input name="password" type="password" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain 6 or more characters" required >


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

    $username=$_POST['username'];
    $password=$_POST['password'];


     $sql = "INSERT INTO `ClassInCharge`( `Name`, `Uname`, `Password`) VALUES('$studentname','$username','$password')
      ";
    $result = $conn->query($sql);

    if ($result === true) {
      echo "<script type='text/javascript'> alert('ClassInCharge Created Succesfully ') </script>";
    } else {
     echo   $errorMessage=$conn->error;
//echo "<script type='text/javascript'> alert('$errorMessage') </script>";
    }


}

?>
