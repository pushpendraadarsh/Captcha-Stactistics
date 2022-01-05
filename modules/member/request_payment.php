<?php

/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */
session_start();
//if ($_GET['type'] == 'admin') {
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    include("../../config/database.php");
    $id = $_SESSION['id'];
    $eid = $_SESSION['username'];
    $date = date("d/m/Y");
    $sql = "SELECT * FROM doller_rate WHERE id = '1'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($row = mysqli_fetch_assoc($result)) {
      $rate_doller = ucfirst($row['rate']);
    }
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
      $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      header('HTTP/1.1 301 Moved Permanently');
      header('Location: ' . $location);
      exit;
    }
    /*  notification COUNT    */
    $sql_find_batch = "SELECT count(title) AS title FROM notification";
    $sql_find_batch_get = mysqli_query($conn, $sql_find_batch);
    $notification = mysqli_fetch_assoc($sql_find_batch_get);
    /*END*/
    $sql = "SELECT * FROM payout WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($row = mysqli_fetch_assoc($result)) {
      $user_payout = ucfirst($row['payout']);
    }
    $sql_app = "SELECT * FROM payment_request WHERE eid='$eid'";
    $res_app = mysqli_query($conn, $sql_app);
    $resultcheck = mysqli_num_rows($res_app);
    $row2 = mysqli_fetch_assoc($res_app);
    $request_no= $row2['token_no'];

    $sql = "SELECT * FROM employee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($row = mysqli_fetch_assoc($result)) {
      $fname = ucfirst($row['fname']);
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
    $sql = "SELECT * FROM bank_detail WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($row = mysqli_fetch_assoc($result)) {
      $account_eid = $row['eid'];
      $bank_name = ucfirst($row['bank_name']);
      $holder = strtoupper($row['account_holder_name']);
      $account_no = ucfirst($row['account_no']);
      $accountvarity = strtoupper($row['account_type']);
      $ifsc = strtoupper($row['ifsc_code']);
      $branch = strtoupper($row['branch']);
      $account_status = strtoupper($row['account_status']);
    }


    $ydate = date("d-m-Y H:i:s");
    $day = date("l");

    if ($account_eid == $eid) {
?>

      <!-- <?php
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
            ?>-->
      <!--================================================HEADER=================================-->
      <?php include 'libs/header.php'; ?>
      <!--============================================END HEADER===========================================-->
      <style type="text/css">
        .pending_container {
          height: auto;
          background-color: red;
          display: block;
        }

        .active {
          height: 100px;
          width: 100px;
        }
      </style>

      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Payment Request</h5>
          </div>
<?php  
if ($request_no == ''){ 
?>
          <!--========================payment request======================================-->
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">

                <form method="post" action="send_request_api">
                  <div class="form_error">
                    <div>

                      <span style="color: red;">
                      </span>
                    </div>

                    <div>
                      <span style="color: green;"> </span>
                      <div>

                        <div>
                          <input type="hidden" name="eid" value="<?php echo $eid ?>">
                          <input type="text" class="form-control" placeholder="Event" value="<?php echo $holder; ?>" readonly>
                        </div>
                        <div>
                          <input type="text" class="form-control" placeholder="Event" value="<?php echo $bank_name; ?>" readonly>
                        </div>
                        <div>
                          <input type="text" class="form-control" placeholder="Event" value="<?php echo $account_no; ?>" readonly>
                        </div>
                        <div>
                          <input type="text" class="form-control" placeholder="Event" value="<?php echo $accountvarity; ?>" readonly>
                        </div>
                        <div>
                          <input type="text" class="form-control" placeholder="Event" value="<?php echo $ifsc; ?>" readonly>
                        </div>

                        <div>
                          <button type="submit" class="btn btn-primary" name="send">Send Request</button>
                        </div>
                </form>
              </div>
              </div>
              </div>
              <?php } else{ ?>
                <div class="modal-header" style="background-color: lightgreen;">
                <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px pink;" id="message_data">Your Currently Request</h5>
              </div>
    
              <div class="pending_container">
                <img class="active" src="https://i.pinimg.com/originals/c5/46/8b/c5468b3a6c846040e0f66e507c976e43.gif">You Have Already Requested for Payment and transaction no. is <span style="color: red; background-color: lightgreen;"><?php echo $request_no; ?></span>
              </div>
              <?php } ?>

              <!--==========================================================================================-->
              <?php include 'libs/footer.php'; ?>

              <!--=======================================================================================-->

              <!--==========================================================================================-->
              <?php include 'libs/exit_policy.php'; ?>
              <?php include 'libs/go_goa.php'; ?>
              <?php include 'libs/extra_last.php'; ?>
              <!--=======================================================================================-->

              <!-- Pop up -->
              <script src="/assets/js/bootstrap.bundle.min.js"></script>
              <script src="/assets/6/ionicons/ionicons.js"></script>
              <script src="/assets/6/jquery.flot/jquery.flot.js"></script>
              <script src="/assets/6/jquery.flot/jquery.flot.pie.js"></script>
              <script src="/assets/6/jquery.flot/jquery.flot.resize.js"></script>
              <script src="/assets/6/chart.js/Chart.bundle.min.js"></script>
              <script src="/assets/6/peity/jquery.peity.min.js"></script>

              <script src="/assets/js/azia.js"></script>
              <script src="/assets/js/chart.flot.sampledata.js"></script>
              <script src="/assets/js/jquery.dataTables.min.js"></script>
              <script src="/assets/js/dataTables.dataTables.min.js"></script>
              <script src="/assets/js/dataTables.responsive.min.js"></script>
              <script src="/assets/js/responsive.dataTables.min.js"></script>

              <!--==================================mainpart======================================-->
              <?php include 'libs/main_part.php'; ?>
              <!--================================================================================--->

              </html>
          <?php
        } else {
          header("Location: ../../index.php");
        }
      } else {
        header("Location: ../../index.php");
      } ?>
  <!-- <? /* } else { ?>
          <!DOCTYPE html>
          <html>

          <head>
            <title>Testing</title>
          </head>

          <body>
            <center>
              <p style="font-size: 70px; color: red; background-color: yellow;">
                Page Under Maintainance.
                <a href="main">Back</a>
              </p>
            </center>
          </body>

          </html>
        <?php
      }
       */ ?> -->