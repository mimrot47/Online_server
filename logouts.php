<?php
session_start();
 unset($_SESSION['user_name']);
 unset($_SESSION['U_ID']);
 ?> <script> 
	  window.open('index.php','_self');</script> <?php
 ?>