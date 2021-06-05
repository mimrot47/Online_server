<?php
session_start();
include('../database/dbcon.php');
/*$conn = mysqli_connect('localhost','root','','o_a_s');*/


    echo $uid = $_SESSION['UID'];

    echo  $id=$_SESSION['ID'];

    echo  $ROLL10 = $_POST['ROLL10'];
	
	echo $OB10=$_POST['OB10'];
	
	echo $TOT10=$_POST['TOT10'];
	
	echo $ROLL12=$_POST['ROLL12'];
	
	echo $OB12=$_POST['OB12'];
	
	echo $TOT12=$_POST['TOT12'];
	
	echo $ROLLG=$_POST['ROLLG'];
	
	echo $OBG=$_POST['OBG'];
	
	echo $TOTG=$_POST['TOTG'];

	echo $ROLLP=$_POST['ROLLP'];
	
	echo $OBP=$_POST['OBP'];

	echo $TOTP=$_POST['TOTP'];
	
	echo $COR=$_POST['COR'];

	echo $CORS=$_POST['CORS'];
	
	echo $CORT=$_POST['CORT'];
	
	
	

	
	echo $photo=$_FILES['PHOTO']['name'];
	
	echo $phototmp=$_FILES['PHOTO']['tmp_name'];
    move_uploaded_file($phototmp,"../detaimg/$photo");

    echo $sig =$_FILES['SIGN']['name'];
	
    echo $sigtmp=$_FILES['SIGN']['tmp_name'];
  	move_uploaded_file($sigtmp,"../detaimg/$sig");

   

    echo $adhar=$_FILES['ADHARC']['name'];
	
	echo $adhar1=$_FILES['ADHARC']['tmp_name'];
	move_uploaded_file($adhar1,"../detaimg/$adhar");
	 echo "<br>";


	echo $pan= $_FILES['PAN']['name'];
	
	echo $pan1 =$_FILES['PAN']['tmp_name'];
	move_uploaded_file($pan1,"../detaimg/$pan");


	echo $mark10=$_FILES['MARK10']['name'];
	
	echo $mark101=$_FILES['MARK10']['tmp_name'];
	move_uploaded_file($mark101,"../detaimg/$mark10");



  
	echo $mark12=$_FILES['MARK12']['name'];
	
	echo $mark121=$_FILES['MARK12']['tmp_name'];
	move_uploaded_file($mark121,"../detaimg/$mark12");

	echo $markg=$_FILES['MARKG']['name'];
	
	echo $markg1=$_FILES['MARKG']['tmp_name'];
	move_uploaded_file($markg1,"../detaimg/$markg");
 
	echo $tc=$_FILES['TC']['name'];
	
	echo $tc1=$_FILES['TC']['tmp_name'];
 move_uploaded_file($tc1,"../detaimg/$tc");



if (isset($_POST['submit'])) {


	  $quryi="INSERT INTO `course`(`ID`, `UID`, `ROLL10`, `OB10`, `TOT10`, `ROLL12`, `OB12`, `TOT12`, `ROLLG`, `OBG`, `TOTG`, `ROLLP`, `OBP`, `TOTP`, `COR`, `CORS`, `CORT`, `PHOTO`, `SIGN`, `ADHAR`, `PAN`, `MARK10`, `MARK12`, `MARKG`, `TC`) VALUES ('$id','$uid','$ROLL10','$OB10','$TOT10','$ROLL12','$OB12','$TOT12','$ROLLG','$OBG','$TOTG','$ROLLP','$OBP','$TOTP','$COR','$CORS','$CORT','$photo','$sig','$adhar','$pan','$mark10','$mark12','$markg','$tc')";


 $result=mysqli_query($db,$quryi);
if($result){
	?> <script> alert("DATA SAVE SUCCESSFULLY  !!");
    window.open('loginpro.php','_self');</script> <?php
}else{
	?> <script> alert("SAMTHISNG IS WORIG !!");
    window.open('cource.php','_self');</script> <?php
}
 
 
    
 }
 
?>