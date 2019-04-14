<?php
ob_start();
            $dbhost = "localhost";
            $dbUser = "root";
            $dbPass = "";
            $dbName = "cancer_patient_portal";
            //creating mysql connection
            $conn = new mysqli($dbhost,$dbUser,$dbPass,$dbName);
            $query = "update members SET status=1,approved_date = Now() where id='".$_POST['id']."';";                            
            $response = $conn->query($query);
            if($response){
                header('Location:index5.html');
            }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

