<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    include("../../config/database.php");
    $id = $_SESSION['id'];
    $eid = $_SESSION['username'];
    $date = date("d/m/Y");

   $sql = "SELECT * FROM sub_id WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $subidupgrade= ucfirst($row['upgrade_date']);
        $subidexpiry= ucfirst($row['expiry_date']);
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

 $sql = "SELECT * FROM payout WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $user_payout= ucfirst($row['payout']);
}

 $sql = "SELECT * FROM aid WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $admin_id= ucfirst($row['aid']);
        $admin_fname= ucfirst($row['fname']);
        $admin_lname= ucfirst($row['lname']);
}
/*  ONLINE SEWA COUNT    */
$sql_find_batch = "SELECT count(work) AS total_work FROM online_seva WHERE eid = '$eid'";
                    $sql_find_batch_get=mysqli_query($conn,$sql_find_batch);
                    $sql_find_batch_total = mysqli_fetch_assoc($sql_find_batch_get);
/*       END*/






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
            $tpassword = $row['tpassword'];
      }
      $ydate = date("d-m-Y H:i:s"); 
$day = date("l");

if($status == 'yes' || $status == 'Yes') {
        ?>

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
<!--================================================HEADER=================================-->
<?php include 'libs/header_home.php';?>
<!--============================================END HEADER===========================================-->

<!--=============================================Main content DETAIL===========================-->
    <?php include 'libs/data_table.php';?>   
<!--==================================================END Main content DETAIL=========================-->

 <!--==========================================================================================-->
<?php include 'libs/footer.php';?>
<?php include 'libs/mobile_overlay.php';?>
          <!--=======================================================================================-->
                
 <!--==========================================================================================-->
<?php include 'libs/exit_policy.php';?>
<?php include 'libs/go_goa.php';?>
<?php include 'libs/extra_last.php';?>
<!--=======================================================================================-->
  
  <!-- Pop up -->
<?php include 'libs/js_home.php';?>

    <!--==================================mainpart======================================-->
     <?php include 'libs/script_head.php';?>
     <!--================================================================================--->
</body>
</html>
<?php
    }else{
        ?>
        <h1>Your account is deactivated by admin due to some reasons. kindly contact Admin for further.</h1>
        <?php
    }
}else{
    header("Location: ../../index.php");
}

?>