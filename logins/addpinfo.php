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
 $UID = rand(100000,300000);
  $_SESSION['UID'] =$UID;

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
        
      <a href="logout.php">
       <button type="button" class="btn btn-info">Log out</button></a>
      </div>
  </nav>
</header>
<br><br>
<div class="apform">
  <div class="form-group">
<table class="table table-striped table-success "  >
  <form action="personal.php" method="POST"> 
  <thead>
  <tr align="center">
        <th align="left" colspan="4">
        <h3>Personal Informaction Seaction</h3> 
        </th>
    <tr>
  
  <tr>
      <th align="left">Personal informaction </th>
        <th><input type="number" name="ADHAR" required="" class="form-control" placeholder="Enter Your Adhar No.">
        </th>
        <th><input type="number"  class="form-control"  name="MOB" required="" placeholder="Enter Mobaile No."></th>
         <td><input type="text" value="UID:- <?php echo $_SESSION['UID'] ; ?>" class="form-control"  name="UID" required="" placeholder="UID :- <?php echo $_SESSION['UID']; ?>"></td>
   
    </tr>
  
     <th></th>
        <th>First Name</th>
        <th>Middel Name</th>
        <th>Last Name</th>
  </thead>
  <tbody>
    <tr>
      <th align="left">Your Name </th>
        <td><input type="text" class="form-control"  name="SFN" required=""></td>
        <td><input type="text" class="form-control"  name="SMN"></td>
        <td><input type="text" class="form-control"  name="SLN"></td>
    </tr>
    <tr>
      <th align="left">Father Name</th>
        <td><input type="text" class="form-control"  name="FFN"></td>
        <td><input type="text" class="form-control"  name="FMN"></td>
        <td><input type="text" class="form-control"  name="FLN"></td>
    </tr>
    <tr>
        <th align="left">Mother Name<br>(Name before marriage)</th>
        <td><input type="text" class="form-control"  name="MFN"></td>
        <td><input type="text" class="form-control"  name="MMN"></td>
        <td><input type="text" class="form-control"  name="MLN"></td>
      </tr>
      <tr>
        <th align="left" >Marital Status : <br>
          <select class="custom-select " name="MR">
            <option placeholder="select">
              <option>Unmarried </option>
              <option>Married</option>
              <option>MarriedDivorced</option>
          </option>
          </select>
        </th>
        <th align="left" colspan="1">Date of Birth:
          <input type="Date" class="form-control col-sm-12" name="DOB">
        </th>
        <th align="left" colspan="">Gender<br>
           <select class="custom-select col-sm-12" name="CHM">
            <option placeholder="select">
              <option>Male </option>
              <option>Female</option>
              <option>Other</option>
            </option>
        </th>
        <th align="left" >Birth Place  : 
          <input type="text"  class="form-control" name="BPLCE" required="required">
        </th>
     </tr>
     <tr>
        <th align="left" >Blood Group (with RH) :<br>
          <select class="custom-select col-sm-12" name="BGROUP">
            <option placeholder="select">
              <option>A+</option>
              <option>B+</option>
              <option>AB</option>
              <option>O</option>
            </option>
          </select>
        </th>
         <th align="left">Religion : >
          <input type="text" class="form-control"  name="REL" required="required">
        </th>
        <th align="left" colspan="2">Citizen of (country name) :<br>
         <select class="custom-select col-6 col-sm-6" name="CTZ">
            <option placeholder="select">
              <option value="Indian">Indian</option>
            </option>
          </select>
        </th>
         </tr>
      <tr>
     </th>
      </tr>
      <tr>
        <th colspan="4">Address</th>
      </tr>
      <tr align="left">
        <th>State
          <input type="text" class="form-control" name="STATE">
        </th>
        <th>District
          <input type="text" class="form-control" name="DIST">
        </th>
        <th>Tehsil
          <input type="text" class="form-control"  name="TQ">
        </th>
        <th>City/Village
          <input type="text" class="form-control"  name="CITY">
        </th>
      </tr>
      <tr >
      <th align="left" colspan="4">Address<textarea name="ADDRESS" class="form-control" cols="40" rows="1" placeholder="Enter your address"></textarea></th>
      </tr>
      <tr>
        <th colspan="4">Correspondence Address</th>
      </tr>
      <tr align="left">
        <th>State
          <input type="text" class="form-control" name="STATE1">
        </th>
        <th>District
          <input type="text" class="form-control" name="DIST1">
        </th>
        <th>Tehsil
          <input type="text" class="form-control"  name="TQ1">
        </th>
        <th>City/Village
          <input type="text" class="form-control"  name="CITY1">
        </th>
      </tr>
      <tr >
      <th align="left" colspan="4">Address<textarea name="ADDRESS1" class="form-control" cols="40" rows="1" placeholder="Enter your address"></textarea></th>
      </tr>
        <tr align="center">
        <th align="left" colspan="4">
        <h3>Legal Reservation Information Section</h3> 
        </th>
    <tr>
    </tr>
        <tr >
        <th align="left">
        Category:
       <select name="CATAG" class="custom-select ">
            <option placeholder="select">
              <option>Open</option>
              <option>SC</option>
              <option>NT</option>
              <option>DT(A)</option>
             <option>NT(B)</option>
             <option>NT(C)</option>
             <option>NT(D)</option>
             <option>OBC</option>
             <option>SBC</option>
             </option>
          </select>
        </th>
         <th align="left">
         Caste :
          <input type="text" class="form-control " name="CASTE" size="00">
        </th>
        <th align="left">
          Subcaste :
          <input type="text" class="form-control"name="SBCAST" size="00">
        </th>
        <th>
          <br>
        <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
    <label class="custom-control-label" for="customControlValidation1">Physically Challenged :</label>
      <div class="invalid-feedback">Example invalid feedback text</div>
      </div> 
        </th>
       <tr>
     <th></th>
      <th></th>
      <th align="center" colspan="3">
        <input type="submit" name="submit" class="btn btn-success"> 
        </form>
     </th>
      </tr>
     <tr>
     <td align="right" colspan="4">
     <a href="cource.php">
       <button type="button" class="btn btn-warning">Continue</button></a>
  </td>
 </tr>
  </tbody>
 </table>
 </div>
  </div>
 </body>
</html>

