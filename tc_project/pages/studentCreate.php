<?php
include './dbcon.php';
?>
<?php
include './InchargeHeader.php';
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
                        <input name="studentname" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Program Name" pattern="[A-Za-z]+" required >
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
                        <label class="form-control-label" for="input-username">Academic Year  </label>


                        <select class="form-control form-control-alternative" name="year">

  <option value="2018-2019">2018-2019</option>

    <option value="2017-2018">2017-2018</option>

  <option value="2016-2017">2016-2017</option>
  </select>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Select Course </label>

                        <select class="form-control form-control-alternative" name="course">

<option value="UG">UG</option>

<option value="PG">PG</option>

</select>
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">    Street name </label>
                        <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Enter Street name" name="address" required>
                      </div>
                    </div>
                  </div>




                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"> Locality  </label>

                        <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Enter Locality" name="Locality" required>

                    </div>
                    </div>




                  </div>

                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-username">Select Department  </label>

                      <select class="form-control form-control-alternative" name="dept">

                  <option value="Bsc Computer Science">Bsc Computer Science</option>

                      <option value="Bsc Electronics">Bsc Electronics</option>

                  </select>
                                      </div>
                                      </div>


                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label" for="input-email">    Date of Birth </label>
                                          <input type="date" id="input-email" class="form-control form-control-alternative"  name="dob" required>
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

                                   <input name="mob" type="text" id="input-email" class="form-control form-control-alternative" placeholder="Enter Mobile number" name="mob" pattern="[6789]{1}[0-9]{9}" required >

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
    $admno=$_POST['admno'];

    $year=$_POST['year'];

    $address=$_POST['address'];

    $dept=$_POST['dept'];
    $course=$_POST['course'];

    $pincode=$_POST['pincode'];

    $mob=$_POST['mob'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $Locality=$_POST["Locality"];

        $dob=$_POST['dob'];

     $sql = "INSERT INTO `students`(AcademicYear, `name`, `admno`, `department`,
      `address`, `pincode`, `mobileno`, `username`, `password`,`course`,  `dob`,Locality) VALUES
      ('$year','$studentname','$admno','$dept','$address','$pincode','$mob','$username','$password','$course','$dob')
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
