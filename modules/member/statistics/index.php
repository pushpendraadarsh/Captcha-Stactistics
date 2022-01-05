<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    include("../../../config/database.php");
    $id = $_SESSION['id'];
    $eid = $_SESSION['username'];
    $date = date("d/m/Y");

   $sql = "SELECT * FROM doller_rate WHERE id = '1'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $doller_rate= ucfirst($row['rate']);
}

$sql23 = "SELECT MAX(payout_id) as pay_id FROM payout WHERE eid='$eid'";
    $result = mysqli_query($conn, $sql23);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $payout_date_sudha = $row['date'];
        $payout_date = $row['pay_id'];
}

/***************************************/
   $sql_earning = "SELECT MAX(id) as id_data FROM earning WHERE eid='$eid'";
$earningsql = mysqli_query($conn, $sql_earning);
$resultcheck = mysqli_num_rows($earningsql);
$check= mysqli_fetch_assoc($earningsql);
$today= $check['id_data'];
/*************************************************************/


$count="SELECT date_u,earning,affiliate, SUM(earning + affiliate) AS total
FROM earning
WHERE eid= '$eid' and id BETWEEN '$payout_date' AND '$today' group by id ORDER BY id ASC";

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
      $sql = "SELECT * FROM employee WHERE eid = '$affiliate'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $affiliate_fname= ucfirst($row['fname']);
            $affiliate_lname = ucfirst($row['lname']);
            $affiliate_placement = $row['placement'];
            $affiliate_phone = $row['phone'];
            $affiliate_dob = $row['dob'];
            $affiliate_gender = $row['gender'];
            $affiliate_pan_no = $row['pan_no'];
            $affiliate_aadhar_no = $row['aadhar_no'];
            $affiliate_phone_coated = $row['phone_coated'];
            $affiliate_email = $row['email'];
            $affiliate_email_coated = $row['email_coated'];
            $affiliate_join_date = $row['join_date'];
            $affiliate_sub_id = $row['sub_id'];
            $affiliate_expiry_date = $row['expiry_date'];
            $affiliate_position = ucfirst($row['position']);
            $affiliate_address = $row['address'];
            $affiliate_occupation = ucfirst($row['occupation']);
            $affiliate_image = $row['image'];
            $affiliate_last_seen = $row['last_seen'];
            $affiliate_registration_date = $row['registration_date'];
            $affiliate_aid = $row['aid'];
            $affiliate_status = $row['status'];
            $affiliate_tpassword = $row['tpassword'];
      }
      
      $ydate = date("d-m-Y H:i:s"); 
$day = date("l");

if($status == 'yes' || $status == 'Yes') {
        ?>
<!--================================================HEADER=================================-->
<?php include '../libs/header.php';?>
<!--============================================END HEADER===========================================-->


<?php include '../libs/statistics_detail.php';?>




 <!--==========================================================================================-->
<?php include '../libs/footer.php';?>

          <!--=======================================================================================-->
                
 <!--==========================================================================================-->
<?php include '../libs/exit_policy.php';?>
<?php include '../libs/go_goa.php';?>
<?php include '../libs/extra_last.php';?>
<!--=======================================================================================-->
  
  <!-- Pop up -->
<?php include '../libs/js.php';?>

    <!--==================================mainpart======================================-->
     <?php include '../libs/main_part.php';?>
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
    header("Location: /index.php");
}

?>