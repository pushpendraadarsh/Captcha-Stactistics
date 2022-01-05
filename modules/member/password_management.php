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

   $sql = "SELECT * FROM users WHERE username = '$eid' and type = 'employee'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $last_change= $row['last_seen'];
}


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
 

date_default_timezone_set('Asia/Kolkata');
$ydate = date('Y-m-d H:i:s');
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
<?php include 'libs/header.php';?>
<!--============================================END HEADER===========================================-->

          <!--==========================================================================================-->
<?php include 'libs/popup.php';?>

          <!--=======================================================================================--
<div align="center">
    <h4>Update Password -<span style="color: blue;"> <?php echo $eid?></span></h4>
    <form  method="post">
        <b>Old Password: </b><input type="password" name="oldpassword" value="" placeholder="Enter Old Password" required><br>
        <b>New Password: </b><input type="password" name="newpassword_one" placeholder="Enter New Password" required><br>
        <b>New Password Again: </b><input type="password" name="newpassword_again" placeholder="Enter New Password Again" required><br>
        <input type="submit" name="changepassword" value="Change Password">
    </form>
</div>

==-->




   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Password Change</h5>
         </div>
         <div class="modal-body">
         	<p class="modal-title" style="text-align: center;color: white;font-size: 19px;font-weight: 800;text-shadow: 3px 1px 1px red;"><h5>LAST CHANGE:</h5><?php echo $last_change; ?></p>
            <div class="row">
               <div class="col-sm-12">

                  <form method="post">
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Old Password</label>
      <input type="password" class="form-control" name="oldpassword" value="" placeholder="Enter Old Password" required="">
      
    </div>
     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> New Password</label>
      <input type="text" class="form-control" name="newpassword_one" placeholder="Enter New Password" required="">
      
    </div>

      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Retype New Password</label>
      <input type="text" class="form-control" name="newpassword_again" placeholder="Enter New Password Again" required="">
      
    </div>
    <br>
    <center>
      <br>
      <input type="submit" name="changepassword" value="Change Password" class="btn btn-primary">
    </center>
   
 </form>
                </div>

    <?php
        if(isset($_POST['changepassword'])){
            $get_old_password=$_POST['oldpassword'];
            $get_new_password=$_POST['newpassword_one'];
            $get_new_password_again=$_POST['newpassword_again'];
            $date=$ydate;

            $searvh_pass = "SELECT * FROM users WHERE username='$eid' AND password='$get_old_password'";
            $searvh_pass_get = mysqli_query($conn,$searvh_pass);
            $searvh_pass_check = mysqli_num_rows($searvh_pass_get);
            if($searvh_pass_check > 0){
                if($get_new_password===$get_new_password_again){
                    $update_users = "UPDATE users SET password='$get_new_password' , last_seen='$date' WHERE username='$eid' AND type='employee'";
                    $update_users_q = mysqli_query($conn,$update_users);
                    if($update_users_q){
                        echo '<script>alert("Password Update Success")</script>';
                    }else{
                        echo '<script>alert("SomeThing Went Wrong. Try Again after some time")</script>';
                    }
                }else{
                    echo '<p align="center" style="color: red">*password and confirm password does not match</p>';
                }
            }else{
                echo '<p align="center" style="color: red">*old password is wrong</p>';
            }
        }
    ?>
 <!--==========================================================================================-->
<?php include 'libs/footer.php';?>

          <!--=======================================================================================-->
                
 <!--==========================================================================================-->
<?php include 'libs/exit_policy.php';?>
<?php include 'libs/go_goa.php';?>
<?php include 'libs/extra_last.php';?>
<!--=======================================================================================-->
  
  <!-- Pop up -->
<?php include 'libs/js.php';?>

    <!--==================================mainpart======================================-->
     <?php include 'libs/main_part.php';?>
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