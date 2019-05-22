<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>

<?php
if(isset($_GET['name']))
{

    $name= $_GET['name'];
    $year= $_GET['year'];

    echo " <div style='width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878'>
<div style='width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878'>
       <span style='font-size:50px; font-weight:bold'> Conduct and Transfer Certificate </span>
       <br><br>
       <span style='font-size:25px'><i>This is to certify that</i></span>
       <br><br>
       <span style='font-size:30px'><b>$name</b></span><br/><br/>
       <span style='font-size:25px'><i>is a bonafide student of this instituition</i></span> <br/><br/>
       <span style='font-size:30px'>during the year $year </span> <br/><br/>
       <span style='font-size:20px'> During his/her study,his/her conduct is Good </span> <br/><br/><br/><br/>
   
</div>
</div>";
}
?>



    
</body>
</html>