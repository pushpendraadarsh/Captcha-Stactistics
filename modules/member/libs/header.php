<?php   
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="https://www.google.com/recaptcha/about/images/favicon.png">
 <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="reCAPTCHA is a security service that protects your websites from fraud and abuse.">
  <meta name="theme-color" content="#d90000"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" > 
  <meta http-equiv="X-UA-Compatible" content="IE=chrome"> 
  <meta name="language" content="en"> 
  <meta name="dc.language" content="en" /> 
  <meta name="keywords" content="Pushpendra Group || Captcha Statistics"/>
  <meta name="description" content="Earn Money And Developed Your Brain Concentration"/>
   <meta property="og:type" content="website"/> 
   <meta property="og:title" content="Captcha Statistics"/> 
   <meta property="og:description" content="Adarsh Pushpendra Pandey"/>
   <meta name="twitter:title" content="Pushpendra Group"/>
   <meta name="twitter:url" content="https://www.pggroup.tech"/>
   <meta name="twitter:description" content="Pushpendra Group || Captcha Statistics. Earn Money And Developed Your Brain Concentration."/>
  <meta name="referrer" content="no-referrer">
  <title>reCAPTCHA</title>


  <!-- vendor css -->
  <link href="/assets/6/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets/6/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/assets/6/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <!-- azia CSS -->
  <link rel="stylesheet" href="/css/track_style.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="/assets/6/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="/assets/6/datatables.net-dt/css/responsive.dataTables.min.css" rel="stylesheet">
  <style type="text/css">
    .app {
      cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4424790/cursors-edge.png"), auto;
    }
    .icon{
      width: 50px;
      height: 50px;
    }
  </style>
</head>

<body>
  <main>
    <div class="az-header">

      <div class="container-fluid" style="background-color: #90d5ec;
