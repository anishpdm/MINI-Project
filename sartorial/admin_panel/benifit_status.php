
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
                                <h2 class="title-1 m-b-25"> Application Status</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Benifit TYype</th>
                                                <th>Amount </th>
                                                <th>Applied Date </th>
                                                <th>Approved  Date </th>
                                                <th> Current Status </th>
                                                
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
                                                    $query = "SELECT b.`id`, `memb_id`,m.name, `benefit_type`, `amount`, b.`applied_date`, b.`approved_date`,b.status  FROM `benefits_apply` b JOIN members m on m.id=b.`memb_id` WHERE memb_id=$id";
                                        
                                                    $response = $conn->query($query);
                                                    if($response){
                                                        while($result = $response->fetch_assoc()){
                                                            echo"<tr>
                                                            <td>".$result['benefit_type']."</td>
                                                            <td>".$result['amount']."</td>
                                                            <td>".$result['applied_date']."</td>
                                                            <td>".$result['approved_date']."</td>
                                                          
                       
                                                      ";
                                                            $status=$result['status'];
                                                            if($status==1)
                                                            {
                                                                echo "<td>  <p class='text-success'> Approved </p> </td> ";
                                                            }
                                                            else if($status==0){

                                                                echo "<td>  <p class='text-warning'> In Process </p> </td> ";

                                                            }
                                                            else{
                                                                echo "<td>  <p class='text-danger'> Rejected </p> </td> ";

                                                            }
                                                  
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
