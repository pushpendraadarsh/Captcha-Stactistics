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
    if($row = mysqli_fetch_assoc($result))
    {
        $sub_id_status= ucfirst($row['status']);
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

if($sub_id_status == 'no' || $sub_id_status == '') {
        ?>
             <!--=====================START HEADER======================--> 
<?php include 'no_libs/header_b.php';?>
             <!--=====================END HEADER======================-->

<style type="">
  select {
  margin-right: 8px;
  box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
  width: 100%;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  appearance: none;
  -webkit-appearance: none;
}
select {
    background-size: 1.25rem;
    background-repeat: no-repeat;
    background-position: calc(100% - 1rem) center;
    height: 2.75em;
    padding-right: 2.75em;
    text-overflow: ellipsis;
}

select, textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    border-radius: 8px;
    border: solid 1px;
    color: black;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
}

select, textarea {
    background-color: #EBECF0;
    border-color: #EBECF0;
}
</style>
<div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">SUB ID GENERATION AND BUY.</h5>
         </div>
         <div class="modal-body">
          <p>For <?php echo $fname ."". $lname ?></p>
            <div class="row">
               <div class="col-sm-12">

                  <!--================CONTENT HERE...======================-->


                </div>
<?php include 'libs/footer.php';?>
<?php include 'no_libs/extra_last.php';?>
<?php include 'no_libs/js.php';?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


  </body>
  </html>
<?php
    }else{
        ?>
<!--=====================START HEADER======================--> 
<?php include 'no_libs/header_b.php';?>
             <!--=====================END HEADER======================-->

<div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Notice</h5>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">


                <div>
            <p style="font-size: 30px">Your Sub Id Detail Are Sucessfully Submited<span class="form-group" style="background-color: yellow;"> <a href="../">Click me To Back</a></span></p>
            <img src="../../images/sucess.gif">
        </div>
</div>
</div>
</div>
</div>
</div>

<?php
 }
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