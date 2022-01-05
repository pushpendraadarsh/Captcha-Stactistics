<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */
include("../../config/database.php");
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    
    $eid = $_SESSION['username'];
    $date = date("d/m/Y");

   $sql = "SELECT * FROM sub_id WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $subidupgrade= ucfirst($row['upgrade_date']);
        $subidexpiry= ucfirst($row['expiry_date']);
        $sub_id_status= ucfirst($row['status']);
}
   $sql = "SELECT * FROM doller_rate WHERE id = '1'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $rate_doller= ucfirst($row['rate']);
}
 $sql = "SELECT * FROM earning WHERE eid = '$eid' and date_u = '$date'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $user_earning= ucfirst($row['earning']);
}

 $sql = "SELECT * FROM document WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $document_status= ucfirst($row['status']);
}

 $sql = "SELECT * FROM nominee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $nominee_status= ucfirst($row['status']);
}

 $sql = "SELECT * FROM bank_detail WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $bank_status= ucfirst($row['account_status']);
}

 $sql = "SELECT * FROM support_ticket WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $title= ucfirst($row['title']);
        $message= ucfirst($row['message']);
}

/*  support ticket COUNT    */
$sql_find_batch1 = "SELECT count(title) AS support_ticket_count FROM support_ticket WHERE eid = '$eid'";
                    $sql_find_batch_get1=mysqli_query($conn,$sql_find_batch1);
                $support_ticket_query = mysqli_fetch_assoc($sql_find_batch_get1);
/*       END*/
$sql_earning = "SELECT MAX(id) as id_data FROM earning WHERE eid='$eid'";
$earningsql = mysqli_query($conn, $sql_earning);
$resultcheck = mysqli_num_rows($earningsql);
$check= mysqli_fetch_assoc($earningsql);
$today= $check['id_data'];

$sql_app = "SELECT * FROM payout WHERE eid='$eid' ORDER BY id DESC";
    $res_app = mysqli_query($conn, $sql_app);
    $resultcheck = mysqli_num_rows($res_app);
    $row_payout = mysqli_fetch_assoc($res_app);
$payout_date = $row_payout['payout_id'];


$payout_for_payout= "SELECT SUM(payout) AS payout_sum
FROM payout
WHERE eid= '$eid'";
$report= mysqli_query($conn,$payout_for_payout);
$data_fetch123= mysqli_fetch_assoc($report);
$payout_half= $data_fetch123['payout_sum'];
$payout = number_format($payout_half,2);

$data_for_earning= "SELECT SUM(earning) AS earning_sum_p
FROM earning
WHERE eid= '$eid' and id between '$payout_date' and '$today'";

$report89= mysqli_query($conn,$data_for_earning);
$data_fetch= mysqli_fetch_assoc($report89);
$balanc= $data_fetch['earning_sum_p'];
$balance = number_format($balanc, 2);
$earning_money = $balance * $rate_doller;
//$earning_money = number_format($earning_money, 2);

$data_for_earning123= "SELECT SUM(earning) AS earning_sum1
FROM earning
WHERE eid= '$eid' ORDER BY id DESC";
$report852= mysqli_query($conn,$data_for_earning123);
$data_fetch147= mysqli_fetch_assoc($report852);
$overall_money= $data_fetch147['earning_sum1'];
$timestamp_earn = $data_fetch147['timestamp'];


/*  ONLINE SEWA COUNT    */
$sql_find_batch = "SELECT count(work_title) AS work_title FROM online_seva WHERE eid = '$eid'";
                    $sql_find_batch_get=mysqli_query($conn,$sql_find_batch);
             $sql_find_batch_total = mysqli_fetch_assoc($sql_find_batch_get);
/*       END*/


/*  notification COUNT    */
$sql_find_batch = "SELECT count(title) AS title FROM notification";
                    $sql_find_batch_get=mysqli_query($conn,$sql_find_batch);
                    $notification = mysqli_fetch_assoc($sql_find_batch_get);
              /*END*/

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
$datetime1 = new DateTime(date("d-M-Y"));//current date
$datetime2 = new DateTime($expiry_date);//till date
$interval = $datetime1->diff($datetime2);
$left_upgrade_date=  $interval->format('%R%a');

 
      $ydate = date("d-m-Y H:i:s"); 
$day = date("l");
 $sql = "SELECT * FROM employee WHERE eid = '$aid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $admin_fname= ucfirst($row['fname']);
        $admin_lname= ucfirst($row['lname']);
}
    $num0 = 'PG';
    $num1 = $pan_no;
    $num3 = date("dmY_his");
    $randumnum = $num0 . $num1 . $num3;

if($status == 'yes' || $status == 'Yes') {
?>
<!--================================================HEADER=================================-->
 <?php
    /* Your password */
    $password = $tpassword;

    /* Redirects here after login */
    $redirect_after_login = 'password_management';

    /* Will not ask password again for */
    $remember_password = strtotime('0 second'); // 30 days

    if (isset($_POST['tpassword']) && $_POST['tpassword'] == $password) {
        setcookie("tpassword", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
    }
    
?>
<?php
/**
 * Created by PhpStorm.
 
 */
?>
<?php include 'libs/header.php';?>
<!--============================================END HEADER===========================================-->
<?php include 'libs/popup_js.php';?>
<!--=============================================EARNING DETAIL===========================-->
    <?php include 'libs/earningdetail.php';?>   
<!--==================================================END EARNING DETAIL=========================-->    
       
<!--================================ACCOUNT DETAIL===============================-->
<?php include 'libs/accountdetail.php';?>
<!--==========================================END ACCOUNT DETAIL==========================-->
          <!--==========================================================================================-->
          <!--=======================================================================================-->

 <!--==========================================================================================-->
<?php include 'libs/footer.php';?>

          <!--=======================================================================================-->
                
 <!--==========================================================================================-->
<?php include 'libs/exit_policy.php';?>
<?php include 'libs/extra_last.php';?>
<!--=======================================================================================-->
  
  <!-- Pop up -->
<?php include 'libs/js.php';?>

    <!--==================================mainpart======================================-->
     <?php include 'libs/main_part.php';?>
     <?php include 'libs/main_part(o).php';?>
     <!--================================================================================--->
</body>
</html>
<?php
    } else {
        ?>
<!DOCTYPE html>
<html>
             <!--=====================START HEADER======================--> 
<?php include 'no_libs/header_b.php';?>
             <!--=====================END HEADER======================-->

<?php include 'no_libs/earningdetail.php';?>  
<?php include 'libs/footer.php';?>
<?php include 'no_libs/extra_last.php';?>
<?php include 'no_libs/js.php';?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>
</html>
       <?php
    }
}
else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GOOGLE || Captcha Statistics</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="https://pngimg.com/uploads/google/google_PNG19635.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../images/recaptcha.png" alt="pgroup_captcha">
				</div>
<style>
.logog{
    width: 400px;
    height: 100px;
}
</style>
				<form class="form-login" method="post" class="login100-form validate-form" id="login-form">
					<center><img class="logog" src="https://www.google.com/recaptcha/about/images/google-reCAPTCHA.svg"/></center>
					<span class="login100-form-title">
						LOGIN AREA <br><p class="pgroup"></p>
					</span>

					<div class="container-login100-form-btn">
                    <a href="/index" class="login100-form-btn btn btn-default"> &nbsp; Sign In
			</a>
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
						<a class="txt2" href="registration">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="../../vendor/bootstrap/js/popper.js"></script>
	<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->

</body>
</html>
    <?php
}

?>