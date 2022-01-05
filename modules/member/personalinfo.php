
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

    $sql = "SELECT * FROM bank_detail WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {

    $bank_name= ucfirst($row['bank_name']);
    $holder= strtoupper($row['account_holder_name']);
    $account_no= ucfirst($row['account_no']);
    $accountvarity= strtoupper($row['account_type']);
    $ifsc= strtoupper($row['ifsc_code']);
    $branch= strtoupper($row['branch']);
}

    $sql = "SELECT * FROM document WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {

    $aadhar_card= $row['aadhar_card'];
    $pancard= $row['pan_card'];
    $passbook_detail= $row['bank_detail'];
}

$sql = "SELECT * FROM nominee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
      $nomineenamefirst= strtoupper($row['fname']);
      $nomineenamemiddle= strtoupper($row['mname']);
      $nomineenamelast= strtoupper($row['lname']);
      $nomineedob= ucfirst($row['dob']);
      $nomineeemail= ucfirst($row['email']);
      $nomineephone= ucfirst($row['phone']);
      $nomineerelation= strtoupper($row['relation']);
}


    $sql = "SELECT * FROM employee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $fname= strtoupper($row['fname']);
            $lname = strtoupper($row['lname']);
            $placement = $row['placement'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $phone_coated = $row['phone_coated'];
            $email = $row['email'];
            $email_coated = $row['email_coated'];
            $join_date = $row['join_date'];
            $sub_id = $row['sub_id'];
            $expiry_date = $row['expiry_date'];
            $position = strtoupper($row['position']);
            $address = strtoupper($row['address']);
            $occupation = strtoupper($row['occupation']);
            $image = $row['image'];
            $last_seen = $row['last_seen'];
            $registration_date = $row['registration_date'];
            $aid = $row['aid'];
            $pan_no = strtoupper($row['pan_no']);
            $aadhar_no = ucfirst($row['aadhar_no']);
            $blood_group = strtoupper($row['blood_group']);
            $city = strtoupper($row['city']);
            $state = strtoupper($row['state']);
            $country = strtoupper($row['country']);
            $pin_code = ucfirst($row['pin_code']);
            $status = $row['status'];
      }
    if($status == 'yes' || $status == 'Yes') {
        ?>
<!--================================================HEADER=================================-->
<?php include 'libs/header.php';?>
<!--============================================END HEADER===========================================-->
<!--=============================================EARNING DETAIL===========================-->
    <?php include 'libs/personalinfo.php';?>   
<!--==================================================END EARNING DETAIL=========================-->    
          <!--==========================================================================================-->

          <!--=======================================================================================-->
 <!--==========================================================================================-->
<?php include 'libs/footer.php';?>

          <!--=======================================================================================-->
                
 <!--==========================================================================================-->
<?php include 'libs/exit_policy.php';?>

<!--=======================================================================================-->
  
  <!-- Pop up -->

    <script src="../../assets/6/js/jquery/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/6/ionicons/ionicons.js"></script>
    <script src="../../assets/6/jquery.flot/jquery.flot.js"></script>
    <script src="../../assets/6/jquery.flot/jquery.flot.pie.js"></script>
    <script src="../../assets/6/jquery.flot/jquery.flot.resize.js"></script>
    <script src="../../assets/6/chart.js/Chart.bundle.min.js"></script>
  <script src="../../assets/6/peity/jquery.peity.min.js"></script>

    <script src="../../assets/js/azia.js"></script>
    <script src="../../assets/js/chart.flot.sampledata.js"></script>
    <script src="../../assets/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/dataTables.dataTables.min.js"></script>
    <script src="../../assets/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/js/responsive.dataTables.min.js"></script>
    
<script type="text/javascript">
  function showsome() {
            alert("To Update Details Kindly Contact Your Leader or Proposer.");
        }
</script>
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