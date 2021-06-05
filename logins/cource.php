 <?php
session_start();
if(!isset($_SESSION['U_ID'])){
  {
  ?>
 <script> 
    window.open('../index.php','_self');
    </script> 
   <?php    }
 }
 
?> 



<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css" >
     <link rel="stylesheet" href="logincss.css">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plg.js"></script>
    <script type="text/javascript" src="js/cycle.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <title>Past Qualification Details </title>
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
        
      <a href="logout.php">
       <button type="button" class="btn btn-info">Log out</button></a>
      </div>
  </nav>
</header>
<br><br>
<div class="apform">
  <div class="form-group">
<table class="table table-striped table-success"  >
  <form  class="was-validated" action="courcedata.php" method="POST" enctype="multipart/form-data" > 
  <thead>
  <tr align="center">
        <th align="left" colspan="4">
        <h3>Past Qualification Details </h3> 
        </th>
    <tr>
  
    
     <th> </th>
        <th>Roll No</th>
        <th>Obtaint Mark</th>
        <th>Total Mark</th>
  </thead>
  <tbody>
    <tr>
      <th align="left">SSC  (10<sup>th</sup> )</th>
        <td><input type="text" class="form-control"  name="ROLL10" required=""></td>
        <td><input type="text" class="form-control"  name="OB10"></td>
        <td><input type="text" class="form-control"  name="TOT10"></td>
    </tr>
    <tr>
      <th align="left">HSC (12<sup>th</sup> )</th>
        <td><input type="text" class="form-control"  name="ROLL12"></td>
        <td><input type="text" class="form-control"  name="OB12"></td>
        <td><input type="text" class="form-control"  name="TOT12"></td>
    </tr>
    <tr>
        <th align="left">Graduation</th>
        <td><input type="text" class="form-control"  name="ROLLG"></td>
        <td><input type="text" class="form-control"  name="OBG"></td>
        <td><input type="text" class="form-control" placeholder="Gread" name="TOTG"></td>
      </tr>
      <tr>
        <th align="left">Post Graduation</th>
        <td><input type="text" class="form-control"  name="ROLLP"></td>
        <td><input type="text" class="form-control"  name="OBP"></td>
        <td><input type="text" class="form-control" placeholder="Gread"  name="TOTP"></td>
      </tr>
      <tr align="center">
        <th align="left" colspan="4">
        <h3>Current Course Details  </h3> 
        </th>
    </tr>
    <tr>
      <th align="left">Current course</th>
        <td><input type="text" class="form-control" placeholder="Course Name" name="COR" required=""></td>
        <td><input type="text" class="form-control" placeholder="Stream" name="CORS"></td>
        <td><input type="text" class="form-control" placeholder="Course Type"  name="CORT"></td>
    </tr>
    <tr align="center">
        <th align="left" colspan="4">
        <h3>Upload Documents </h3> 
        </th>
    <tr>
      <tr align="left">
        <th><div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="PHOTO" required>
        <label class="custom-file-label" for="validatedCustomFile">Upload Photo</label>
       </div>
        </th>
        <th><div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="SIGN" required>
        <label class="custom-file-label" for="validatedCustomFile"> Upload Signiture</label>
       </div>
        </th>
        <th><div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="ADHARC"  required>
        <label class="custom-file-label" for="validatedCustomFile">Upload Aadhar </label>
       </div>
        </th>
        <th>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="PAN" required>
        <label class="custom-file-label" for="validatedCustomFile">Upload Pan</label>
       </div>
        </th>
      </tr> 
       <tr align="left">
        <th><div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="MARK10" required>
        <label class="custom-file-label" for="validatedCustomFile">Upload 10<sup>th</sup> Mark Memo</label>
       </div>
        </th>
        <th><div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="MARK12" required>
        <label class="custom-file-label" for="validatedCustomFile"> Upload 12<sup>th</sup> Mark Memo</label>
       </div>
        </th>
        <th><div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="MARKG" required>
        <label class="custom-file-label" for="validatedCustomFile">Graduation Mark Memo </label>
       </div>
        </th>
        <th>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" name="TC" required>
        <label class="custom-file-label" for="validatedCustomFile">Upload TC</label>
       </div>
        </th>
      </tr> 
      <tr>
       <th align="center" colspan="4">
        <center><input type="submit" name="submit" class="btn btn-success"> </center>
        </form>
       </th>
    </tr>  
  </tbody>
 </table>
</div>

  </div>

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>

