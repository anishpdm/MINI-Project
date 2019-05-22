<?php
// if(isset($_POST['rejbutton']) ){
//  echo "<script> alert('hheeee')</script>";

  echo "string";

    $Id=$_POST['rejbutton'];

    $dbhost = "localhost";
           $dbUser = "root";
           $dbPass = "";
           $dbName = "cancer_patient_portal";
           //creating mysql connection
           $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
$sql="DELETE FROM `requests` WHERE `id`=$Id ";

$result=$conn->query($sql);

if($result===TRUE){
   echo "<script> alert('Rejected succesfully')</script>";
   echo "<script> window.location.href='viewstatus.php'</script>";

}
else{
  echo "<script> alert('Error')</script>";


}



// }
// else{
//   echo "string";
// }
 ?>
