<!DOCTYPE html>
<html lang="en">
<head>
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="../../assets/6/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="../../assets/6/datatables.net-dt/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="../../assets/6/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">

  </head>
  <body><div class="az-header">
<div class="container-fluid">
        <div class="az-header-left">
          <a href="#" class="az-logo"><span><img src="https://www.oxiinc.com/newassets/2/assets/images/logo/logo.png" style="width:120px;"></span></a>
          <a href="#" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="index.html" class="az-logo"><span><img src="https://www.oxiinc.com/newassets/2/assets/images/logo/logo.png" style="width:120px;"></span></a>
            <a href="#" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
              <ul class="nav">
            <li class="nav-item active show"><a href="#" class="nav-link"><i class="typcn typcn-home"></i> Dashboard</a></li>
            <li class="nav-item">
                            <a href="#" class="nav-link with-sub"><i class="typcn typcn-folder"></i> My Profile</a>
              <nav class="az-menu-sub">
                                          <a href="javascript:void(0)" data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">View Edit Profile </a>
                          
                             
                <a href="javascript:void(0)" data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Welcome Letter </a>
                          

                                          <a href="javascript:void(0)" data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Employee ID Card </a>
                  
             <!--

                
                              <a href="javascript:void(0)" data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Change Login Password</a>
                           

                <a href="https://www.oxiinc.com/customers/transaction_password" class="nav-link">Transaction Password</a>-->
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
                      <a href="https://www.oxiinc.com/Placement-Structure" class="nav-link">Overall Earning</a>
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
          
   

             
      <!--<li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-calculator"></i>  Account</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="https://www.oxiinc.com/wallets?type=1" class="nav-link">Digital Literacy Earning</a>
                      <a href="https://www.oxiinc.com/wallets/maching_commission" class="nav-link">Team Training Bonus </a>
                      <a href="https://www.oxiinc.com/customers/international_wallet_statement" class="nav-link">Enpay Wallet Statement </a>
                      <a href="https://www.oxiinc.com/customers/disaster_wallet" class="nav-link">Digital Marketing Report </a>
                      
                                                                   <a ata-target="#otp_transaction_password" data-toggle="modal"  onclick="otp_transaction_password();" class="nav-link">Payment Request </a>
                                           
                  
                      <a href="https://www.oxiinc.com/wallets/credit_debit" class="nav-link">Credit / Debit Statement </a>
                      <a href="https://www.oxiinc.com/customers/Top_shareholder" style="display: none;" class="nav-link">Top shareholder</a>
                      <a href="https://www.oxiinc.com/customers/Top_shareholder_statment" style="display: none;" class="nav-link">Top shareholder Statement </a>
                      <a style="display: none;" href="#" class="nav-link">CashBack Statement</a>
                     <a href="" class="nav-link">Shopping Statement </a>
                      <a href="https://www.oxiinc.com/customers/shopping_credit_debit" class="nav-link">Shopping Credit / Debit Statement </a>
                    </nav>
                  </div>
                </div>
              </div>
            </li>
                      

          
      <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Order Section</a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                      <a href="https://www.oxiinc.com/orders/myorders" class="nav-link">My Orders</a>
                      
                                            
                                                             
                                                  <a href="https://www.oxiinc.com/customers/new_team_orders_3289_new" class="nav-link">Affiliate Orders</a>
                                             
                  
                                        <a href="https://www.oxiinc.com/customers/Bank_Deposit_Receipt" class="nav-link">Bank Deposit Receipt</a>
                      <a href="https://www.oxiinc.com/customers/Bank_Deposit_Statement" class="nav-link"> Bank Deposit Statement</a>
                      
                    </nav>
                  </div>
                </div>
              </div>
            </li>

                   -->                               
      <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-support"></i>Self Care <span class="custom-dropdown-icon"></span></a>
              <div class="az-menu-sub">
                <div class="container">
                  <div>
                    <nav class="nav">
                                                             <a data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Generate Password </a>
                                       
                                                                    <a data-target="#otp_transaction_password" data-toggle="modal" onclick="otp_transaction_password();" class="nav-link">Change Password</a>
                            
                      
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
    <a href="javascript:void(0);" class="nav-link" id="" data-toggle="modal" data-target="#profileModal" aria-haspopup="true" aria-expanded="false">
      <img src="https://www.oxiinc.com/newassets/4/assets/img/header/social sharing icon-01.png" style="width:24px;" class="img-fluid" alt="Social Media">
    </a>
    
          <a href="#" traget="_blank" data-toggle="modal" data-target="#exit_policy_info" class="nav-link">
       <img src="https://www.oxiinc.com/newassets/4/assets/img/header/power icon.png" style="width:24px;" class="flag img-fluid" alt="Exit Policy">
      </a>
      <a href="javascript:void(0);" onclick="window.open('https://www.oxiinc.com/customers/verfied_customer','popUpWindow','height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" class="nav-link">
       <img src="https://www.oxiinc.com/newassets/4/assets/img/header/verify icon-01.png" style="width:24px;" class="flag img-fluid" alt="Verified">
      </a>
      <div class="nav-item dropdown language-dropdown more-dropdown">
      <div class="dropdown custom-dropdown-icon" style="margin-top:5px;">
                <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://www.oxiinc.com/newassets/4/assets/img/india.png" class="flag-width" alt="flag" style="border-radius: 15px"></a>

        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
          <a class="dropdown-item" data-img-value="india" data-value="Bangladesh" href="https://www.oxiinc.com"><img src="https://www.oxiinc.com/newassets/4/assets/img/india.png" class="flag-width" alt="flag"> India</a>
          <a class="dropdown-item" data-img-value="nepal" data-value="Nepal" href="https://ww.oxiinc.com"><img src="https://www.oxiinc.com/newassets/4/assets/img/nepal.png" class="flag-width" alt="flag"> Nepal</a>
          <a class="dropdown-item" data-img-value="bangladesh" data-value="Bangladesh" href="https://www.oxiinc.com"><img src="https://www.oxiinc.com/newassets/4/assets/img/bangladesh.png" class="flag-width" alt="flag"> Bangladesh</a>
        </div>
      </div>
    </div>
          <!--<div class="az-header-message">
            <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
          </div> az-header-message -->
          <div class="dropdown az-header-notification">
            <a href="#" class=""><!-- <i class="typcn typcn-bell"></i> -->
              <img src="https://www.oxiinc.com/newassets/4/assets/img/header/bell icon-01.png" style="width:24px;" class="flag img-fluid" alt="Verified">
            </a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                              </div><!-- az-notification-list -->
              <!-- <div class="dropdown-footer"><a href="#">View All Notifications</a></div> -->
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="#" class="az-img-user">
<img src="images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img-fluid">
              
            </a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                                      <img src="images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img-fluid mr-2">
                                  </div><!-- az-img-user -->
                <h6><?php echo $fname . " " . $lname ?></h6>
                <span><?php echo $eid ?></span>
              </div><!-- az-header-profile -->

              <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> My Inbox</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="../../logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->
    <div class="az-content az-content-dashboard">
      <div class="container-fluid">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, <?php echo $fname . " " . $lname ?> !</h2>
            </div>
            <div class="az-content-header-right">
              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6>
                    <?php echo $join_date; ?>                  </h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>Expiry Date</label>
                  <h6>
                    <?php echo $expiry_date; ?>                  </h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <!--<div class="media">
                <div class="media-body">
                  <label>Event Category</label>
                  <h6>All Categories</h6>
                </div>
              </div> media -->
              <!-- <a href="#" class="btn btn-purple">Export</a> -->
            </div>
          </div>
          <!-- az-dashboard-one-title -->