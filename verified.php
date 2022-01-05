<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */

include("config/database.php");
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id = $_SESSION['id'];
    $eid = $_SESSION['username'];
    $date = date("d/m/Y");
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
            $joining = $row['joining'];
      }

      $ydate = date('Y-m-d');
$day = date("l");

    if($joining == 'yes' || $joining == 'Yes') {
        ?>
        <!DOCTYPE html>
<html>
<head>
	<title>Verified user</title>
    <style type="text/css">
        main button {
  font-family: "Fontdiner Swanky", cursive;
  font-size: 1rem;
  color: #383838;
  border: none;
  background-color: #f36a6f;
  padding: 1rem 2.5rem;
  transform: skew(-5deg);
  transition: all 0.1s ease;
  cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4424790/cursors-eye.png"), auto;
}
* {
  box-sizing: 0;
  margin: 0;
  padding: 0;
  cursor: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4424790/cursors-edge.png"), auto;
}
.container{
  width: 100vw;
  border: 5px solid red;
  padding: 2px;
  margin: 2px 2px 2px 2px;
}
    </style>
</head>
<body>
    <main>
<?php
include 'modules/member/libs/header.php';
?>
<div class="container">
<center><p> New Employee Welcome Letter</p></center>
<br>
Dear <?php echo $fname . ' ' . $lname ?>,<br/><br/>
 Welcome to Recaptcha Goolgle LLC and the Captcha Typers team! I am pleased you are joining us as a Employee. As you might imagine, your role is crucial in helping us both meet and maintain the goals of our department and our company as a whole. I’m certain your skill set, unique experience, recent education, etc. will support you within your new professional endeavor.
 
Enclosed you will find the final documents and access links necessary to complete the rest of your onboarding process. Please complete these by before <?php echo $expiry_date; ?>.
 
We are all here to support you as you transition into your new role. Do not hesitate to call on any of us should you have questions or comments.
 
I’m looking forward to your success here at PuShPeNdRa GrOuP.
 
Here’s to a wonderful partnership together!
<br/>
<b>
Your Security Money Are Paid Sucessfully Recieved In our Team.
Security Money Are 500rs.
Transaction No."93fg7895dehbfwerbf522frewfnweRHWN"
</b> 
<br>
Regard,
<br>
CEO<br>
[GOOGLE Recaptcha].
</div>
<?php
include 'modules/member/libs/footer.php';
?>
</main>
</body>

</html>
 <?php
    }else{
        ?>
        <h1>Your account is Not Activated or Verified. kindly contact Admin for further.</h1>
        <?php
    }
}else{
    header("Location: /");
}

?>