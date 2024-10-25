<?php
include  "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A2Z Demo Admin Panel </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css"/>
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.php"><img class="logo_icon img-responsive" src="images/logo/logo1.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Lucky Pawar</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="index.php"  aria-expanded="false" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>

                     <li><a href="team.php"><i class="fa fa-user orange_color"></i> <span>Team</span></a></li>
                     
                     <li><a href="client_say.php"><i class="fa fa-users orange_color"></i> <span>Client Say</span></a></li>
                     
                     <li><a href="contact_details.php"><i class="fa fa-phone blue1_color"></i> <span>Contact</span></a></li>
                     
                     <li><a href="contact_request.php"><i class="fa fa-paper-plane red_color"></i> <span>Contact Request</span></a></li>
                     
                     <li><a href="appointment_request.php"><i class="fa fa-briefcase blue1_color"></i> <span>Appointment Request</span></a></li>
                     
                     <li><a href="features.php"><i class="fa fa-clone yellow_color"></i> <span>Features</span></a></li>
                     
                     <li><a href="courses.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Courses</span></a></li>
                     
                     <li><a href="about.php"><i class="fa fa-map purple_color2"></i> <span>About</span></a></li>
                     
                     <li><a href="slider.php"><i class="fa fa-clone yellow_color"></i> <span>Slider</span></a></li>
                     
                     <li><a href="why_us.php"><i class="fa fa-object-group blue2_color"></i> <span>Why Us</span></a></li>
                     
                     <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Email</span></a></li>
                           <li><a href="calendar.html">> <span>Calendar</span></a></li>
                           <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                        </ul>
                     </li>
                     <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
                     <li>
                        <a href="contact.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                     </li>
                        <li class="active">
                           <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                           <ul class="collapse list-unstyled" id="additional_page">
                              <li>
                                 <a href="profile.html">> <span>Profile</span></a>
                              </li>
                              <li>
                                 <a href="project.html">> <span>Projects</span></a>
                              </li>
                              <li>
                                 <a href="login.html">> <span>Login</span></a>
                              </li>
                              <li>
                                 <a href="404_error.html">> <span>404 Error</span></a>
                              </li>
                           </ul>
                        </li>
                        <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
                        <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
                        <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php"><img class="img-responsive" src="images/logo/logo1.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Lucky Pawar</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Client Say</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                             <h4>Add Client Say</h4>

                             <form action="client_say.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="mt-2 col-md-4">
                                    <label>Image:</label>
                                    <input type="file" name="client_img" class="form-control" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Name:</label>
                                    <input type="text" name="client_name" class="form-control" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Position:</label>
                                    <input type="text" name="client_Position" class="form-control" required>
                                 </div>
                                 <div class="mt-2 col-md-12">
                                    <label>Message</label>
                                    <textarea type="text" name="client_message" class="form-control" required></textarea>
                                 </div>
                                 <div class="col-md-12 text-center mt-5">
                                    <button class="btn text-white" style="background-color:rgb(33,65,98);">Save</button>
                                 </div>
                              </div>
                                
                             </form>
                           </div>
                        </div>
                     </div>
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                             <h4>Client Say List</h4>
                             <table class="table table-info table-bordered table-striped table-hover">
                              <tr>
                                 <th>Sr.No</th>
                                 <th>Photo</th>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Massege</th>
                                 <th>Status</th>
                              </tr>
                              <!-- Print Data In Table  -->
                              <?php
                               $query="SELECT * From client_say";
                               $fire=mysqli_query($conn,$query);
                               $i=1;
                               while($row=mysqli_fetch_assoc($fire)){
                              ?>
                              <tr>
                                 <td><?=$i++;?></td>
                                 <td>
                                    <img src="upload/<?=$row['client_img'];?>" style="height:100px;">
                                 </td>
                                 <td><?=$row['client_name'];?></td>
                                 <td><?=$row['client_Position'];?></td>
                                 <td><?=$row['client_message'];?></td>
                                 <td>
                                    <a href="client_say_update.php?updateid=<?=$row['cs_id'];?>"><button class="btn btn-info">Edit</button></a>
                                    <a href="client_say.php?deleteid=<?=$row['cs_id'];?>&img=<?=$row['client_img'];?>"><button class="btn btn-danger" onclick="return confirm('Are You Sure')">Delete</button></a>
                                 </td>
                              </tr>
                              <?php
                               }
                              ?>
                             </table>
                           </div>
                        </div>
                     </div>
                  </div>


                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2024 Designed by A2Z IT HUN PVT LTD. All rights reserved.<br><br>
                           Distributed By: <a href="">A2Z</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
            
</html>

<?php


function image($name,$size,$temp,$path){
   $ext=explode(".",$name); //abc.jpg
   $a=rand(1,9999)."client.".$ext[count($ext)-1]; 
   move_uploaded_file($temp,"$path".$a);
   return $a;
}

if(isset($_POST['client_name'])){

   extract($_POST);  // Convert the string to the variable

   $name=$_FILES['client_img']['name'];
   $size=$_FILES['client_img']['size'];
   $tmp=$_FILES['client_img']['tmp_name'];
   $path="upload/";
   $client_img=image($name,$size,$tmp,$path);
   
   $query="INSERT INTO client_say( client_name, client_Position, client_message, client_img) 
           VALUES ('".$client_name."','".$client_Position."','".$client_message."','".$client_img."')";

   $fire=mysqli_query($conn,$query);
   if($fire){
   echo "<script>alert('Succsess');window.location.href='client_say.php'</script>";
   
   }
   else{
    echo "Error: ";
   }

}


//Delete Prosess
if(isset($_GET['deleteid'])){
   $query="DELETE FROM client_say where cs_id='".$_GET['deleteid']."'";

   $path='upload/'.$_GET['img'];  // Delete The Image In The Follder
   unlink($path);

   $fire=mysqli_query($conn,$query);
     if($fire){
       echo "<script>alert('Successfully Delete');window.location.href='client_say.php';</script>";
      }
     else{
      echo "Error";
     }
  

}



?>



