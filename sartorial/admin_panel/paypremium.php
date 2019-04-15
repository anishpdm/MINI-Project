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
                        
                      Payment Info
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
                                
                               <label>Month </label>   
                            </td>
                            
                            <td>
           <select name="month" class='form-control'>
             <option value="1"> Jan </option>
             <option value="2"> Feb </option>
             <option value="3"> Mar </option>
             <option value="4"> Apr </option>
             <option value="5"> May </option>
             <option value="6"> Jun </option>
             <option value="7"> Jul </option>
             <option value="8"> Aug </option>
             <option value="9"> Sep </option>
             <option value="10"> Oct </option>
             <option value="11"> Nov </option>
             <option value="12"> Dec </option>


           </select>
                            </td>
                        </tr>

                        <td>
                                
                                <label>Month </label>   
                             </td>
                             
                             <td>
            <select name="year" class='form-control'>
              <option value="2019"> 2019 </option>
             
              
 
 
            </select>
                             </td>
                         </tr>
                        
                        <tr>
                            <td>
                                
                               <label>Chellan  Number </label>   
                            </td>
                            
                            <td>
           <input type="text" class='form-control' name='chellan' required>
                            </td>
                        </tr>
                        
                        <tr>
                            
                            <td>
                                 <label>Amount</label>
                            </td>
                            <td>
                                         <input type="number" name="amount" class='form-control' placeholder="Amount" pattern="[0-9]{}" required >  
                            </td>
                        </tr>
                        
                        
                         <tr>
                            
                            <td>
                               
                            </td>
                            <td>
                                         <button class='btn btn-success'>Submit</button> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <a href="./chellan/chellan.jpg" target='_blank'>Download Chellan</a>
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
            $chellan=$_POST['chellan'];

            $month=$_POST['month'];
            $year=$_POST['year'];

            $amount=$_POST['amount'];
            $id=$_SESSION['userid'];

            $connection=new mysqli($ServerName,$DbUsername,$DbPassword,$DbName);
             $sql="INSERT INTO `monthly_remittance`( `memb_id`, `month`, `year`, `paid_day`,
              `amount`, `chellan`) VALUES ($id,$month,$year,now(),$amount,'$chellan') ";
            $result=$connection->query($sql);
            if($result===TRUE){
                echo "<script> alert('Payment details submitted succesfully')</script>"; 
             
                echo "<script> window.location.href='paypremium.php' </script>"; 
             
                
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
