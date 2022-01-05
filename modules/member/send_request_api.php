<?php
include("../../config/database.php");
if (isset($_POST['send'])) {
    $eid = $_POST['eid'];
    $time_stamp = date("d-m-Y H:i:s");
    $message = ' ';
    //Random No For Token No.
    $slot1= date("dmYHis");
    $random_digit= 'gpay'. $slot1;
    /*****PAYOUT DETAIL*****/
    /***************************************/
    $sql_earningpay = "SELECT * FROM payout WHERE eid='$eid' ORDER BY id DESC";
    $earningsql1 = mysqli_query($conn, $sql_earningpay);
    $resultcheck1 = mysqli_num_rows($earningsql1);
    $check2 = mysqli_fetch_assoc($earningsql1);
    $payout_date = $check2['payout_id'];
    /*************************************************************/
    /*****EARNING DETAIL*****/
    /***************************************/
    $sql_earning = "SELECT MAX(id) as id_data FROM earning WHERE eid='$eid'";
    $earningsql = mysqli_query($conn, $sql_earning);
    $resultcheck = mysqli_num_rows($earningsql);
    $check = mysqli_fetch_assoc($earningsql);
    $today = $check['id_data'];
    /*************************************************************/


    $data_for_earning = "SELECT SUM(earning) AS earning_sum_p
FROM earning
WHERE eid= '$eid' and id between '$payout_date' and '$today'";
    $report89 = mysqli_query($conn, $data_for_earning);
    $data_fetch = mysqli_fetch_assoc($report89);
    $final_earning = $data_fetch['earning_sum_p'];
    /************************************************************* */

    $sql_u = "SELECT * FROM payment_request WHERE eid='$eid'";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
        $message = "already Sent!!";
    } elseif ($final_earning <= 1) {
        $message = "not Completed Due To Not Enough balance To Make Payment Request!! $ $final_earning";
    } else {
        $query = "INSERT INTO payment_request(eid, event,f_earning,r_from,r_to,token_no,time_stamp) VALUES ('$eid','request','$final_earning','$payout_date','$today','$random_digit','$time_stamp')";
        $query_check = mysqli_query($conn, $query);
        if ($query_check) {
            $message = "Successfully Generated!!";
        } else {
            echo '<script>location.href="request_payment"</script>';
        }
    } ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Request Payout</title>
        <script type="text/javascript">
            var count = 05; // Timer
            var redirect = "request_payment"; // Target URL

            function countDown() {
                var timer = document.getElementById("timer"); // Timer ID
                if (count > 0) {
                    count--;
                    timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = redirect;
                }
            }
        </script>
        <style>
        .timer{
            font-size: 20px;
            color: red;
            margin: auto;
        }
        </style>
    </head>

    <body>
        <h1>Your Request Status</h1>
         
        <p style="font-size: 30px; text-align:center; color:blueviolet;">Your Request Is <?php echo $message ?></p><br>
        <p style="font-size: 30px; text-align:center; color:blueviolet;">Your Request No<br><b><?php echo $random_digit; ?></b></p>
        <div class="timer">
            <div>Redirect To main page</div>
            <p id="timer" class="timer">
                <script type="text/javascript">
                    countDown();
                </script>
            </p>
        </div>
    </body>

    </html>
<?php
    exit();
} else {
    echo '<script>location.href="request_payment"</script>';
}
?>