 <?php
session_start();
include '../database/dbcon.php';
if(!isset($_SESSION['U_ID'])){
  {
  ?>
 <script> 
    window.open('../index.php','_self');
    </script> 
   <?php    }
 }

?> 

<?php

if($_SESSION['ID'])
{
  $id=$_SESSION['ID'];
  $query="select * from students where ID=$id";
  $result=mysqli_query($db,$query);
  $row=mysqli_num_rows($result);
  if($row<1)
  {
    echo "this is not workong ";
  }else{

    $data= mysqli_fetch_assoc($result);
    print_r($data);
    $query2="select * from course where ID=7";
      $result2=mysqli_query($db,$query2);
      $data1 = mysqli_fetch_assoc($result2);
       print_r($data1);
    }

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
        <th>Adhar :<?php echo $_SESSION['ADHAR']; ?>
        </th>
        <th> Mobile :<?php echo $data['MOB']; ?></th>
         <td>UID <?php echo $data['UID']; ?></td>
   
    </tr>
  
     <th></th>
        <th>First Name</th>
        <th>Middel Name</th>
        <th>Last Name</th>
  </thead>
  <tbody>
    <tr>
      <th align="left">Your Name </th>
        <td><?php echo $data['SFN']; ?></td>
        <td><?php echo $data['SMN']; ?></td>
        <td><?php echo $data['SLN']; ?></td>
    </tr>
    <tr>
      <th align="left">Father Name</th>
        <td><?php echo $data['FFN']; ?></td>
        <td><?php echo $data['FMN']; ?></td>
        <td><?php echo $data['FLN']; ?></td>
    </tr>
    <tr>
        <th align="left">Mother Name<br>(Name before marriage)</th>
        <td><?php echo $data['MFN']; ?></td>
        <td><?php echo $data['MMN']; ?></td>
        <td><?php echo $data['MLN']; ?></td>
      </tr>
      <tr>
        <th align="left" >Marital Status : <?php echo $data['MR']; ?>
        </th>
        <th align="left" colspan="1">Date of Birth:
          <?php echo $data['DOB']; ?>
        </th>
        <th align="left" colspan="">Gender :<?php echo $data['CHM']; ?>
        </th>
        <th align="left" >Birth Place  : 
          <?php echo $data['BPLCE']; ?>
        </th>
     </tr>
     <tr>
        <th align="left" >Blood Group (with RH) :<?php echo $data['BGROUP']; ?>
        </th>
         <th align="left">Religion : 
          --
        </th>
        <th align="left" colspan="2">Citizen of (country name) : INDIA
        
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
          <?php echo $data['STATE']; ?>
        </th>
        <th>District
          <?php echo $data['DIST']; ?>
        </th>
        <th>Tehsil
         <?php echo $data['TQ']; ?>
        </th>
        <th>City/Village
          <?php echo $data['CITY']; ?>
        </th>
      </tr>
      <tr >
      <th align="left" colspan="4">Address <?php echo $data['ADDRESS']; ?></th>
      </tr>
      <tr>
        <th colspan="4">Correspondence Address</th>
      </tr>
      <tr align="left">
        <th>State
          <?php echo $data['STATE1']; ?>
        </th>
        <th>District
          <?php echo $data['DIST1']; ?>
        </th>
        <th>Tehsil
          <?php echo $data['TQ1']; ?>
        </th>
        <th>City/Village
          <?php echo $data['CITY1']; ?>
        </th>
      </tr>
      <tr >
      <th align="left" colspan="4">Address<?php echo $data['ADDRESS1']; ?></th>
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
       <?php echo $data['CATAG'];?>
        </th>
         <th align="left">
         Caste :
          <?php echo $data['CASTE'];?>
        </th>
        <th align="left">
          Subcaste :
           <?php echo $data['SBCAST'];?>
        </th>
        <th>
          <br>
            </th>
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
 </body>
</html>

