  <!-- Pop up -->
  
  <div class="modal fade" id="exit_policy_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Pushpendra Group Exit Policy (T&amp;C)</h5>
            <button class="close close_box" style="top: -4PX !important;padding: 0px 5px !important;" data-dismiss="modal" aria-label="Close"><img src="images/cross.png" width="30px"></button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">
                <div id="disaster_from_exit" style="display: none;">
<?php 

$sql = "SELECT * FROM exit_policy WHERE user_eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $status_exit= ucfirst($row['status']);
        $exit_description= ucfirst($row['description']);
        $exit_request_no= $row['request_no'];
}
  if($status_exit == '')
   {
        ?>
<form method="post" action="main">
    <div class="alert alert-success alert-dismissible" id="exit_sucess" style="display: none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>

<input type="hidden" name="user_eid" value="<?php echo $eid ?>">

      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Name</label>
      <input type="text" class="form-control" name="dep_full_name" value="<?php echo $fname ?> <?php echo $lname ?>" readonly='' required="">
    </div>

     <div class="form-group">
<label for="exampleInputEmail1" class="ddc"> Email-id</label>
      <input type="text" class="form-control" name="dep_email_id" value="<?php echo $email ?>" readonly='' required="">
</div>

    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> contact Number</label>
      <input type="Number" class="form-control" name="dep_contact_number" value="<?php echo $phone ?>" readonly='' required="">
    </div>

    <div class="form-group">
<label for="exampleInputEmail1" class="ddc"> Pan No</label>
      <input type="email" class="form-control" name="dep_pan_no" value="<?php echo $pan_no ?>" readonly='' required="">
    </div>

    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Adhaar No</label>
      <input type="text" class="form-control" name="dep_adhaar_no" value="<?php echo $aadhar_no ?>" readonly=''>
    </div>

<div class="form-group">
 <label for="exampleInputEmail1" class="ddc">Remark's (optional)</label>
      <input type="text" class="form-control" name="dep_remark">
</div>
<input hidden="" type="text" name="dep_status" value="open">
    <div class="form-check ddc">
    <input type="checkbox" name="term" class="form-check-input" value="agree" required="">
    <label class="form-check-label" style="color: black" for="exampleCheck1">i accept all the terms and conditions</label>
    </div>

    <br>
        <center>
          <br>
          <button type="submit" class="btn btn-primary" name="exit_policy">Submit
          </button>
        </center>
      </form>
<?php
    }else{
        ?>
        <center><p>Your Request no.<b><?php echo $exit_request_no ?></b> is <?php echo $exit_description ?> Please take a few days Our workers continuous working.</p></center>
      <?php
    }
    ?>
</div>
<!--==============================================================================================-->
<?php 
  if (isset($_POST['exit_policy'])) {
    $user_eid = $_POST['user_eid'];
    $dep_full_name = $_POST['dep_full_name'];
    $dep_email_id = $_POST['dep_email_id'];
    $dep_contact_number = $_POST['dep_contact_number'];
    $dep_pan_no = $_POST['dep_pan_no'];
    $dep_adhaar_no = $_POST['dep_adhaar_no'];
    $dep_remark = $_POST['dep_remark'];
    $dep_status = $_POST['dep_status'];
    $term = $_POST['term'];
    $time_stamps = $ydate;
    $randnum = $randumnum;
    $description = 'pending';

$query = "UPDATE exit_policy SET user_eid='$user_eid', dep_full_name='$dep_full_name', dep_email_id='$dep_email_id', dep_contact_number='$dep_contact_number', dep_pan_no='$dep_pan_no', dep_adhaar_no='$dep_adhaar_no', dep_remark='$dep_remark', terms='$term', time_stamp='$time_stamps', request_no='$randnum', status='$dep_status', description='$description' WHERE user_eid ='$eid'";
$query_check = mysqli_query($conn,$query);
if ($query_check) {
   echo '<script>
var a = "Your Request Successfully Inserted!!";
document.getElementById("exit_sucess").innerHTML = a;
</script>';
echo '<script>location.href="main#modal-10"</script>';
} else {
   echo '<script>location.href="main"</script>';
}
          
           exit();
    }
?>

                <!--==============================================-->
                <div id="disaster_info_exit">
                  <br>
                  <p style="color:black">
                     Consumer Protection Rules<br>
                     Exit Policy
                     E-Employee Exit Policy (T&amp;C) and (F&amp;F Process) Read all terms and condition carefully before exit.<br>
                     ------------------------------------------------------------------------<br>
                     <span style="color: red;font-family: cursive;">
                     <b>ध्यान दे : - अगर आप इस आवेदन पत्र को सबमिट करते हैं, तो आपका खाता ऑटोमैटिक  डिलीट हो जायेगा और आप अपना खाता लॉगिन या उपयोग नहीं कर पाएंगे और कंपनी भी आपका अकाउंट चालू नहीं कर पायेगी </b><br>
                     <b>Note: - If you submit this application, then your account will be automatically deleted and you will not be able to login or use your account and the company will also not be able to start your account.</b><br></span>
                     ---------------------------------------------------------------------------<br>
                     Team<br>
                     Pushpendra Group Varanasi<br>
                     Mobile No.+91 9118723203<br>
                     Zone - 1 - Upendra Nath Pandey - +91 9415395230<br>
                     Zone - 3,4, Adarsh pandey - +91 8840972300<br>
                  </p>
                  <br>
                  <p style="color: red;font-weight: 600">Note - Click below button for Exit Policy application form...</p>
                  <center>
                     <p>   <button type="button" onclick="disaster_show_exit();" class="btn btn-primary">Continue</button> </p>
                  </center>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
