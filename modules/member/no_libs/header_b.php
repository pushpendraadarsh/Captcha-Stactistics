<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Captcha Employee</title>
    <!-- vendor css -->
    <link href="../../assets/6/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../assets/6/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../assets/6/typicons.font/typicons.font-2.0.7/src/font/typicons.css" rel="stylesheet">
    <link href="../../assets/6/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../../css/track_style.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="../../assets/6/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="../../assets/6/datatables.net-dt/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="../../assets/6/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
<style type="text/css">
/* * {
  box-sizing: 0;
  margin: 0;
  padding: 0;
  cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4424790/cursors-edge.png"), auto;
}*/
.app {
  cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4424790/cursors-edge.png"), auto;
}
    </style>
<link rel="stylesheet" type="text/css" href="../../popup/css/style.css">
<script type="text/javascript" src="../../popup/js/main.js"></script>
    <!--===================popup detail=======================-->
    
  </head>

  <body>
    <main>
    <div class="az-header ">
    
<div class="container-fluid">
        <div class="az-header-left">
          <a href="index.php" class="app az-logo"><span><img src="../../images/logo.png" style="width:120px;"></span></a>
          <a href="index.php" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.php" class="az-logo"><span><img src="../../images/logo.png" style="width:120px;"></span></a>
            <a href="index.php" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
              <ul class="nav">
            <li class="nav-item active show"><a href="index.php" class="nav-link"><i class="typcn typcn-home"></i> Dashboard</a></li>
            <li class="nav-item">
                            <a href="#" class="nav-link with-sub"><i class="typcn typcn-folder"></i> My Profile</a>
              <nav class="az-menu-sub">
              <a href="#" class="nav-link">View Edit Profile </a>
                          
                             
                <a href="#" class="nav-link">Welcome Letter </a>
                          

                                          <a href="#" class="nav-link">Employee ID Card </a>

              </nav>
            </li>
                        <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-cog-outline"></i> Payment Services</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="#" class="nav-link">Send Payment Request </a>
                      <a href="#" class="nav-link">Recieved Payment History</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
                                    <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i> Earning</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="#" class="nav-link">Today Earning </a>
                      <a href="#" class="nav-link">Available Earning</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
                

                         
      <li class="nav-item">
        <a href="#" class="nav-link with-sub"><i class="typcn typcn-key-outline"></i> Generate Order</a>
        <div class="az-menu-sub">
          <div class="container">
            <div>
              <nav class="nav">
                <a href="#" class="nav-link">Comming Soon!!</a>
               <!-- <a href="https://www.oxiinc.com/subscriptions/add" class="nav-link">Generate Products Key</a>
                <a href="https://www.oxiinc.com/subscriptions" class="nav-link">Products Key Report</a>
                <a href="https://www.oxiinc.com/customers/transfer_statement" class="nav-link">Products Key Transfer Report</a>-->
              </nav>
            </div>
          </div><!-- container -->
        </div>
      </li>                              
      <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-support"></i>Self Care <span class="custom-dropdown-icon">
                
              </span></a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
  <a  class="nav-link" href="#">Generate Password </a>
                                       
 <a href="#" class="nav-link">Change login Password</a>
  <a href="#" class="nav-link">Change transaction Password</a>
                            
                      
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>
                                    
          </ul>
                  </div><!-- az-header-menu -->
        <div class="az-header-right">
          <span id="SUCESS"></span>
    <a href="javascript:void(0);" class="nav-link" id="" data-toggle="modal" data-target="#profileModal" aria-haspopup="true" aria-expanded="false">
      <img src="images/social_media.png" style="width:24px;" class="img-fluid" alt="Social Media">
    </a>
      <div class="nav-item dropdown language-dropdown more-dropdown">
      <div class="dropdown custom-dropdown-icon" style="margin-top:5px;">
                <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/flag.png" class="flag-width" alt="flag" style="border-radius: 15px"></a>

        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
          <a class="dropdown-item" data-img-value="nepal" data-value="Nepal" href="#"><img src="images/flag.png" class="flag-width" alt="flag"> India</a>
          <a class="dropdown-item" data-img-value="india" data-value="Bangladesh" href="#"><img src="images/coming_soon.png" class="flag-width" alt="flag">Comming Soon</a>
         <!-- 
          <a class="dropdown-item" data-img-value="bangladesh" data-value="Bangladesh" href="https://www.oxiinc.com"><img src="https://www.oxiinc.com/newassets/4/assets/img/bangladesh.png" class="flag-width" alt="flag"> Bangladesh</a>-->
        </div>
      </div>
    </div>
          <!--<div class="az-header-message">
            <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
          </div> az-header-message -->
          <div class="dropdown az-header-notification">
            <a href="#" class=""><!-- <i class="typcn typcn-bell"></i> -->
              <img src="images/notification.png" style="width:24px;" class="flag img-fluid" alt="Verified">
            </a>
            <div class="dropdown-menu" style="background-color: yellow">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have <?php echo $notification['title'];?> notification</p>
              <div class="az-notification-list">
                  <ul>
<?php
                include("dp.php");$get_batch_information = "SELECT * FROM notification";
                $get_batch_information_query = mysqli_query($dbcon,$get_batch_information);
                while($rwo = mysqli_fetch_assoc($get_batch_information_query)){?>
                  <li style="font-size: 18px;"><?php echo ($rwo['title'])?></li>
                  <span style="font-size: 15px; color: green; font-family: elephant">
                    <?php $string = $rwo['content'];
                  if (strlen($string) > 15) {
                 $trimstring = substr($string, 0, 15). ' <a href="#" style="color: red">readmore...</a>';
                 } else {
                 $trimstring = $string;
                 }
                 echo $trimstring;
                 ?>
                  </span>
                  <?php } ?>
                  </ul>

                  
                              </div><!-- az-notification-list -->
               <div class="dropdown-footer"><a href="#">View All Notifications</a></div> 
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->

          <div class="dropdown az-profile-menu">
            <a href="#" class="az-img-user">


<?php
if($image == '') {
        ?>
        <img src="images/user_pic/user_profile.png" alt="<?php echo $fname; ?>" class="img-fluid">
<?php } else
{ ?>
                            <img src="images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img-fluid">
                        
<?php }?>
               
            </a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                   <?php
if($image == '') {
        ?>
        <img src="images/user_pic/user_profile.png" alt="<?php echo $fname; ?>" class="img-fluid mr-2">
<?php } else
{ ?>
                            <img src="images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img-fluid mr-2">
                        
<?php }?>                                  </div><!-- az-img-user -->
                <h6><?php echo $fname . " " . $lname ?></h6>
                <span><?php echo $eid ?></span>
              </div><!-- az-header-profile -->

              <a href="profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> My Inbox</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->
    