<?php
session_start();

include '../database/dbcon.php';
if(isset($_POST['submit'])){
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['Email'];
  $pass=$_POST['pass'];
  $pass2=$_POST['pass2'];
  if($pass==$pass2){
$query="INSERT INTO `signup`( `NAME`, `LNAME`, `EMAIL`, `PASS1`, `PASS2`) VALUES ('$fname','$lname','$email','$pass','$pass2')";
$check = mysqli_query($db,$query);
if($query){
    $_SESSION["user_name"] =$fname;
  ?> <script> alert("Ragestraction successfull !!");
    window.open('../index.php','_self');</script> <?php

}else{
  ?> <script> alert("Samthing is wrong  !!");
    window.open('signup.php','_self');</script> <?php
}
}else{
  ?> <script> alert("Password is not equal  !!");
    window.open('signup.php','_self');</script> <?php
}
}else{
  ?> <script> alert("Empty from send !!");
    window.open('signup.php','_self');</script> <?php
}



?>
