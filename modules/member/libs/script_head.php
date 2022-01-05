


    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
<!-- Main JS -->
   
   
    <script type="text/javascript">
      var testimonialSlider = new Swiper('.team-slider__container', {
        slidesPerView : 4,
        slidesPerGroup: 1,
        loop: true,
        speed: 1000,
        spaceBetween : 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination-2',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            1499:{
                slidesPerView : 4
            },
            1199:{
                slidesPerView : 4
            },

            991:{
                slidesPerView : 2
            },

            767:{
                slidesPerView : 1

            },

            575:{
                slidesPerView : 1
            }
        }
    });
      $(function() {
    var Accordion = function(el, multiple) {
      this.el = el || {};
      this.multiple = multiple || false;

      // Variables privadas
      var links = this.el.find('.link');
      // Evento
      links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
      var $el = e.data.el;
        $this = $(this),
        $next = $this.next();

      $next.slideToggle();
      $this.parent().toggleClass('open');

      if (!e.data.multiple) {
        $el.find('.sideMenuSubmenu').not($next).slideUp().parent().removeClass('open');
        
      };
    } 

    var accordion = new Accordion($('#sideMenuAccordion'), false);
    var accordion = new Accordion($('#sideMenuAccordion1'), false);
  });

$( document ).ready(function() {
    var featureSlider = new Swiper('.feature-slider__container', {
        slidesPerView : 1,
        spaceBetween : 30,
        loop: true,
        speed: 1000,
        effect: "fade",
        pagination: {
            el: '.swiper-pagination-1',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            767:{
                autoHeight: true, //enable auto height

            },
            575:{
                autoHeight: true, //enable auto height
            }
        }
    });
});
      var $demoOption = $('.demo-option-container')


    $('.quick-option').on('click', function (e) {
        e.preventDefault(),
            function () {
                $demoOption.toggleClass('open')
            }()
    });
      $(document).ready(function(){
        $("#information_page_model").modal('show');
    });
    </script>
    <script type="text/javascript">
      var featureSlider = new Swiper('.feature-slider__container', {
        slidesPerView : 1,
        spaceBetween : 30,
        loop: true,
        speed: 1000,
        effect: "fade",
        pagination: {
            el: '.swiper-pagination-1',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            767
                autoHeight: true, //enable auto height

            },
            575
                autoHeight: true, //enable auto height
            }
        }
    });
    </script>
    <script type="text/javascript">
       $("#mobile-menu-trigger").on('click', function(){
        $("#mobile-menu-overlay").addClass("active");
        $body.addClass('no-overflow');
    });
    
    $("#mobile-menu-close-trigger").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    $(".offcanvas-navigation--onepage ul li a").on('click', function(){
        $("#mobile-menu-overlay").removeClass("active");
        $body.removeClass('no-overflow');
    });
    
    /*Close When Click Outside*/
    $body.on('click', function(e){
        var $target = e.target;
        if (!$($target).is('.mobile-menu-overlay__inner') && !$($target).parents().is('.mobile-menu-overlay__inner') && !$($target).is('#mobile-menu-trigger') && !$($target).is('#mobile-menu-trigger i')){
            $("#mobile-menu-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
        
        if (!$($target).is('.page-oppen-off-sidebar__inner') && !$($target).parents().is('.page-oppen-off-sidebar__inner') && !$($target).is('#open-off-sidebar-trigger') && !$($target).is('#mobile-menu-trigger i')){
            $("#page-oppen-off-sidebar-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
        
        if (!$($target).is('.search-overlay__inner') && !$($target).parents().is('.search-overlay__inner') && !$($target).is('#search-overlay-trigger') && !$($target).is('#search-overlay-trigger i')){
            $("#search-overlay").removeClass("active");
            $body.removeClass('no-overflow');
        }
        if (!$($target).is('.newsletter-popup__inner') && !$($target).parents().is('.newsletter-popup__inner') ){
            $("#newsletter-popup").removeClass("active");
        }
    });
    </script>
    <script>
var x = document.getElementById("user_location");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
function showPosition(position) {
  var latlong =position.coords.latitude +","+ position.coords.longitude;
  $('#user_location').attr('value',latlong);
}
</script>
    <script type="text/javascript">
       function validate_user_login_otp(ele) {
        var hasError=0;
        var username_email= jQuery("#username_email_otp").val()
        var password_user= jQuery("#password_otp").val()
        var otp_id= jQuery("#otp_id").val()
        var otp= jQuery("#otp").val()
        if (otp =='') {
         $("#verification_otp").css("display","block");
         return false;
        }
        if (otp !='') {
         $("#verification_otp").css("display","none");
        }
        if(hasError==1){
        return false;
        }else{
        var account = {};
        account.forget = {};
        account.forget.username_email = jQuery("#username_email_otp").val();
        account.forget.password_user = jQuery("#password_otp").val();
        account.forget.otp_id = jQuery("#otp_id").val();
        account.forget.otp = jQuery("#otp").val();
        account.forget.user_location = jQuery("#user_location").val();

        var q = JSON.stringify(account);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/newlogin/otp_verfication_login",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='3'){ // Success
                  jQuery("#account_block_div").html("");
                  jQuery("#account_block_div").html(res.msg);
                }
                else if(res.status=='2')
                {
                   jQuery(ele).find('.validate_user_login_alert_danger_otp').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger_otp').css('display','block').html(res.msg);
                }else if(res.status=='1')
                {
                  jQuery(ele).find('.validate_user_login_alert_danger_otp').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_success_otp').css('display','block').html(res.msg);
                  window.location.href="";
                }else if (res.status=='4') {
                  jQuery("#account_block_div").html("");
                  jQuery("#account_block_div").html(res.msg);
                }
                else
                { // Failed
                    jQuery(ele).find('.validate_user_login_alert_danger_otp').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger_otp').css('display','block').html(res.msg); 
                }
            }
        });
    }
        return false;
      }
      function validate_user_login(ele) {
    var hasError=0;
    var username_email= jQuery("#username_email").val()
    var password_user= jQuery("#password_user").val()
    if (username_email =='') {
      $("#validate_username_email").css("display","block");
      return false;
    }
    if (username_email !='') {
      $("#validate_username_email").css("display","none");
    }
    if (password_user =='') {
      $("#validate_password_user").css("display","block");
      return false;
    }
    if (password_user !='') {
      $("#validate_password_user").css("display","none");
    }
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username_email = jQuery("#username_email").val();
        account.forget.password_user = jQuery("#password_user").val();
        account.forget.user_location = jQuery("#user_location").val();

        var q = JSON.stringify(account);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/newlogin/verfication_login",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='3'){ // Success
                  jQuery("#account_block_div").html("");
                  jQuery("#account_block_div").html(res.msg);
                }
                else if(res.status=='2')
                {
                   jQuery(ele).find('.validate_user_login_alert_danger').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger').css('display','block').html(res.msg);
                }else if(res.status=='1')
                {
                  jQuery(ele).find('.validate_user_login_alert_danger').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_success').css('display','block').html(res.msg);
                  window.location.href="";
                }else if (res.status=='4') {
                  jQuery("#account_block_div").html("");
                  jQuery("#account_block_div").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.validate_user_login_alert_danger').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger').css('display','block').html(res.msg); 
                }
            }
        });
    }
    return false;
      }
    </script>
    <script>

      function password_function(ele){
        // alert('new_password');
      var hasError=0;
    var new_password= jQuery("#new_password").val()
    var conform_password= jQuery("#conform_password").val()
    var email_id_password= jQuery("#email_id_password").val()

    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.new_password = jQuery("#new_password").val();
        account.forget.conform_password = jQuery("#conform_password").val();
        account.forget.email_id_password = jQuery("#email_id_password").val();

        var q = JSON.stringify(account);
        //   alert(q);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/login/Insert_new_password_forget",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
              // alert(res);
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                   // window.location.href="Otp_verfication/";
                   // window.location.href=res.phone;
                   location.href="https://www.oxiinc.com/Home/Otp_verfication/"+res.phone;
                   // window.location.href=res.email;
                }else if(res.status=='3')
                {
                  window.location.href="";
                }else
                { // Failed
                  alert(res.msg);
                }
            }
        });
    }
    return false;
  }
      function otp_function(ele){
        // alert();
      var hasError=0;
    var otp_get_data= jQuery("#otp_get_data").val()
    var phone_no_id= jQuery("#phone_no_id").val()
    var email_id_id= jQuery("#email_id_id").val()

    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.otp = jQuery("#otp_get_data").val();
        account.forget.phone_id = jQuery("#phone_no_id").val();
        account.forget.email_id = jQuery("#email_id_id").val();

        var q = JSON.stringify(account);
         // alert(q);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/login/get_otp_data",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
              // alert(res);
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                   // window.location.href="Otp_verfication/";
                   // window.location.href=res.phone;
                   location.href="https://www.oxiinc.com/Home/Otp_verfication/"+res.phone;
                   // window.location.href=res.email;
                }else if(res.status=='3')
                {
                  jQuery("#sales_report").html("");
                  jQuery("#sales_report").html(res.msg);
                }else
                { // Failed
                  alert(res.msg);
                }
            }
        });
    }
    return false;
  }

