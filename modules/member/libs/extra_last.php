<!--===================transaction password=======================-->
<div class="payout_otp_form">
  <div class="modal fade modal-newspaper" id="otp_transaction_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
          <h4 style="text-align: center;margin-top: 10px;color: white;font-size: 18px">Enter Your Transaction Password.</h4>
          <button class="close close_box" style="top: 5PX !important;padding: 0px 0px !important;" data-dismiss="modal" aria-label="Close"><img src="images/cross.png" width="30px"></button>
        </div>
        <div class="modal-body" style="">
          <div class="row" style="margin-top: 15px;">
            <div class="col-sm-9">
              <div class="form-group">
                <form method="POST" enctype="multipart/form-data">

                  <input class="form-control" type="password" required="" placeholder="Enter Your Transaction Password" name="tpassword" style="border:2px solid #3E4095">

                  <!--<input type="password" class="form-control" id="otp_transaction_password_id" name="otp_epanelist" placeholder="Enter Your Transaction Password " style="border:2px solid #3E4095" required="">-->

                  <span style="display:none;color:red;margin-top: 10px;" class="otp_error_mess">Please enter valid Transaction Password.</span>
              </div>
            </div>
            <div class="lasttransaction_password">
            </div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white; width: 100%;" name="tpassword_submit">SUBMIT</button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer" style="background-color: #3E4095"></div>
      </div>
    </div>
  </div>
</div>
<!--===============================end transaction password=============================================-->

<!--====================================================script detail add======================================-->

<script type="text/javascript">
  function disaster_show_exit() {
    $('#disaster_from_exit').css('display', 'block');
    $('#disaster_info_exit').css('display', 'none');
  }
</script>

<script>
  var<?php
      $get_batch_information = "SELECT * FROM earning WHERE eid='$eid' and date_u = '$date'";
      $get_batch_information_query = mysqli_query($conn, $get_batch_information);
      while ($rwo = mysqli_fetch_assoc($get_batch_information_query)) { ?>

  x = <?php echo ($rwo['earning']) ?>;
  <?php } ?>
  var final = Math.round(x * <?php echo $rate_doller; ?> * 100) / 100;
  document.getElementById("today_earning").innerHTML = "₹" + final;
</script>

<!--===============================================================================================================-->