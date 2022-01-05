//start
$('document').ready(function() { 
// form autocomplete off    
    $(":input").attr('autocomplete', 'off');

    // remove box shadow from all text input
    $(":input").css('box-shadow', 'none');


// calling validate function
$("#registration_btn").click(function() {
      var response =  validateForm();
      // if form validation fails     
      if(response == 0) {
        return;
      }
      // getting all form data
     var eid =   $("#eid").val();
//ajax data start
    $.ajax({    
    type : 'post',
    url  : 'https://google-statistics-pgroup.rf.gd/api_data/payment_request/data.api',
    data : {
      'eid' : eid,
      'insert' : 1,
    },
    // before ajax request
        beforeSend: function() {
          $("#registration_btn").html("Please wait..");
        },  
    
// on success response
        success:function(response) {
          $("#message_data").html(response);
},

// error response
        error:function(e) {
          $("#message_data").html("Some error encountered.");
        }

      });//ajax data start
    });// calling validate function


});//start