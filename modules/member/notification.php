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

$id_get = $_REQUEST['id'];
$sql = "SELECT * FROM notification WHERE id = '$id_get'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $title= ucfirst($row['title']);
        $content= ucfirst($row['content']);
        $notification_status= ucfirst($row['status']);
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
      $ydate = date("d-m-Y H:i:s"); 
$day = date("l");
?>
<!--=====================START HEADER======================-->

<?php include 'no_libs/header_b.php';?>
             <!--=====================END HEADER======================-->

<div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Notifications</h5>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">


                <div>
            <p style="font-size: 30px"><?php echo $title ?>
          <span class="form-group" style="background-color: yellow;"></span></p>
            <br>
            <p style="font-size: 20px"><?php echo $content ?></p>
        </div>
</div>
</div>
</div>
</div>
</div>

  </body>
  </html>


<?php
 }
else{
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
<center><p><a href="main">LOGIN</a></p></center>
</body>
</html>
    <?php
}

?>