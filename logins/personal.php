<?php
session_start();

include '../database/dbcon.php';
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/



if(isset($_POST['submit'])){


  echo $id=$_SESSION['ID'];

   echo $adhar=$_POST['ADHAR'];
     
   echo $mob=$_POST['MOB'];

    echo $UID =$_SESSION['UID']."<br>";
   
   echo $uid=$_POST['UID'];

   echo $sfn=$_POST['SFN'];
   
   echo $smn=$_POST['SMN'];
   
   echo $sln=$_POST['SLN'];
   
   echo $ffn=$_POST['FFN'];
   
   echo $fmn=$_POST['FMN'];
   
   echo $fln=$_POST['FLN'];
   
   echo $mfn=$_POST['MFN'];
   
   echo $mmn=$_POST['MMN'];
   
   echo $mln=$_POST['MLN'];
   
    
   echo $um=$_POST['MR'];

   echo $Date=$_POST['DOB'];
    
    echo $CHM= $_POST['CHM'];

   echo $bplace=$_POST['BPLCE'];
   
   echo $bgrp=$_POST['BGROUP'];

    echo $rel=$_POST['REL'];

    echo $ctz =$_POST['CTZ'];
   
   echo $state=$_POST['STATE'];
    
   echo $dist=$_POST['DIST'];
    
   echo $tq=$_POST['TQ'];
    
   echo $city=$_POST['CITY'];
    
   echo $address=$_POST['ADDRESS'];

  echo $state1=$_POST['STATE1'];
    
   echo $dist1=$_POST['DIST1'];
    
   echo $tq1=$_POST['TQ1'];
    
   echo $city1=$_POST['CITY1'];
    
   echo $address1=$_POST['ADDRESS1'];
   
   
   echo $Category=$_POST['CATAG']; 
   
   echo $Caste=$_POST['CASTE'];
   
   echo $sbcast=$_POST['SBCAST'];
   
   $_SESSION['ADHAR']=$adhar;   
   $quryi="INSERT INTO `students`(`ID`, `ADHAR`, `MOB`, `UID`, `SFN`, `SMN`, `SLN`, `FFN`, `FMN`, `FLN`, `MFN`, `MMN`, `MLN`, `MR`, `DOB`, `CHM`, `BPLCE`, `BGROUP`, `STATE`, `DIST`, `TQ`, `CITY`, `ADDRESS`, `STATE1`, `DIST1`, `TQ1`, `CITY1`, `ADDRESS1`, `CATAG`, `CASTE`, `SBCAST`) VALUES ('$id','$adhar','$mob','$UID','$sfn','$smn','$sln','$ffn','$fmn','$fln','$mfn','$mmn','$mln','$um','$Date','$CHM','$bplace','$bgrp','$state','$dist','$tq','$city','$address','$state1','$dist1','$tq1','$city1','$address1','$Category','$Caste','$sbcast')";
     $result=mysqli_query($db,$quryi);
    if($result){
    $_SESSION['ADHAR']=$adhar;
    $_SESSION['ADHAR1']=$adhar; 

   ?> <script> alert("DATA SAVE SUCCESSFULLY  !!");
    window.open('cource.php','_self');</script> <?php
  }else{
    ?> <script> alert("SAMTHISNG IS WRONG  !!");
    window.open('addpinfo.php','_self');</script> <?php
  }
}

?>