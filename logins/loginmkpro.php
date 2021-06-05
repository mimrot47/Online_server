
<?php
session_start();




?><html lang="en">
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
          <a class="nav-link" href="profile.php">Profile<span class="sr-only">(current)</span></a>
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
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
 
   <div class="out"></div>
   <div class="card in">
    <div class="text-center">
      <img class="bd-placeholder-img rounded-circle" width="200" height="200" src="../img/job4.jpeg">  <rect fill="#777" width="100%" height="100%"/>
       <h5 class="card-title">Welcome <?php echo $_SESSION['U_ID']; ?></h5>
      </div>
      <div class="card-body">
        <button type="button" onclick="myFunction()" class="btn btn-primary btn-lg btn-block mt-2">Make Profle</button>
       
        <button type="button" class="btn btn-primary btn-lg btn-block mt-2">Add Information</button>
        <button type="button" class="btn btn-warning btn-lg btn-block mt-2">Deleter Information</button>
        <button type="button" class="btn btn-success btn-lg btn-block">print Information</button>
        <br> <br> <br> <br>
      </div>
    </div>
      
 </div>
  <div class="col mb-4">
    <div class="card">
    <div class="form-label-group">
    <input type="text" name="fname" id="inputText" class="form-control mt-3" placeholder="Enter Searching Id" required autofocus>
    <div class="form-label-group">
    <input type="text" name="fname" id="inputText" class="form-control mt-3" placeholder="Enter Your Id" required autofocus>
    <button type="button" onclick="alert1()" class="btn btn-success btn-lg btn-block mt-3" >Search info</button>
    <div class="card mb-3" style=" max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../img/upimag.jpeg" class="card-img mt-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name :</h5>
        <p class="card-text">This is a wider with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        <h5 class="card-title">Name :</h5>
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
        <h5 class="card-title">Name :</h5>
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