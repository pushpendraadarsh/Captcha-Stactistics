<?php 
include '../../config/database.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['eid']|| $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['insert'] == 1) {
  /**********************GET DATA*************************/
    $time_stamp = date("d-m-Y H:i:s"); 
    $eid= $_POST['eid'];
    $eid= $_GET['eid'];

    /******************************************************/
          /*****PAYOUT DETAIL FROM*****/
   $sql_earningpay = "SELECT * FROM payout WHERE eid='$eid' ORDER BY id DESC";
$earningsql1 = mysqli_query($conn, $sql_earningpay);
$resultcheck1 = mysqli_num_rows($earningsql1);
$check2= mysqli_fetch_assoc($earningsql1);
$payout_date= $check2['payout_id'];
/*************************************************************/
  


              /*****EARNING DETAIL TO*****/
   $sql_earning = "SELECT MAX(id) as id_data FROM earning WHERE eid='$eid'";
$earningsql = mysqli_query($conn, $sql_earning);
$resultcheck = mysqli_num_rows($earningsql);
$check= mysqli_fetch_assoc($earningsql);
$today= $check['id_data'];
/*************************************************************/
/*********************EARNING DETAIL**************/
$data_for_earning= "SELECT SUM(earning) AS earning_sum_p
FROM earning
WHERE eid= '$eid' and id between '$payout_date' and '$today'";
$report89= mysqli_query($conn,$data_for_earning);
$data_fetch= mysqli_fetch_assoc($report89);
$final_earning= $data_fetch['earning_sum_p'];
/************************************************************* */
/****************************CHECK REQUEST*********************/
    $sql_u = "SELECT * FROM payment_request WHERE eid='$eid'";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        echo "Sorry... Your Request already Sent!!";
    }
 /*********************************INSERT DATA SQL TABLE******************/
    elseif ($final_earning >= 1 ){
$query = "INSERT INTO payment_request(eid, event,f_earning,r_from,r_to,time_stamp) VALUES ('$eid','request','$final_earning','$payout_date','$today','$time_stamp')";
$query_check = mysqli_query($conn,$query);
if ($query_check) {
   echo "Your Request Successfully Inserted!!";
}
else {
echo "SOMETHING WENT WRONG ):";
}
}
else{
      echo "Sorry.. Your Money Is Not Enough To Make Payment!! $ $final_earning";
    }

/***************************************/
  }//if
else {
  echo "Please Enter Detail To Process Your Data.";
}
?></p>