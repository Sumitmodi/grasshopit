<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */
?>

<div id="page-content">
    <div class="result"></div>
    <span class="highlight">Change Password</span>
    <form role="form"  action="" method="post" class="contactform loginform pchange">

        <div class="form-group">
            <input type="password" id="exampleInputEmail1" placeholder="Your current password" name="pass_old" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" id="exampleInputEmail1" placeholder="Enter new Password" name="pass_1" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" id="exampleInputEmail1" placeholder="New Password Again" name="pass_2" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Save"/>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('form').submit(function () {
            $.ajax({
                url: document.URL,
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    var data = JSON.parse(data);
                    console.log(data.message);
                    $('div.result').html(data.message);
                }
            });
            return false;
        });
    });
</script>
<!--
<script>
    $(document).ready(function(){
        var transmit = new Object();
        $('form.pchange').submit(function(e){
            e.preventDefault();
            transmit.type = 'account'
            transmit.key = 'password';
            transmit.value_old = $('input[name=pass_old]').val();
            transmit.value = $('input[name=pass_1]').val();
            transmit.value_re = $('input[name=pass_2]').val()       
            if(transmit.value=='' || transmit.value_old=='' || transmit.value_re==''){               
                    $('div.result').html('<p class="error">Password Fields Cannot be Empty.</p> ');               
                return false;
            }
            if(transmit.value != transmit.value_re){
                    $('div.result').html('<p class="error">New passwords do not match.</p> ');
                return false;
            }
            if(transmit.value.length < 5){
                    $('div.result').html('<p class="error">New Password length must be at least 5 characters.</p> ');
                return false;
            }            
            if(transmit.value_old == transmit.value){
                    $('div.result').html('<p class="error">Your new password is same as your old. Try different one.</p> ');
                return false;
            }
            pleaseWait();
            $.post('business/dashboard/ajax',transmit,function(data){
                waitOver();
                if(data!=='success'){
                        $('div.result').html('<p class="error">Your current password is wrong. Try again.</p> ');
                } else {
                        $('div.result').html('<p class="success">Successfully changed the password.</p> ');
                }
            })
        })
    })
</script>
-->
