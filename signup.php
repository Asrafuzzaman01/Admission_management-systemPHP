<?php 
session_start();
error_reporting(1);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $mid=rand(100000,900000);


      $captcha=$_POST['captcha'];

      $captchacode= $_SESSION['CAPTCHA_CODE'];


      if ($captcha!=$captchacode) {
        echo "<script>alert('Invalid captcha');</script>";
      }


      else{

              $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'&& status='active'");
              $result=mysqli_fetch_array($ret);
              if($result>0){
          echo "<script>alert('This email or Contact Number already associated with another account');</script>";

              }
              else{
              $query=mysqli_query($con, "insert into tbluser(FirstName, LastName,MobileNumber, Email,  Password, mid) value('$fname', '$lname','$contno', '$email', '$password','$mid' )");
              if ($query) {


          $to=$email;
          $subject="Registration confirmation mail for admission system";

                // the message
                         echo $msg = "Dear User Please click here for activate User

               <a href='http://localhost/siu_onlineadmission/confirmmail.php?mid=".$mid."'> Click Here</a>

                ";

                // use wordwrap() if lines are longer than 70 characters
                $msg = wordwrap($msg,70);


                // send email
                mail($to, $subject,$msg);

      echo "<script>alert('You have successfully registered');</script>";

    //echo "<script>location.href='login.php'</script>";



     }
       else
          {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
            }
      }

      }


}
 ?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title> Sylhet International University Addmission Management System|| User Signup
  </title>
  <!--fav-icon-->
<link rel="shortcut icon" href="images/siumainlogo.png"/>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END MODERN CSS-->

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->

  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="css/style.css"/>
  <!-- END Custom CSS-->

<script type="text/javascript">
function checkpass()
{
        
        if(document.signup.contactno.value.length!=11)

        {
          alert('Contact no  will be 11 length');
          document.signup.contactno.focus();
          return false;
        }

       else if(document.signup.password.value!=document.signup.repeatpassword.value)
        {
        alert('Password and Repeat Password field does not match');
        document.signup.repeatpassword.focus();
        return false;
        }

        return true;
} 

</script>

</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="1-column">
  <!-- fixed-top-->
 <nav>
            <a href="index.php" class="logo">
            
                <img src="images/siumainlogo.png" alt="Logo" style="width:60px;" class=""></a>
               
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="#">About</a></li>
                <li><a href="#">Notification</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a class="active" href="signup.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">Sign Up</a></li>
                <li><a class="active" href="login.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">sign in</a></li>
            </ul>
        </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0 pb-0">
                  <div class="card-title text-center">
                   <h4 style="font-weight: bold"> Student's Signup</h4>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Please Sign Up</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    
     <form  method="post" name="signup" onSubmit="return checkpass();">

                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" name="firstname" id="firstname" required="true" class="form-control input-lg"
                            placeholder="First Name" tabindex="1">
                            <div class="form-control-position">
                              <i class="ft-user"></i>
                            </div>
                          </fieldset>
                        </div>
                       
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" name="lastname" id="lastname" required="true" class="form-control input-lg"
                            placeholder="Last Name" tabindex="2">
                            <div class="form-control-position">
                              <i class="ft-user"></i>
                            </div>
                          </fieldset>
                        </div>
                       
                      </div>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="number" name="contactno" id="contactno" class="form-control input-lg"
                        placeholder="Contact Number" required tabindex="3" required data-validation-required-message="Please enter display name.">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
                        tabindex="4" required="true" required data-validation-required-message="Please enter email address.">
                        <div class="form-control-position">
                          <i class="ft-mail"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" name="password" id="password" class="form-control input-lg"
                            placeholder="Password" tabindex="5" required>
                            <div class="form-control-position">
                              <i class="la la-key"></i>
                            </div>
                            <div class="help-block font-small-3"></div>
                          </fieldset>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                          <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" name="password" id="password" class="form-control input-lg"
                            placeholder="Password" tabindex="5" pattern="(?=.*\d)(?=.*[!@#\$%\^&\*])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one special characters,  one uppercase and lowercase letter, and at least 8 or more characters" required
                            data-validation-matches-message="Password & Confirm Password must be the same.">
                            <div class="form-control-position">
                              <i class="la la-key"></i>
                            </div>
                            <div class="help-block font-small-3"></div>
                          </fieldset>
                        </div>
                      </div>

                        <fieldset  >
                            

                           <div class="col-12 col-sm-6 col-md-6">
                      <label>Enter Captcha</label>
                      <input type="text" class="form-control" name="captcha" id="captcha">
                   </div>
                    <div class="form-group col-6">
                      <label>Captcha Code</label>
                      <img src="capcha.php" alt="PHP Captcha">
                  </div>



                          </fieldset>















                
                      <div class="row">
                        <div class="col-6 col-sm-6 col-md-6">
                          <button type="submit" name="submit" class="btn btn-info btn-lg btn-block"><i class="ft-user"></i> Register</button>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6">
                          <a href="login.php" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i> Login</a>

                        </div>
                         <div class="col-6 col-sm-6 col-md-6">
                          

                        </div>


                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer fixed-bottom footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <p style="color:white;">Copyright (C) - 2022 | Developed By <strong>Mithu</strong></p>
    </p>
  </footer>
  <script src="/../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
</body>
</html>