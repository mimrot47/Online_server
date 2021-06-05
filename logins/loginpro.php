  <script type="text/javascript" src="js/jquery.js"></script>
 <?php
session_start();
error_reporting(0);
if(!isset($_SESSION['U_ID'])){
  {
  ?>
 <script> 
    window.open('../index.php','_self');
    </script> 
   <?php  
   } 
}


$id = $_SESSION['ID'];
?> 
<?php
session_start();
include('../database/dbcon.php');
// echo  $_SESSION['ID'];
// echo $_SESSION['U_ID'];
// echo $_SESSION['UID'];
if($_SESSION['ID'])
{
  $query="select * from students where ID=$id";
  $result=mysqli_query($db,$query);
  $row=mysqli_num_rows($result);
  if($row<1)
  {
    ?>
    <script type="text/javascript">
        window.open('loginmkpro.php','_self');
    </script> 
    <?php
  }else{

    $data= mysqli_fetch_assoc($result);
    // print_r($data);
    $query2="select * from course where ID=$id";
      $result2=mysqli_query($db,$query2);
      $data1 = mysqli_fetch_assoc($result2);
      // print_r($data1);
    function rk(){
       $dataok =$GLOBALS['data'];
       $dataok1 =$GLOBALS['data1'];
       ?>
       <div class="card">
        <div class="text-center">
          <img class="bd-placeholder-img rounded-circle" style="margin-top: 40px;" width="200" height="200" src="../detaimg/<?php echo $dataok1['PHOTO'];?>">  <rect fill="#777" width="100%" height="100%" />
          <h5 class="card-title">UID: <?php  echo  $dataok['UID']; ?></h5>
          </div>
          <div class="card-body">
            <h4 class="card-title">Name : <?php  echo  $dataok['SFN'];  echo "  ";  echo  $dataok['SMN']; echo " "; echo  $dataok['SLN'];?></h4>
            <h5 class="card-title" >Adhar :<?php  echo  $dataok['ADHAR']; ?></h5>
            <h5 class="card-title" >Mobile NO :<?php  echo  $dataok['MOB']; ?></h5>
            <h5 class="card-title" >Address :<?php  echo  $dataok['ADDRESS']; echo "  ";  echo  $dataok['TQ']; echo " "; echo  $dataok['DIST'];?></h5>
           
            
             <button type="button" onclick="myFunction()" class="btn btn-primary btn-lg btn-block">All Information</button>
           
            <button type="button" onclick="myFunction11()" class="btn btn-primary btn-lg btn-block">Add Information</button>
            <button type="button" class="btn btn-warning btn-lg btn-block">Deleter Information</button>
            <button type="button" class="btn btn-success btn-lg btn-block">print Information</button>
          </div>
        </div>

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
          <a class="nav-link" href="profile.php"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"></a>
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
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4"> 
   <div class="out"><?php echo rk(); ?></div>
 </div>
  <div class="col mb-4">
    <div class="card">
    <form action="demo.php" method="POST">
    <input type="text" name="sid" id="inputText" class="form-control mt-3" placeholder="Enter Searching Id" required autofocus>
    <div class="form-label-group">
    <input type="text" name="uid" id="inputText" class="form-control mt-3" placeholder="Enter Your Id" value="UID <?php  echo  $data['UID']; ?> "required autofocus>
    <button type="submit" name="submit" class="btn btn-success btn-lg btn-block mt-3">Search info</button>
    </form>
    <div class="card mb-3" style=" max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../img/upimag.jpeg" class="card-img mt-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../img/upimag.jpeg" class="card-img mt-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mt-" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../img/upimag.jpeg" class="card-img mt-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        
       </div>
      </div>
     </div>
     </div>
    </div>
   
     </div>
    </div>
  </div>
</div>

</body>
</html>
