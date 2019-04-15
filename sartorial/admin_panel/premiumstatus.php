
<?php
include './userheader.php';
?>
             HEADER DESKTOP

             MAIN CONTENT
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25"> Remittance Details</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th> Month </th>
                                                <th>Year  </th>
                                                <th>Payment Date </th>
                                                <th>Amount  </th>
                                                <th> Chellan number  </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                // echo "<h1>".$_SESSION['username']."</h1>";
                                                if($_SESSION['userid']){
                                                    //database properties
                                                    $dbhost = "localhost";
                                                    $dbUser = "root";
                                                    $dbPass = "";
                                                    $dbName = "sartorial_space";
                                        
                                                    //creating mysql connection
                                                    $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
                                                    //query

                                                    $id= $_SESSION['userid'];
                                                    $query = "SELECT `month`, `year`, `paid_day`, `amount`, `chellan` FROM `monthly_remittance` WHERE `memb_id`=$id";
                                        
                                                    $response = $conn->query($query);
                                                    if($response){
                                                        while($result = $response->fetch_assoc()){
                                                            echo"<tr>
                                                            <td>".$result['month']."</td>
                                                            <td>".$result['year']."</td>
                                                            <td>".$result['paid_day']."</td>
                                                            <td>".$result['amount']."</td>

                                                            <td>".$result['chellan']."</td>
                                                          
                       
                                                      ";
                                                            
                                                  
                                                        }
                                                        echo "  </tr></table>";
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
