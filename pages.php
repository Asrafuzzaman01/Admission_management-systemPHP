<?php
session_start();
error_reporting(1);
include('includes/dbconnection.php');

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>International University Online admission Management System  </title>
<link rel="stylesheet" href="css/style.css"/>
<!--fav-icon-->
<link rel="shortcut icon" href="images/siumainlogo.png"/>

</head>

<body>
    
    <section class="main" style="background-image: url(images/hero-bg.png); height:100vh;">
        
        <nav>
            <a href="index.php" class="logo">
            <img src="images/siumainlogo.png" alt="Logo" style="width:60px;" class=""></a>
                
                
            
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="pages.php?page=about >">About</a></li>
                <li><a href="#">Notification</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a class="active" href="signup.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">Sign Up</a></li>
                <li><a class="active" href="login.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto; border-radius: 5px; cursor: pointer;">sign in</a></li>
            </ul>
        </nav>
       
    


        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
                
                <h3 style="color: white; letter-spacing: 3px;">Welcome Sylhet International University</h3>
                <h1 style="color: white;"> Student Portal</h1>
                <p style="color: white;">Sylhet International University  provides a student centre of learning environment with close student faculty interaction and constant participation. The Principal mission of our University is to achieve success.</p>
            <!--login-btn-->
            <a href="signup.php" class="main-login" style="border-radius: 5px;">Apply Now</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="images/hero.png" width="500px" style="text-shadow: 20px 22px;"/>
               
                     

            </div>
            
        </div>
        
        
    </section>
   




        

<?php  

$pages=$_GET['page'];

$ret=mysqli_query($con,"select Title,Description from  tblpages  where title='$pages'");


while ($num=mysqli_fetch_array($ret)){

       ?>
            
        	<tr>
             <td><?php echo $num['Description'];?></td>
             <br>
               

            </tr>
           
	       
        
     
<?php        
}?>
   <?php include('includes/footer.php');?>
 
</body>

</html>
