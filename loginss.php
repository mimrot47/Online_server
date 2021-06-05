<?php
session_start();
error_reporting(0);
include('database/dbcon.php');

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
     $pass = $_POST['pass'];
     if($uname==$pass){
     	?> <script> alert("USEAR NAME OR PASSWORD IS WORNG !!");
    window.open('index.php','_self');</script> <?php

     }
     $qry="SELECT * FROM `signup` WHERE `NAME`='$uname'AND `PASS1`='$pass'";
     $run=mysqli_query($db,$qry);
     $row=mysqli_num_rows($run);
   // $deta = mysqli_fetch_assoc($run);
     if($row<1)
     {
    ?> <script> alert("USEAR NAME OR PASSWORD IS WORNG !!");
    window.open('index.php','_self');</script> <?php
     }else
     {
	  $deta = mysqli_fetch_assoc($run);
	   $id= $deta['NAME'];
       $ids= $deta['ID'];
	  // 
	     $_SESSION['U_ID']=$id;
         $_SESSION['ID']=$ids;
	    echo  $_SESSION['U_ID'];
	    header('location:logins/loginpro.php');
     }
}
?>
