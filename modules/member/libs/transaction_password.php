<!--=====================================transaction password===================================-->
  <div class="payout_otp_form" >
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
                  <input type="password" class="form-control" id="otp_transaction_password_id" name="otp_epanelist" placeholder="Enter Your Transaction Password " style="border:2px solid #3E4095" required="">
                  <span style="display:none;color:red;margin-top: 10px;" id="otp_error_mess_transaction_password" class="otp_error_mess">Please enter valid Transaction Password.</span>
              </div>
          </div>
          <div class="lasttransaction_password">
            
          </div>
          <div class="col-sm-3">
              <button type="submit" onclick="checkotp_transaction_password('19893','19910');" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white;    width: 100%; "> SUBMIT</button>
          </div>
          </div>
        </div>
        <div class="modal-footer" style="background-color: #3E4095"></div>
      </div>
      </div>
      </div>
    </div>
<!--===============================end transaction password=============================================-->