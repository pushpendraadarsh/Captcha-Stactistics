<?php
include_once("config/database.php");
// if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
//     $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     header('HTTP/1.1 301 Moved Permanently');
//     header('Location: ' . $location);
//     exit;
// }
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    
    $eid = $_SESSION['username'];

    $sql = "SELECT * FROM employee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $fname= ucfirst($row['fname']);
            $lname = ucfirst($row['lname']);
            $placement = $row['placement'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $pan_no = $row['pan_no'];
            $aadhar_no = $row['aadhar_no'];
            $phone_coated = $row['phone_coated'];
            $email = $row['email'];
            $email_coated = $row['email_coated'];
            $join_date = $row['join_date'];
            $sub_id = $row['sub_id'];
            $expiry_date = $row['expiry_date'];
            $position = ucfirst($row['position']);
            $address = $row['address'];
            $occupation = ucfirst($row['occupation']);
            $image = $row['image'];
            $last_seen = $row['last_seen'];
            $registration_date = $row['registration_date'];
            $aid = $row['aid'];
            $status = $row['status'];
            $affiliate = $row['affiliate'];
            $tpassword = $row['tpassword'];
      }
?>
<!--============================WELCOME AREA START============================-->
<!DOCTYPE html>
<html lang="en">
<head><title>Pushpendra Group || Captcha Statistics <?php echo $fname.' '.$lname ?></title>
<!--========================Google assets=============================-->
<script data-ad-client="ca-pub-4630015227184586" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--==================================================================-->
	<meta charset="UTF-8">
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
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://pngimg.com/uploads/google/google_PNG19635.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="screen">
<!--===============================================================================================-->
<style>
            .name{
                font-size: 25px;
                font-style: italic;
                color: red;
            }
            a{
                padding: 5px 5px 5px 5px;
            
                background-color: violet;

            }
            a:active{
                box-shadow: 5px 10px lightcyan;
            }
        </style>
        </head>
<body>
	<center>
	<div>
        <!--===login==-->	
        
        <div id="opacityid">
	<div class="limiter">
		<div class="container-login100">
            <h1>Pushpendra Group</h1>
			<div class="wrap-login100" style="margin-top: 0;">
	<div class="name";>welcome !! <?php echo $fname.' '.$lname ?></div>
	<a href="modules/member/" class="btn">Go to Dashboard</a>
	<a href="logout" class="btn">LOGOUT</a>
</div>
        </div>
    </div>
        </div>
    </div>
</center>
<!--====================================WELCOME AREA END========================-->

<?php } else{ ?>
	<!--=============================LOGIN AREA START====================-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pushpendra Group || Captcha Statistics</title>
<!--========================Google assets=============================-->
<script data-ad-client="ca-pub-4630015227184586" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script data-ad-client="ca-pub-4630015227184586" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!--==================================================================-->
	<meta charset="UTF-8">
 <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="google-site-verification" content="6DYuXui-ZnKb5tulG1qSNBqA_1WKuE6_7ynGTAQvFM0" />
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
   <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="396615079605-7jrfsa7q4tcl107doinc57tu5faqq1fq.apps.googleusercontent.com">
   <meta name="twitter:url" content="https://www.pggroup.tech"/>
   <meta name="twitter:description" content="Pushpendra Group || Captcha Statistics. Earn Money And Developed Your Brain Concentration."/>
  <meta name="referrer" content="no-referrer">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://pngimg.com/uploads/google/google_PNG19635.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="screen">
<!--===============================================================================================-->
</head>
<body>

	<div id="login_body">
        <div class="fixed-container" style="display: none;" id="fxdcont">
            <center>
            <img class="proces-img" src="http://25.media.tumblr.com/f1c80f47150edbfcf04799d88eba81c4/tumblr_mztg4hQ7B01qdac8co1_500.gif" alt="" style="margin: auto;">
        </center>
    </div>
        <!--===login==-->	
        <div id="opacityid">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/recaptcha.png" alt="pgroup_captcha">
				</div>
<style>
    .fixed-container{
        display:none;
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: white;
    }
    @media only screen and (min-width: 300px) and (max-width: 770px) {
        .proces-img{
    top: 80vw;
    }
}
    .proces-img{
        width: 300px;
        position: relative;
        top: 20vw;
        height: 180px;
        margin: auto;
        border-radius: 5px;
    }
.logog{
    width: 250px;
    height: 100px;
    margin-left: 30px;
}
</style>
				<form class="form-login" method="post" class="login100-form validate-form" id="login-form">
					<center><img class="logog" src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c51f.png"/></center>
					<span class="login100-form-title">
						LOGIN AREA <br><p class="pgroup">At Pushpendra Group</p>
					</span>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
					<div class="wrap-input100 validate-input" data-validate = "Valid MID/AID/SID is required">
						<input class="input100" type="text" name="user_email" id="user_email" placeholder="Email Id">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        <span id="check-e"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
                    <div id="error"></div>
					<div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn btn btn-default" name="login_button" id="login_button">
			<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#" onclick='alert("Please Contact Admin");'>
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<div id="process"></div>
			</div>
		</div>
	</div>
    </div>
</div><!--===login==-->
<!--==========================LOGIN AREA END================-->
<?php }	?>
	


<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
<script>
 if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Hi there!");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Hi there!");
      }
    });
  }
  onSignIn(googleUser);
  function onSignIn(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  console.log(id_token);
}
var xhr = new XMLHttpRequest();
xhr.open('POST', 'tokensignin.php');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onload = function() {
  console.log('Signed in as: ' + xhr.responseText);
};
xhr.send('idtoken=' + id_token);
alert(id_token);
</script>
</body>
</html>