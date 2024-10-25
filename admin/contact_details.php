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
                              <h2>Contact</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column_title">
                        <?php
                            $query="SELECT * from contact_details";
                            $fire=mysqli_query($conn,$query);
                            $row=mysqli_fetch_assoc($fire);
                            
                        ?>
                        <div class="col-md-12">
                            <div class="page_title">
                             <h4>Add Contact Details</h4>
                             <form action="contact_details.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="mt-2 col-md-4">
                                    <label>Address</label>
                                    <input type="hidden" name="c_id" class="form-control" value="<?=$row['c_id'];?>" required>
                                    <input type="text" name="c_address" class="form-control" value="<?=$row['c_address'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Office Time</label>
                                    <input type="text" name="c_timing" class="form-control" value="<?=$row['c_timing'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Mobile Number</label>
                                    <input type="number" name="c_mobile" class="form-control" value="<?=$row['c_mobile'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Facebook Link</label>
                                    <input type="text" name="f_link" class="form-control" value="<?=$row['f_link'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Instagram Link</label>
                                    <input type="text" name="i_link" class="form-control" value="<?=$row['i_link'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Twitter Link</label>
                                    <input type="text" name="t_link" class="form-control" value="<?=$row['t_link'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>YouTube Link</label>
                                    <input type="text" name="y_link" class="form-control" value="<?=$row['y_link'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Email</label>
                                    <input type="email" name="c_email" class="form-control" value="<?=$row['c_email'];?>" required>
                                 </div>
                                 <div class="mt-2 col-md-4">
                                    <label>Map</label>
                                    <input type="text" name="c_map" class="form-control" value="<?=$row['c_map'];?>" required>
                                 </div>
                                 
                                 <div class="col-md-12 text-center mt-5">
                                    <button class="btn text-white" style="background-color:rgb(33,65,98);">Save</button>
                                 </div>
                              </div>
                                
                             </form>
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



if(isset($_POST['c_address'])){     

   extract($_POST);  //Convert the string to the variable

   $query="UPDATE contact_details set c_address='".$c_address."',c_timing='".$c_timing."', c_mobile='".$c_mobile."', c_email='".$c_email."',f_link='".$f_link."',i_link='".$i_link."',t_link='".$t_link."',y_link='".$y_link."',c_map='".$c_map."'
           WHERE c_id='".$c_id."'";

   $fire=mysqli_query($conn,$query);
   if($fire){
   echo "<script>alert('Succsess');window.location.href='contact_details.php'</script>";
   
   }
   else{
    echo "Error: ";
   }

}

?>




