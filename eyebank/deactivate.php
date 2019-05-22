<?php
include './dbcon.php';
if(isset($_GET['id']))

{

  $Id=$_GET['id'];

  $sql="DELETE FROM `user` WHERE `id`=  $Id ";
  $result = $conn->query($sql);

  if($result===TRUE){

    echo "<script type='text/javascript'> alert('Profile DEACTIVATED Succesfully') </script>";

    echo "<script type='text/javascript'> window.location.href='userlogin.php' </script>";


  }


}


 ?>
