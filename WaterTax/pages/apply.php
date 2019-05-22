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
                <h6 class="heading-small text-muted mb-4"> Online Apply </h6>
                <div class="pl-lg-4">
              



                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"> Certificate Type  </label>
                        <select class="form-control form-control-alternative" name="type">

<option value="TCandCC">Transfer Certificate and Conduct Certificate </option>
<!-- <option value="TC">Transfer Certificate Only </option>
<option value="CC">Conduct Certificate Only </option> -->


</select>                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email"> Message  </label>
                        <input name="text" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Enter the Message" >
 

</div>
                    </div>
                  </div>

                  <button class="btn btn-info" type="submit" name="but"> Apply  </button>                      </div>




                  

                


                    

                 
                  
            
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

