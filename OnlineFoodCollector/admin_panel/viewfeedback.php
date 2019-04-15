
           <?php
           include 'adminheader.php';
           
           ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">View Feedbacks </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>member Name </th>
                                                <th>Feedback </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                // echo "<h1>".$_SESSION['username']."</h1>";
                                                if($_SESSION['username']){
                                                    //database properties
                                                    $dbhost = "localhost";
                                                    $dbUser = "root";
                                                    $dbPass = "";
                                                    $dbName = "foodcollector";
                                        
                                                    //creating mysql connection
                                                    $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
                                                    //query
                                                    $query = "SELECT m.name,f.`feed_back_msg` FROM `feed_back` f join members m on m.id=f.`mem_id` ";
                                        
                                                    $response = $conn->query($query);
                                                    if($response){
                                                        while($result = $response->fetch_assoc()){
                                                            echo"<tr>
                                                                    <td>".$result['name']."</td>
                                                                    <td>".$result['feed_back_msg']."</td>
                                                                   

                                                                </tr>";
                                                        }
                                                        echo "</table>";
                                                    }
                                                }
                                                else{
                                                    header('Location:Admin_panel.php');
                                                }
                                                ?>
                                            <!-- <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

     <!-- Jquery JS -->
    <script src="vendor/jquery-3.2.1.min.js"></script>
     <!-- Bootstrap JS -->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
     <!-- Vendor JS        -->
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

     <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- <?php

    echo 'hahahah';
    ?> -->

</body>

</html>
 <!-- end document -->



 <?php
 
 if(isset($_POST['rejbutton']) ){
 
     $Id=$_POST['rejbutton'];
 
     $dbhost = "localhost";
            $dbUser = "root";
            $dbPass = "";
            $dbName = "foodcollector";
            //creating mysql connection
            $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
 $sql="UPDATE `fooddetails` SET  `acknowledgement`=-1 WHERE `id`=$Id ";
 
 $result=$conn->query($sql);
 
 if($result===TRUE){
    echo "<script> alert('Rejected succesfully')</script>"; 

    echo "<script> window.location.href='approveFood.html'</script>"; 
 }
 
 
 
 }
 
 ?>