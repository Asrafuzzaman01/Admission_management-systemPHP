<?php
include_once('includes/dbconnection.php');
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
                <li><a href="pages.php?page=about">About</a></li>
                <li><a href="pages.php?page=Notification">Notification</a></li>
                <li><a href="">Results</a></li>
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
   <!--LATEST NOTIFICATION START -->
     <section class="notification">

                         <hr>
<marquee behavior="alternate" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
    <?php $query=mysqli_query($con,"select * from tblnotice");
while ($row=mysqli_fetch_array($query)) {
?>

    <a href="notice-details.php?nid=<?php echo $row['ID'];?>" target="_blank"><?php echo $row['Title'];?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
    
    <?php } ?>
    
    
</marquee>

        
    </section>
    <hr>
    <!--LATEST NOTIFICATION END-->
    <!--services----------------------->
    <section class="services" id="courses">
        <!--heading----------->
        <div class="services-heading">
            <h2>OUR PROFESSIONAL COURSES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
        </div>
        <!--box-container----------------->
        <div class="box-container">
            <!--box-1-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Computer Science and Engineering</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                <!--btn--------->
                <a href="signup.php">Apply Now</a>
            </div>
            <!--box-2-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Business Administration</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="signup.php">Apply Now</a>
            </div>
            <!--box-3-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>English</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua</p>
                <!--btn--------->
                <a href="signup.php">Apply Now</a>
            </div>
            <!--box-4-------->
            <div class="box">
                <img src="images/icon5.png">
                <font>Law</font>
                <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua.</p>
                <!--btn--------->
                <a href="signup.php">Apply Now</a>
            </div>
            <!--box-1-------->
            
        </div>
    </section>



    <?php include('includes/footer.php');?>
   
 
</body>

</html>
