<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    $uid=$_SESSION['uid'];
    $coursename=$_POST['coursename'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $regno=$_POST['regno'];
    $dob=$_POST['dob'];
    $nationality=$_POST['nationality'];
    $districtname=$_POST['districtname'];
    
    $gender=$_POST['gender'];
    $category=$_POST['category'];
    $coradd=$_POST['coradd'];
    $peradd=$_POST['peradd'];

    $board=$_POST['board'];
    $year=$_POST['year'];

     $Institution=$_POST['Institution'];
     $gpa=$_POST['gpa'];

     $h_board=$_POST['h_board'];
    $h_year=$_POST['h_year'];
     $h_Institution=$_POST['h_Institution'];
     $h_gpa=$_POST['h_gpa'];



    
    $dec=$_POST['declaration'];
    $sign=$_POST['signature'];


   echo "update tbladmapplications set CourseApplied='$coursename',FirstName='$firstname', LastName='$lastname',
    FatherName='$fathername',MotherName='$mothername',regno='$regno', DOB='$dob',Nationality='$nationality', districtname='$districtname',
    Gender='$gender',Category='$category',CorrespondenceAdd='$coradd',PermanentAdd='$peradd',
    Board='$board',year='$year',Institution='$institution',gpa='$gpa',h_Board='$h_board',h_year='$h_year',
    h_Institution='$h_institution',h_gpa='$h_gpa',
    Signature='$sign' where ID='$eid' && UserId='$uid'";



    $query = mysqli_query($con,"update tbladmapplications set CourseApplied='$coursename',
    
    FatherName='$fathername',MotherName='$mothername',regno='$regno', DOB='$dob',Nationality='$nationality',
     districtname='$districtname',
    Gender='$gender',Category='$category',
    CorrespondenceAdd='$coradd',PermanentAdd='$peradd',
    Board='$board',year='$year',Institution='$Institution',
    gpa='$gpa',h_Board='$h_Board',h_year='$h_year',
    h_Institution='$h_Institution',h_gpa='$h_gpa',
    Signature='$sign' where ID='$eid' && UserId='$uid'");
    
    if ($query) {
    
    echo '<script>alert("Data has been updated successfully.")</script>';
   
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}

  ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>SIU Online Addmission Management System|| Addmission Form</title>
  <!--fav-icon-->
<link rel="shortcut icon" href="images/siumainlogo.png"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/extended/form-extended.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <style>
    .errorWrap {
    padding: 10px;
    margin: 20px 0 0px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<?php include('includes/header.php');?>
<?php include('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">
           Admission Application Form
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Application
                </li>
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">



















<form name="submit" method="post" enctype="multipart/form-data">    <?php
$eid=$_GET['editid'];
$uid=$_SESSION['uid'];






$ret=mysqli_query($con,"select tbladmapplications.*, tblcountry.countryname, tbldistrict.districtname, tbluser.FirstName, tbluser.LastName


 from tbladmapplications 

inner join tblcountry on tbladmapplications.Nationality=tblcountry.id

inner join tbldistrict on tbladmapplications.districtname=tbldistrict.id
 inner join tbluser on tbladmapplications.UserId=tbluser.ID


  where tbladmapplications.ID='$eid' && tbladmapplications.UserId='$uid'");

$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>       
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Update Admission Form</h4>

                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                  
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
 

<div class="row">
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Course Applied                   </h5>
   <div class="form-group">
   <select name='coursename' id="coursename" class="form-control white_bg">
     

      <?php $query=mysqli_query($con,"select * from tblcourse");
              while($row1=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row1['CourseName'];?>"

             <?php if ($row1['CourseName']==$row['CourseApplied']) echo"selected"; ?>
                ><?php echo $row1['CourseName'];?>
                
              </option>
                  <?php } ?>

   </select>
    </div>
</fieldset>
                   
</div>

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Student Pic     </h5>
   <div class="form-group">
     <img src="userimages/<?php  echo $row['UserPic'];?>" width="100" height="100"> <a href="changeimage.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
    </div>
</fieldset>                  
</div>
 </div>               
 <div class="row">

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>First Name                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="firstname" name="firstname"  type="text" required='true' value="<?php echo $row['FirstName'];?>">
    </div>
</fieldset>               
</div>

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Last Name                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="Lastname" name="Lastname"  type="text" required='true' value="<?php echo $row['LastName'];?>">
    </div>
</fieldset>               
</div>






<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Father's Name                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="fathername" name="fathername"  type="text" required='true' value="<?php echo $row['FatherName'];?>">
    </div>
</fieldset>               
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Mother's Name                 </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="mothername" name="mothername"  type="text" required='true' value="<?php echo $row['MotherName'];?>">
                          </div>
                        </fieldset>
                      </div>
                    </div>



<div class="col-xl-4 col-lg-12">
 <fieldset>
  <h5>Birhday Reg No:  </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="regno" name="regno"  type="text" required='true' value="<?php echo $row['regno'];?>">
          
    </div>

</fieldset>                  
</div


<div class="row">
<div class="col-xl-4 col-lg-12">
 <fieldset>
  <h5>DOB                   </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="dob" name="dob"  type="text" required='true' value="<?php echo $row['DOB'];?>">
          <small class="text-muted">DOB Must be in this format (YYYY-MM-DD)</small>
    </div>

</fieldset>                  
</div>
<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Nationality                  </h5>
   <div class="form-group">
   <select name='nationality' id="nationality" class="form-control white_bg">
     
      <?php $query=mysqli_query($con,"select * from tblcountry");
              while($row1=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row1['nationality'];?>"

<?php if($row1['nationality']==$row['nationality'])echo "selected"; ?>

                ><?php echo $row1['countryname'];?>
                
              </option>
                  <?php } ?>

   </select>
    </div>
</fieldset>
                   
</div>

<div class="col-xl-6 col-lg-12">
 <fieldset>
  <h5>Distrct                 </h5>
   <div class="form-group">
   <select name='districtname' id="districtname" class="form-control white_bg">
     

      <?php $query=mysqli_query($con,"select * from tbldistrict");
              while($row1=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row1['districtname'];?>"

             <?php if ($row1['districtname']==$row['districtname']) echo"selected"; ?>
                ><?php echo $row1['districtname'];?>
                
              </option>
                  <?php } ?>

   </select>
    </div>
</fieldset>
                   
</div>




<div class="col-xl-4 col-lg-12">
 <fieldset>
  <h5>Gender                </h5>
   <div class="form-group">

   <select class="form-control white_bg" id="gender" name="gender"  required>
    <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Transgender">Transgender</option>
   </select>
                          </div>
                        </fieldset>
                      </div>

                    </div>
<div class="row">
  <div class="col-xl-12 col-lg-12">
    <h5>Category : </h5>
   
<select class="form-control white_bg" id="category" name="category"  required>
    <option value="<?php echo $row['Category'];?>"><?php echo $row['Category'];?></option>
<option value="General">General</option>
<option value="OBC">OBC</option>
<option value="SC/ST">SC/ST</option>
<option value="SC/ST">Other</option>
   </select>
  </div>
</div>
<div class="row" style="margin-top:1%">
  <div class="col-xl-12 col-lg-12">
    <fieldset>
  <h5>Correspondence Address                  </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="coradd" name="coradd"  type="text" required='true' value="<?php echo $row['CorrespondenceAdd'];?>">
    </div>
</fieldset>
  </div>
</div>
<div class="row">
  <div class="col-xl-12 col-lg-12">
    <fieldset>
  <h5>Permanent Address                  </h5>
   <div class="form-group">
   <input class="form-control white_bg" id="peradd" name="peradd"  type="text" required='true' value="<?php echo $row['PermanentAdd'];?>">
    </div>
</fieldset>
  </div>
</div>
<div class="row" style="margin-top: 2%">
  <div class="col-xl-12 col-lg-12"><h4 class="card-title">Education Qualification</h4>
<hr />
  </div>
</div>
<div class="row">
<div class="col-xl-12 col-lg-12">
<table class="table mb-0">
<tr>
  <th>#</th>
   <th>Board</th>
    <th>Year</th>
     <th>Institution</th>
       <th>GPA</th>
</tr>
<tr>
<th>SSC or Equivalent</th>
<td>   <input class="form-control white_bg" id="board" name="board" placeholder="Board "  type="text" required='true' value="<?php echo $row['Board'];?>"></td>

<td>   <input class="form-control white_bg" id="year" name="year" placeholder="Year"  type="text" required='true' value="<?php echo $row['year'];?>"></td>
<td>   <input class="form-control white_bg" id="Institution"
  name="Institution" placeholder="Institution"  type="text" required='true' value="<?php echo $row['Institution'];?>"></td>
<td>   <input class="form-control white_bg" id="gpa" name="gpa" placeholder="gpa"  type="text" required='true' value="<?php echo $row['gpa'];?>"></td>
</tr>
<tr>
<th>HSC or Equivalent</th>
<td>   <input class="form-control white_bg" id="h_board" name="h_board" placeholder="Board"  type="text" required='true' value="<?php echo $row['h_Board'];?>"></td>
<td>   <input class="form-control white_bg" id="h_year" name="h_year" placeholder="h_Year"  type="text" required='true' value="<?php echo $row['h_year'];?>"></td>
<td>   <input class="form-control white_bg" id="h_Institution" 
  name="h_Institution" placeholder="h_Institution"  type="text" required='true' value="<?php echo $row['h_Institution'];?>"></td>
<td>   <input class="form-control white_bg" id="h_gpa" name="h_gpa" placeholder="h_gpa"  type="text" required='true' value="<?php echo $row['h_gpa'];?>"></td>
</tr>




</table>
</div>
</div>
</hr>
<div class="row" style="margin-top: 2%">
  
<div class="col-xl-12 col-lg-12"><h4 class="card-title"><b>Declartion</b></h4> <hr />
</div>
</div>
 <div class="row">
<div class="col-xl-12 col-lg-12">
<h5><b>I hereby state that the facts mentioned above are true to the best of my knowledge and belief.</b></h5>
 </div>
 </div>               
<div class="row"> 
<div class="col-xl-4 col-lg-12">
<fieldset>
 <input class="form-control white_bg" id="signature" name="signature" placeholder="Signature"  type="text" value="<?php echo $row['Signature'];?>"> 
 </fieldset>  
</div>
</div><?php 
$cnt=$cnt+1;
}?>
<div class="row" style="margin-top: 2%">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Update</button>
</div>
</div>
 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
     
        <!-- Formatter end -->
      </form>  
      </div>
    </div>
  </div>
<?php include('includes/footer.php');?>
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/typeahead/handlebars.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/formatter/formatter.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/card/jquery.card.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-typeahead.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-inputmask.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-formatter.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-maxlength.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-card.js" type="text/javascript"></script>
</body>
</html>
<?php  } ?>
