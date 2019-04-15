<?php
include './userheader.php';
?>

<body class="animsition">
    <div>
        <div class="page-content--bge5">
            <div class="container" style="background-color:white;">
                <div class="login-wrap" >
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div> -->
                        <div class="login-form">
                    
                        </div>
                        
                       Apply Benifits
                    </div>
                </div>
            </div>
            
            
            
            
                     <form method="POST">
                <div>
                    <div class="container">
                    
                        <div class='row'> 
                            
                            <div class="col col-sm-2">
                                
                            </div>
                            
                            <div class="col col-sm-8">
                                
                                 
                    <table class='table'>
                        
                        <tr>
                            <td>
                                
                               <label>Type of Benefits</label>   
                            </td>
                            
                            <td>
                                <select class='form-control' name="benefits">
        <option value="Marriage Benefits"> Marriage Benefits </option>
         <option value="Maternity Benefits"> Maternity Benefits </option>
         <option value="Treatement Benefits"> Treatement Benefits </option>
         <option value="Retirement Benefits"> Retirement Benefits </option>
         
         </select>
                            </td>
                        </tr>
                        
                        <tr>
                            
                            <td>
                                 <label>Amount</label>
                            </td>
                            <td>
                                         <input class='form-control'  type="number" name="amount" placeholder="Amount" pattern="[0-9]{}" required >  
                            </td>
                        </tr>
                        
                        
                         <tr>
                            
                            <td>
                               
                            </td>
                            <td>
                                         <button class='btn btn-success'>Submit</button> 
                            </td>
                        </tr>
                        
                        
                        
                    </table>
                            </div>
                            
                            
                            <div class="col col-sm-2"></div>
                        
                        </div>
                    </div>
                    
              
         
         

         
                </div>
            </form>
        <?php
         if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            $ServerName="localhost";
            $DbUsername="root";
            $DbPassword="";
            $DbName="sartorial_space";
            $benefits=$_POST['benefits'];
            $amount=$_POST['amount'];
            $id=$_SESSION['userid'];
            $connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);
             $sql="insert into benefits_apply(memb_id, benefit_type,amount,applied_date)VALUES($id,'".$benefits."','".$amount."',now() )";
            $result=$connection->query($sql);
            if($result===TRUE){
                echo "<script> alert('Applied succesfully')</script>"; 
             
                echo "<script> window.location.href='applybenefits.php' </script>"; 
             
                
             }
             else{
                echo $connection->error; 
             }

            }
        ?>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
   
</body>

</html>
<!-- end document-->
