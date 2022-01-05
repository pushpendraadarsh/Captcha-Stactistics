<script type="text/javascript">
         $(document).ready(function(){
            //$(':input').live('focus',function(){
          // $('.dataTables_filter input').attr('autocomplete', 'off');
          $(".dataTables_filter input").val('Search...');
            //});
          });
      </script>
  <script>
      $(function(){
        'use strict'

        if($('.az-iconbar .nav-link.active').length) {
          var targ = $('.az-iconbar .nav-link.active').attr('href');
          $(targ).addClass('show');

          if(window.matchMedia('(min-width: 1200px)').matches) {
            $('.az-iconbar-aside').addClass('show');
          }

          if(window.matchMedia('(min-width: 992px)').matches &&
            window.matchMedia('(max-width: 1199px)').matches) {
              $('.az-iconbar .nav-link.active').removeClass('active');
          }
        }

        $('.az-iconbar .nav-link').on('click', function(e){
          e.preventDefault();

          $(this).addClass('active');
          $(this).siblings().removeClass('active');

          $('.az-iconbar-aside').addClass('show');

          var targ = $(this).attr('href');
          $(targ).addClass('show');
          $(targ).siblings().removeClass('show');
        });

        $('.az-iconbar-body .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().addClass('show');
          $(this).parent().siblings().removeClass('show');
        });

        $('.az-iconbar-toggle-menu').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('.az-iconbar .nav-link.active').removeClass('active');
            $('.az-iconbar-aside').removeClass('show');
          } else {
            $('body').removeClass('az-iconbar-show');
          }
        })

        $('#azIconbarShow').on('click', function(e){
          e.preventDefault();
          $('body').toggleClass('az-iconbar-show');
        });


        $.plot('#flotChart2', [{
            data: flotSampleData1,
            color: '#969dab'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
          yaxis: { show: false },
          xaxis: { show: false }
        });


        // Mini Bar charts
        $('.peity-bar').peity('bar');
      });
    </script>
    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('.az-sidebar').toggle();
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        
        
         


                
        /* ----------------------------------- */
        /* Dashboard content */

        $.plot('#flotChart1', [{
            data: flotSampleData5,
            color: '#8039f4'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 10,
            markings: [{ color: '#70737c', lineWidth: 1, font: {color: '#000'}, xaxis: { from: 75, to: 75} }]
          },
          yaxis: { show: false },
          xaxis: {
            show: true,
            position: 'top',
            color: 'rgba(102,16,242,.1)',
            reserveSpace: false,
            ticks: [[15,'1h'],[35,'1d'],[55,'1w'],[75,'1m'],[95,'3m'], [115,'1y']],
            font: {
              size: 10,
              weight: '500',
              family: 'Roboto, sans-serif',
              color: '#999'
            }
          }
        });

        $.plot('#flotChart2', [{
            data: flotSampleData2,
            color: '#007bff'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 10,
            markings: [{ color: '#70737c', lineWidth: 1, font: {color: '#000'}, xaxis: { from: 75, to: 75} }]
          },
          yaxis: { show: false },
          xaxis: {
            show: true,
            position: 'top',
            color: 'rgba(102,16,242,.1)',
            reserveSpace: false,
            ticks: [[15,'1h'],[35,'1d'],[55,'1w'],[75,'1m'],[95,'3m'], [115,'1y']],
            font: {
              size: 10,
              weight: '500',
              family: 'Roboto, sans-serif',
              color: '#999'
            }
          }
        });

        $.plot('#flotChart3', [{
            data: flotSampleData5,
            color: '#00cccc'
          }], {
          series: {
            shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.5 } ] }
            }
          },
          grid: {
            borderWidth: 0,
            labelMargin: 10,
            markings: [{ color: '#70737c', lineWidth: 1, font: {color: '#000'}, xaxis: { from: 75, to: 75} }]
          },
          yaxis: { show: false },
          xaxis: {
            show: true,
            position: 'top',
            color: 'rgba(102,16,242,.1)',
            reserveSpace: false,
            ticks: [[15,'1h'],[35,'1d'],[55,'1w'],[75,'1m'],[95,'3m'], [115,'1y']],
            font: {
              size: 10,
              weight: '500',
              family: 'Roboto, sans-serif',
              color: '#999'
            }
          }
        });

        $.plot('#flotPie', [
          { label: 'Total Available Amount', data: [[1,<?php echo $balance*100; ?>]], color: '#6f42c1'},
          { label: 'overall', data: [[1,<?php echo $overall_money*100; ?>]], color: '#007bff'},
          { label: 'test', data: [[1,0]], color: '#00cccc'},
          { label: 'Total Payout Amount', data: [[1,<?php echo $payout*100; ?>]], color: '#969dab'}
        ], {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 3/4,
                formatter: labelFormatter
              }
            }
          },
          legend: { show: false }
        });

            

        function labelFormatter(label, series) {
          return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%</div>';
        }

        var ctx6 = document.getElementById('chartStacked1');
        new Chart(ctx6, {
          type: 'bar',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              data: [10, 24, 20, 25, 35, 50, 20, 30, 28, 33, 45, 65],
              backgroundColor: '#6610f2',
              borderWidth: 1,
              fill: true
            },{
              data: [20, 30, 28, 33, 45, 65, 25, 35, 50, 20, 30, 28],
              backgroundColor: '#00cccc',
              borderWidth: 1,
              fill: true
            }]
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
                labels: {
                  display: false
                }
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true,
                  fontSize: 11
                }
              }],
              xAxes: [{
                barPercentage: 0.4,
                ticks: {
                  fontSize: 11
                }
              }]
            }
          }
        });
    // Mini Bar charts
        $('.peity-bar').peity('bar');
      });
    </script>

 

