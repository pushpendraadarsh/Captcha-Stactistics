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

$sql = "SELECT * FROM bank_detail WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $bank_status= ucfirst($row['account_status']);
        $account_holder_name=ucfirst($row['account_holder_name']);
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

if($bank_status == 'no' || $bank_status == 'No') {
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
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Banking Detail Update</h5>
         </div>
         <div class="modal-body">
          <p>For <?php echo $fname ."". $lname ?></p>
            <div class="row">
               <div class="col-sm-12">

                  <form method="post">
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Bank Name</label>
      <input type="text" class="form-control" name="bank_name" value="" placeholder="Enter Your Bank name" required="">
    </div>

     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Account Holder Name</label>
      <input type="text" class="form-control" name="account_holder_name" value="<?php echo $fname ."". $lname ?>" placeholder="Enter Account Holder Name" required  readonly>
    </div>

<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Account Number</label>
      <input type="text" class="form-control" name="account_no" value="" placeholder="Enter Account Number" required="">
    </div>


<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Account Type</label>
     <select name="account_type" required>
       <option>select</option>
       <option value="Saving">Saving</option>
       <option value="Current">Current</option>
     </select>
     <!-- <input type="text" class="form-control" name="account_type" value="" placeholder="Enter Account Type" required="">-->
    </div>


<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Account IFSC CODE</label>
      <input type="text" class="form-control" name="ifsc_code" value="" placeholder="Enter Account IFSC CODE" required="">
    </div>


<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Branch</label>
      <input type="text" class="form-control" name="branch" value="" placeholder="Branch" required="">
    </div>
    <br>
    <center>
      <br>
      <input type="submit" name="change_bank_detail" value="Update Bank Detail" class="btn btn-primary">
    </center>
   
 </form>
                </div>
<?php
        if(isset($_POST['change_bank_detail'])){
            $bank_name=$_POST['bank_name'];
            $account_holder_name=$_POST['account_holder_name'];
            $account_no=$_POST['account_no'];
            $account_type=$_POST['account_type'];
            $ifsc_code=$_POST['ifsc_code'];
            $branch=$_POST['branch'];
            $status="yes";
            $date=$ydate;

         $update_users = "UPDATE bank_detail SET bank_name='$bank_name', account_holder_name='$account_holder_name' ,account_no='$account_no' ,account_type='$account_type' ,ifsc_code='$ifsc_code' ,branch='$branch' ,account_status='$status' ,time_stamp='$date' WHERE eid='$eid'";
                    $update_users_q = mysqli_query($conn,$update_users);
                    if($update_users_q){
                        echo '<script>alert("Bank Detail Update Success")</script>';
                    }else{
                        echo '<script>alert("SomeThing Went Wrong. Try Again after some time")</script>';
                    }
        }
    ?>





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
            <p style="font-size: 30px">Your Bank Detail Are Sucessfully Uploaded<span class="form-group" style="background-color: yellow;"> <a href="../">Click me To Back</a></span></p>
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