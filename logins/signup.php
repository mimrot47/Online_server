



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online server</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="logincss.css">
     <link rel="icon" type="icon/images" href="../img/mainlogo.png" >
    </head>
    <body class="lpbody">
    <br>
    <body class="lpbody">
     <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Online server </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"></a>
        </li>
      </ul>
       <a href="signup.php">  
      <button type="button " class="btn btn-success mr-3">Sign up</button></a>
      <a href="../index.php">
       <button type="button" class="btn btn-primary " >Login</button></a>
      
    </div>
    <br>
    </nav>
    <center>
    <form class="form-signin spform mt-5" action="justuse.php" method="POST">
  <div class="text-center mb-4">
    <img class="bd-placeholder-img rounded-circle" width="75" height="75" src="../img/job4.jpeg">  <rect fill="#777" width="100%" height="100%"/>
  </div>
  <h2>Sign up</h2>
  <div class="form-label-group">
    <input type="text" name="fname" id="inputText" class="form-control" placeholder="First Name" required autofocus>
   
  </div>
 <br> 
 <div class="form-label-group">
    <input type="text" name="lname" id="inputText" class="form-control" placeholder="Last Name" required autofocus>
  </div>
 <br> 
  <div class="form-label-group">
    <input type="email" name="Email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
   
  </div>
 <br> 
  <div class="form-label-group">
    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required> <br>
  
  </div>
   <div class="form-label-group">
    <input type="password" name="pass2" id="inputPassword" class="form-control" placeholder="Re-Password" required>
  
  </div><br>
  <button class="btn btn-lg btn-success btn-block" name="submit" type="submit" type="submit">Sign up</button>
  <br>
  </form></center>
</body>
</html>
