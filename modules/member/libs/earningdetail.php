<div class="az-content az-content-dashboard">
      <div class="container-fluid">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            
              <h2 class="az-dashboard-title">Hi, <?php echo $fname . " " . $lname ?> !(<?php echo $position; ?>)</h2>
             
            <style type="text/css">
            	.head_item{
            		max-width: 100vw;
            		width: 100vw;
            	}
            </style>
<!--=========================================================================================================-->
            <div class="az-content-header-right">

              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6> <?php if($join_date == '' || $join_date == '') { ?>
                                        Nil
                                 <?php } else { ?>

                        <?php echo $join_date; ?>

                        <?php } ?></h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>Expiry Date</label>
                  <h6>
                                            <?php if($expiry_date == '' || $expiry_date == '') { ?>
                      Nil
                        <?php } else { ?>
                        <?php echo $expiry_date; ?>                                                    
                                              </h6><?php } ?>
                </div><!-- media-body -->
              </div><!-- media -->
              <!--<div class="media">
                <div class="media-body">
                  <label>Event Category</label>
                  <h6>All Categories</h6>
                </div>
              </div> media -->
              <!-- <a href="#" class="btn btn-purple">Export</a> -->
            </div>
          </div>
          <!-- az-dashboard-one-title -->

<div class="az-dashboard-nav"> 
          </div>
      
        </td>
        </tr>
      </table>
        </form>
          <div class="row row-sm mg-b-20">
            <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-body card-dashboard-fifteen">
                            <h1 id="today_earning">₹00</h1>
              <label class="tx-purple">TODAY EARNING</label>
              <div id=""></div>
              <div class="chart-wrapper">
                <div id="flotChart1" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card card-body card-dashboard-fifteen">
                            <h1>₹.0.00</h1>
              <label class="tx-primary">ID 2 EARNING</label>
              
              <div class="chart-wrapper">
                <div id="flotChart2" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-20 mg-lg-t-0">
            <div class="card card-body card-dashboard-fifteen">
                            <h1>₹.0.00</h1>
              <label class="tx-teal">ID 3 EARNING</label>
              
              <div class="chart-wrapper">
                <div id="flotChart3" class="flot-chart"></div>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->

      <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-20 mg-lg-t-0">
            <div class="card card-body card-dashboard-fifteen pb-10">
              <h6>Support Ticket &nbsp; <span class="right btn btn-purple" ><a href="support_ticket" style="color: white">Know More</a></span></h6>
        <div class="card-body custom-body1 padding0px">
          <div class="chart">
          <div class="col-12 padding0px">Dear Employee , You Have <?php echo $support_ticket_query['support_ticket_count']; ?>
          Support Ticket Are Currently Inserted.
          </div>
          </div>
        </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->


      <div class="col-xl-6 mg-t-15 mg-t-20">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title tx-14 mg-b-5">Work Statistics</h6>
                <p class="tx-gray-600 mg-b-0">Work Statics Which is shows what your earnings it is important to monitor your Work satisfaction</p>
              </div><!-- card-header -->


              <div class="card-body row pd-40">
                <div class="col-sm-8 col-md-7">
                  <div id="flotPie" class="wd-100p ht-200"></div>
                </div><!-- col -->


                <div class="col-sm-4 col-md-5 mg-t-30 mg-sm-t-0">
                  <ul class="list-unstyled">
                    <li class="d-flex align-items-center"><span class="d-inline-block wd-10 ht-10 bg-purple mg-r-10"></span> Total Available Balance</li>
                   <!-- <li class="d-flex align-items-center mg-t-5"><span class="d-inline-block wd-10 ht-10 bg-primary mg-r-10"></span> ID 2</li>
                    <li class="d-flex align-items-center mg-t-5"><span class="d-inline-block wd-10 ht-10 bg-teal mg-r-10"></span> ID 3</li>-->
                    <li class="d-flex align-items-center mg-t-5"><span class="d-inline-block wd-10 ht-10 bg-gray-500 mg-r-10"></span> Total Paid Balance</li>
                  </ul>
                </div><!-- col -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->


      <div class="col-md-3 mg-t-20 mg-t-20">
        <div class="card card-dashboard-finance mg-b-20">
                  <h6 class="card-title">Online Sewa Work</h6>
                  <span class="peity-bar" data-peity='{ "fill": ["#3366ff"], "height": 27, "width": 70 }'>1,2,5,0,0,0,9,0,7,0,4,3</span>
                                    <h2><?php echo $sql_find_batch_total['work_title'];?></h2>
                                  </div>

        <div class="card card-dashboard-finance mg-t-20" style="background-color: yellow;">
                  <h6 class="card-title tx-36-f" style="color: red; font-weight: bolder;">Today 1$ RATE</h6>
                  <!--<span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 27, "width": 70 }'>7,5,9,10,1,4,4,7,5,10,4,4</span>-->
                                  <big>  <h2 class="tx-32-f" style=" color: blue;">1$ = ₹<?php echo $rate_doller; ?></h2></big>
                  
                </div>
           </div><!-- col -->
      
      <div class="col-md-3 mg-t-20">
              <div class="card card-dashboard-fourteen">
                <label class="az-content-label">Total Available Balance</label>
                <div class="card-body">
                                    <h1>₹ <?php echo $earning_money; ?></h1>
                  <div class="row mg-t-15">
                    <div class="col-12">
                                           <h4>₹ <?php if ($payout == '0' || $payout == '') {
                                           	echo '0.00';
                                           }else {
                                           echo $payout;
                                            } ?></h4></p>
                      <span>Total Paid in Bank</span>
                      <div class="progress mg-t-5 m-t-20 ht-5">
                        <div class="progress-bar wd-80p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <!-- <small>80% of your goals</small> -->
                    </div><!-- col -->
          <div style="clear:both; height:30px;">&nbsp;</div>
                    <div class="col-12">
                    <?php  if ($balance == '') { ?>
                      <h4>$ 0.0</h4>
                 <?php   }else { ?>
                                            <h4>$<?php echo $balance ?></h4>
                   <?php } ?>
                      <span>Total Available Balance</span>
                      <!--<div class="progress mg-t-5 ht-5">
                        <div class="progress-bar wd-50p bg-teal" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>-->
                      <!-- <small>50% of your goals</small> -->
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
