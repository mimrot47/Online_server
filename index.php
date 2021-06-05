<?php
error_reporting(0);
 session_start();
 function check()
{
  if($_SESSION["user_name"])
 {
    ?><div class="alert alert-success"  role="alert">
  <?php echo $_SESSION["user_name"]; ?>  Regisration Seccessfully ...!!!! <a href="logouts.php "><button class=" btn btn-info" style="margin-left:50%;">Ok ....!!!</button></a>
</div>
<?php
}else
 {}}



?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="icon/images" href="img/mainlogo.png" >
    <link rel="stylesheet" href="js/css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Online Server</title>
  </head>
  <body class="backgroundb">

      <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img class="imgdeco floatd" src="img/img_nev.png"  alt=""> <h3 class="logosname">Online server</h3>
        </a>
        <button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        
         </div>
      </nav>

      <div class="container">
      <?php check(); ?>
      
          <div class="row align-items-start mt-3">
          <div class="col col-12 col-sm-12 col-md-4  form-group">
             <form class="" action="loginss.php" method="POST">
             <input type="text" class="form-control" name="uname" placeholder="User Name">
            </div>
            <div class="col col-12 col-sm-12 col-md-4 ">
             <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <div class="col col-sm-12 col-md-4 ">
            <input type="submit"  name="submit" value="login" class="btn btn-primary  btn-block" />
            </form>
            </div>
          </div>
         </div>
        </div>
     </div>
      <div class="container-fluid">
    <div class="jumbotron mt-1 text-center">
      <h1 class="display-4 mp-5">Store Your Information </h1>
      <p class="lead">Register yours basic detail and use in feature</p>
      <hr class="my-4">
     
      <a class="btn btn-success btn-lg" href="logins/signup.php" role="button">Sign up</a>
      
     </div>
    
    </form>
    <div class="card-group">
  <div class="card">
    <img src="img/job.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Web Developer</h5>
      <p class="card-text">TTechInvento IT Services Pvt. Ltd.
Aurangabad, Maharashtra Added Advantage: Angular JS,Node js, React JS, Express JS.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/job1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Urgent Required For Ground Stafff (Fresher)</h5>
      <p class="card-text">SAZ Industries
Aurangabad, Maharashtra We have Urgent Required For the post Of Ground Staff.
Job Role : Ground Staff And Passport Checking Officer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/job4.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Greaphic Designer / 2D Animatior</h5>
      <p class="card-text">Arise Media
Aurangabad, Maharashtra Must have strong knowledge about animation related softwares.Designation Greaphic Designer / 2D Animatior.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  </div>
  </div>
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>