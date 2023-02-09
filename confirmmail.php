<?php 
session_start();
error_reporting(1);
include('includes/dbconnection.php');


 $mid=$_GET['mid'];

//echo "update tbluser set status='active' where mid='$mid'";



 if (mysqli_query($con, "update tbluser set status='active' where mid='$mid'" )) {
    
    echo '<script>alert("Your mail confirmation is successfull. Now  you can login ")</script>';
    echo "<script>location.href='login.php'</script>";
   
  }
  else
    {
     echo '<script>alert("SYour mail confirmation is not successfull. Please click here  link again in your mail .")</script>';

     echo "<script>location.href='index.php'</script>";
    }
?>