function validate_admin_login(ele){
    var hasError=0;
    
    var userinfoforgetpassword= jQuery("#userinfoforgetpassword").val();
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.usernameinfo = jQuery("#userinfoforgetpassword").val();

        var q = JSON.stringify(account);
         // alert(q);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/login/forget_password_by_info",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
              // alert(res);
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                   // window.location.href="Otp_verfication/";
                   // window.location.href=res.phone;
                   location.href="https://www.oxiinc.com/Home/Otp_verfication/"+res.phone;
                   // window.location.href=res.email;
                }else if(res.status=='3')
                {
                  jQuery("#sales_report").html("");
                  jQuery("#sales_report").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.alert-success').css('display','none'); 
                    jQuery(ele).find('.alert-danger').css('display','block').html(res.msg); 
                }
            }
        });
    }
    return false;
}
</script>
<script>
    $(window, document, undefined).ready(function() {

        $('input').blur(function() {
            var $this = $(this);
            if ($this.val())
                $this.addClass('used');
            else
                $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

            var $this = $(this);
            var $offset = $this.parent().offset();
            var $circle = $this.find('.ripplesCircle');

            var x = e.pageX - $offset.left;
            var y = e.pageY - $offset.top;

            $circle.css({
                top: y + 'px',
                left: x + 'px'
            });

            $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
            $(this).removeClass('is-active');
        });

    });
</script>
<script>
    // WOW Animation
    new WOW().init();
</script>

  <script>
    /* ===================================
        Left Drawer - Lokpal Section 
    =======================================*/

    function openSwipe() {
      document.getElementById("lokpalSwipe").style.width = "250px";
      document.getElementById("askLokpal_img").style.left = "250px";
    }

    function closeSwipe() {
      document.getElementById("lokpalSwipe").style.width = "0";
      document.getElementById("askLokpal_img").style.left = "0px";
    }
    
  </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f562259f0e7167d000e11b8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->