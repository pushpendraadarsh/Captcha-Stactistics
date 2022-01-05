<?php 
include '../config/database.php';
if (isset($_POST['register'])) {
    $event = $_POST['event'];
    $time_stamp = date("d-m-Y H:i:s"); 
    $eid= $_POST['eidi'];
          /*****PAYOUT DETAIL*****/
   $sql_earningpay = "SELECT * FROM payout WHERE eid='$eid' ORDER BY id DESC";
$earningsql1 = mysqli_query($conn, $sql_earningpay);
$resultcheck1 = mysqli_num_rows($earningsql1);
$check2= mysqli_fetch_assoc($earningsql1);
$payout_date= $check2['payout_id'];
/*************************************************************/
              /*****EARNING DETAIL*****/
   $sql_earning = "SELECT MAX(id) as id_data FROM earning WHERE eid='$eid'";
$earningsql = mysqli_query($conn, $sql_earning);
$resultcheck = mysqli_num_rows($earningsql);
$check= mysqli_fetch_assoc($earningsql);
$today= $check['id_data'];
/*************************************************************/

  
$data_for_earning= "SELECT SUM(earning) AS earning_sum_p
FROM earning
WHERE eid= '$eid' and id between '$payout_date' and '$today'";
$report89= mysqli_query($conn,$data_for_earning);
$data_fetch= mysqli_fetch_assoc($report89);
$final_earning= $data_fetch['earning_sum_p'];
/************************************************************* */

    $sql_u = "SELECT * FROM payment_request WHERE eid='$eid'";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        $name_error = "Sorry... Your Request already Sent!!";
    } elseif ($final_earning <= 1 ) {
      $name_error = "Sorry.. Your Money Is Not Enough To Make Payment!! $ $final_earning";
    }
    else{
$query = "INSERT INTO payment_request(eid, event,f_earning,r_from,r_to,time_stamp) VALUES ('$eid','$event','$final_earning','$payout_date','$today','$time_stamp')";
$query_check = mysqli_query($conn,$query);
if ($query_check) {
   $sucess= "Your Request Successfully Inserted!!";
    echo '<script>location.href="/modules/member/request_payment"</script>';
} else {
   echo '<script>location.href="/modules/member/request_payment"</script>';
}
           exit();
    }
  }
?>