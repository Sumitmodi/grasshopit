<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */
?>
<div class="page-content">

    <div class='result'></div>
    <form role="form"  action="." method="post" class="contactform loginform">
        <div class="form-group">
            <p>Current Username : <span><?php echo $username ?></span></p>
            <h3>Change Username</h3>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1"  name="username" placeholder="Enter New Username">
        </div>
        <div class="form-group">

            <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Enter Current Password">
        </div>
        <p class="dynamic"></p>
        <input type="submit" class="btn btn-success change" value="Save">
    </form>
</div>

<script>
    $(document).ready(function () {
        var oval = '<?php echo $username; ?>';
        $('input[name=username]').focus(function () {
            $('div.result').html('');
        })
        $('input[name=username]').focusout(function () {
            $('input[type=submit]').attr('disabled', 'disabled');
            var val = $(this).val();
            if (val == '') {
                return false;
            }
            if (val == oval) {
                $('div.result').html('<p class="error">New username is same as the old username.</p>');
                return false;
            }
            if (val.length < 5) {
                $('div.result').html('<p class="error">Username must be at least 5 characters long.</p>');
                return false;
            }
            var string = '<input type="hidden" name="ignore" value="' + oval + '"/>';
            string = string + '<input type="hidden" name="action" value="check"/>';
            $('p.dynamic').html(string);
            pleaseWait();
            $.ajax({
                url: document.URL,
                type: 'POST',
                data: $('form').serialize(),
                success: function (data) {
                    waitOver();
                    $('span.hint').html(data);
                    $('input[type=submit]').removeAttr('disabled');
                },
                failure: function (data) {
                    $('span.hint').html(data);
                }
            });
        });
        $('form').submit(function (e) {
            e.preventDefault();
            var val = $('input[name=username]').val();
            if (val == '') {
                return false;
            }
            if (val == oval) {
                $('div.result').html('<p class="error">New username is same as the old username.</p>');
                return false;
            }
            if (val.length < 5) {
                $('div.result').html('<p class="error">Username must be at least 5 characters long.</p>');
                return false;
            }
            var string = '<input type="hidden" name="action" value="change"/>';
            $('p.dynamic').html(string);
            //alert('how are you?');
            pleaseWait();
            $.ajax({
                url: document.URL,
                type: 'POST',
                data: $('form').serialize(),
                success: function (data) {
                    waitOver();
                    $('div.result').html(data);
                },
                failure: function (data) {
                    $('div.result').html(data);
                }
            });
        });
    })
</script>