background-image: linear-gradient(315deg, #90d5ec 0%, #fc575e 74%);
">
        <div class="az-header-left">
          <a href="https://www.google.com/recaptcha/about/" class="app az-logo"><span><img src="https://www.google.com/recaptcha/about/images/google-reCAPTCHA.svg" style="width:120px;"></span></a>
          <a href="/modules/member/" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="https://www.google.com/recaptcha/about/" class="az-logo"><span><img src="https://www.google.com/recaptcha/about/images/google-reCAPTCHA.svg" style="width:120px;"></span></a>
            <a href="/modules/member/" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item active show"><a href="/modules/member/" class="nav-link"><i class="typcn typcn-home"></i>Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-folder"></i> My Profile</a>
              <nav class="az-menu-sub">
                <a href="/modules/member/personalinfo" class="nav-link">View Edit Profile </a>


                <a href="javascript:void(0)" data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Welcome Letter </a>


                <a href="javascript:void(0)" data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Employee ID Card </a>
              </nav>
            </li>
<?php 
if($affiliate == 'no' || $affiliate == '') { ?>
 <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-cog-outline"></i> Payment Services</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="/modules/member/request_payment" class="nav-link">Send Payment Request </a>
                      <a href="/modules/member/payout_recieve" class="nav-link">Recieved Payment History</a>
                      <a href="/modules/member/track_earning" class="nav-link">Daily Earning</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>

<?php } else { ?> 

             <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-folder"></i> Amazing Link<img class="icon" src="/modules/member/images/icon/new.gif"></a>
              <nav class="az-menu-sub">
                <a href="/modules/member/statistics/" class="nav-link"><i class="typcn typcn-cog-outline">
                </i>Statistics</a>

                <a href="#" class="nav-link">Fill Detail</a>

              </nav>
            </li>

        <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-cog-outline"></i> Payment Services</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="/modules/member/request_payment" class="nav-link">Send Payment Request </a>
                      <a href="/modules/member/payout_recieve" class="nav-link">Recieved Payment History</a>
                      <a href="/modules/member/track_earning" class="nav-link">Available Earning</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>

<?php 
}
 ?>
    

            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-key-outline"></i> Employee Id</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="emp_gen_edt" class="nav-link">Generate/Edit Id</a>
                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-support"></i>Self Care <span class="custom-dropdown-icon"></span></a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Generate Password </a>

                      <a data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Change Password</a>

                      <a href="https://www.google.com/recaptcha/api2/demo" target="_blank" rel="noopener noreferrer" class="nav-link"> DEMO PRACTISE WORK</a>

                    </nav>
                  </div>
                </div><!-- container -->
              </div>
            </li>

            <li class="nav-item">
              <a href="#" data-toggle="modal" data-target="#exampleMcascodalCenter" onclick="ddc_open_from_model();" class="nav-link"><i class="typcn typcn-contacts"></i>Any Form Fill Request</a>
                 
            </li>

          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <span id="SUCESS"></span>
          <a href="javascript:void(0);" class="nav-link" id="" data-toggle="modal" data-target="#profileModal" aria-haspopup="true" aria-expanded="false">
            <img src="/modules/member/images/social_media.png" style="width:24px;" class="img-fluid" alt="Social Media">
          </a>

          <a href="#" traget="_blank" data-toggle="modal" data-target="#exit_policy_info" class="nav-link">
            <img src="/modules/member/images/exit.png" style="width:24px;" class="flag img-fluid" alt="Exit Policy">
          </a>
          <a href="javascript:void(0);" onclick="window.open('/verified.php','popUpWindow','height=500,width=500,left=100,top=100,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=no');" class="nav-link">
            <img src="/modules/member/images/verify.ico" style="width:24px;" class="flag img-fluid" alt="Pgroup">
          </a>
          <div class="nav-item dropdown language-dropdown more-dropdown">
            <div class="dropdown custom-dropdown-icon" style="margin-top:5px;">
              <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/modules/member/images/flag.png" class="flag-width" alt="flag" style="border-radius: 15px"></a>

              <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                <a class="dropdown-item" data-img-value="nepal" data-value="Nepal" href="#"><img src="/modules/member/images/flag.png" class="flag-width" alt="flag"> India</a>
                <a class="dropdown-item" data-img-value="india" data-value="Bangladesh" href="#"><img src="/modules/member/images/coming_soon.png" class="flag-width" alt="flag">Comming Soon</a>
              </div>
            </div>
          </div>
          <div class="dropdown az-header-notification">
            <a href="#" class="">
              <!-- <i class="typcn typcn-bell"></i> -->
              <img src="/modules/member/images/notification.png" style="width:24px;" class="flag img-fluid" alt="Verified">
            </a>
            <div class="dropdown-menu" style="background-color: yellow">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have <?php echo $notification['title']; ?> notification</p>
              <div class="az-notification-list">
                <ul>
                  <?php
                  $get_batch_information = "SELECT * FROM notification";
                  $get_batch_information_query = mysqli_query($conn, $get_batch_information);
                  while ($rwo = mysqli_fetch_assoc($get_batch_information_query)) { ?>
                    <li style="font-size: 18px;"><?php echo ($rwo['title']) ?></li>
                    <span style="font-size: 15px; color: green; font-family: elephant">

                      <?php
                      $string = $rwo['content'];
                      if (strlen($string) > 15) {
                        $trimstring = substr($string, 0, 15);
                      } else {
                        $trimstring = $string;
                      }
                      echo $trimstring;
                      ?><a href="/modules/member/images/notification?id=<?php echo ($rwo['id']) ?>" style="color: red">readmore...</a>
                    </span>
                  <?php } ?>
                </ul>


              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->

          <div class="dropdown az-profile-menu">
            <a href="#" class="az-img-user">
              <img src="/modules/member/images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img-fluid">

            </a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="/modules/member/images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img-fluid mr-2">
                </div><!-- az-img-user -->
                <h6><?php echo $fname . " " . $lname ?></h6>
                <span><?php echo $eid ?></span>
              </div>

              <a href="/modules/personalinfo" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> My Inbox</a>
              <a href="activity_logs" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="/logout" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->