<!-- //@ popup start online sewa from -->
<div class="modal fade" id="exampleMcascodalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E4095">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Online Sewa Request From (T&C)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="ddc_model_form">
        <form method="post" action="main">
          <div class="alert alert-success alert-dismissible" id="SUCESS" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc">Work Title</label>
            <input type="text" class="form-control" name="work_title" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc">Work Detail</label>
            <textarea class="form-control" name="work_detail" required="">
      </textarea>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc">Work Type</label>
            <input type="text" class="form-control" name="work_type" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc"> Work Purpose</label>
            <input type="text" class="form-control" name="work_purpose" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc">GST no(Optional)</label>
            <input type="text" class="form-control" id="gst_ddc" name="company_gst">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc">Name</label>
            <input type="text" class="form-control" name="full_name" value="<?php echo $fname; ?> <?php echo $lname; ?>" readonly=''>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ddc">UserName</label>
            <input type="text" class="form-control" name="sewa_eid" value="<?php echo $eid; ?>" readonly=''>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="ddc">Email-ID</label>
            <input type="text" class="form-control" name="email_id" value="<?php echo $email; ?>" readonly=''>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="ddc">Contact Number</label>
            <input type="text" class="form-control" name="contact_no" value="<?php echo $phone; ?>" readonly=''>
          </div>
          <div class="form-group">
            <label for="inputState" class="ddc">Initial Amount</label>
            <select class="form-control" required="" name="initial_amount">
              <option value="">Choose...</option>
              <option value="10">Ten rupees only(For Security Charge)</option>
              <option value="100">Hundred rupees only(Normal Work)</option>
              <option value="200">Two Hundred rupees only(Recommended For Pan card)</option>
              <option value="150 lakh">One Hundred fifty rupees only</option>
              <option value="15000">15K rupees only</option>
              <option value="20000">20K rupees only</option>
            </select>
            <span style="color: red;display: none" id="initial_business_amount_danger"><strong>Sorry!</strong> Please Select Initial Amount</span>

          </div>
          <div class="form-check ddc">
            <input type="checkbox" name="terms" class="form-check-input" value="agree" required="">
            <label class="form-check-label" style="color: black" for="exampleCheck1">i accept all the terms and conditions</label>
          </div>
          <br>
          <center><br><button type="submit" class="btn btn-primary" name="submit_sewa">Submit</button></center>
        </form>
      </div>
      <div class="modal-footer" style="background-color: #3E4095">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--==============================================================================================-->
<?php
if (isset($_POST['submit_sewa'])) {
  $work_title = $_POST['work_title'];
  $work_detail = $_POST['work_detail'];
  $work_type = $_POST['work_type'];
  $work_purpose = $_POST['work_purpose'];
  $full_name = $_POST['full_name'];
  $sewa_eid = $_POST['sewa_eid'];
  $email_id = $_POST['email_id'];
  $contact_no = $_POST['contact_no'];
  $initial_amount = $_POST['initial_amount'];
  $deducted_amount = $balance - $initial_amount;
  $terms = $_POST['terms'];
  $time_stamp = $ydate;

  $query = "INSERT INTO online_seva(work_title,work_detail,work_type,work_purpose,full_name,eid,email_id,contact_no,initial_amount,terms,time_stamp) VALUES ('$work_title','$work_detail','$work_type','$work_purpose','$full_name','$sewa_eid','$email_id','$contact_no','$initial_amount','$terms','$time_stamp')";

  $query_balance = "UPDATE balance SET balance = '$deducted_amount' WHERE eid = '$eid'";

  $query_check_balance = mysqli_query($conn, $query_balance);
  $query_check = mysqli_query($conn, $query);
  if ($query_check) {
    //echo '<script></script>';
    echo '<script>
var a = "Your Request Successfully Inserted!!";
document.getElementById("SUCESS").innerHTML = a ;
</script>';
  } else {
    echo '<script>location.href="main"</script>';
  }

  exit();
}
?>

<!--=================================================================================================-->


<div class="modal fade" id="pendingMOdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E4095">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">D.D.C Request From Pending (T&C)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:red;font-size:20px"><strong>Sorry</strong> Your D.D.C Request Form is Already in Pending</p>
      </div>
      <div class="modal-footer" style="background-color: #3E4095">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="rejectMOdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E4095">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">D.D.C Request From Rejected </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:red;font-size:20px"><strong></strong></p>
      </div>
      <div class="modal-footer" style="background-color: #3E4095">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <a href="https://www.oxiinc.com/customers/Rejected_request_again_ddc">
          <button type="button" class="btn btn-primary">Send Request Again</button>
        </a>
      </div>
    </div>
  </div>
</div>

  </main>
