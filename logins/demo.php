<?php 
session_start();
include('../database/dbcon.php');

if(isset($_POST['submit']))
{
	echo $sid =$_POST['sid'];
   echo $myid =$_POST['uid'];
   // $query1="SELECT * FROM students where UID='$sid'";
   $query="select * from students where UID=$sid";
	$result=mysqli_query($db,$query);
	$row=mysqli_num_rows($result);
	if(!$row<1){
	$deta = mysqli_fetch_assoc($result);
	// print_r($deta);
	$query1="select * from course where UID=$sid";
	$result1=mysqli_query($db,$query1);
	$deta1 = mysqli_fetch_assoc($result1);
	// print_r($deta1);
	// $row=mysqli_num_rows($result);
}else{
	{
  ?>
 <script> 
    window.open('loginpro.php','_self');
    </script> 
   <?php  
}
  
}
}




?>




<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css" >

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/pro15.js"></script>
    <script type="text/javascript" src="js/cycle.js"></script>
    
    
    <title>Online addmision </title>
  </head>
  <body>
   <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['U_ID']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="loginpro.php">Profile<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Admission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Update</a>
        </li>
      </ul>
        
      <a href="../logouts.php">
       <button type="button" class="btn btn-info">Log out</button></a>
      </div>
  </nav>
  </header>
 <br>
 <br>
 <br>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-12">
  <div class="col mb-12">
 
 <div class="card">
        <div class="text-center">
          <img class="bd-placeholder-img rounded-circle" style="margin-top: 40px;" width="200" height="200" src="../detaimg/<?php echo $deta1['PHOTO'];?>">  <rect fill="#777" width="100%" height="100%" />
          <h5 class="card-title">UID: <?php  echo  $deta['UID']; ?></h5>
          </div>
          <div class="card-body">
            <h4 class="card-title">Name : <?php  echo  $deta['SFN'];  echo "  ";  echo  $deta['SMN']; echo " "; echo  $deta['SLN'];?></h4>
            <h5 class="card-title" >Adhar :<?php  echo  $deta['ADHAR']; ?></h5>
            <h5 class="card-title" >Mobile No :<?php  echo  $deta['MOB']; ?></h5>
            <h5 class="card-title" >Address :<?php  echo  $deta['ADDRESS']; echo "  ";  echo  $deta['TQ']; echo " "; echo  $deta['DIST'];?></h5>
           
          </div>
        </div>

</body>
</html>
  </body>
</html>
