<script>
            $(document).ready(function(){

                $("#txt_aid").keyup(function(){

                    var aid = $(this).val().trim();
            
                    if(aid != ''){
            
                       
            
                        $.ajax({
                            url: 'aid.php',
                            type: 'post',
                            data: {aid: aid},
                            success: function(response){
                
                                $('#aid_response').html(response);
                
                             }
                        });
                    }else{
                        $("#aid_response").html("");
                    }
            
                });

            });
        </script>

<script>
function goBack() {
  window.history.back();
}
</script>

<script>
            $(document).ready(function(){

                $("#txt_username").keyup(function(){

                    var username = $(this).val().trim();
            
                    if(username != ''){
            
                       
            
                        $.ajax({
                            url: 'ajaxfile.php',
                            type: 'post',
                            data: {username: username},
                            success: function(response){
                
                                $('#uname_response').html(response);
                
                             }
                        });
                    }else{
                        $("#uname_response").html("");
                    }
            
                });

            });
        </script>

<script>
            $(document).ready(function(){

                $("#txt_email").keyup(function(){

                    var email = $(this).val().trim();
            
                    if(email != ''){
            
                       
            
                        $.ajax({
                            url: 'emailfile.php',
                            type: 'post',
                            data: {email: email},
                            success: function(response){
                
                                $('#email_response').html(response);
                
                             }
                        });
                    }else{
                        $("#email_response").html("");
                    }
            
                });

            });
        </script>
        