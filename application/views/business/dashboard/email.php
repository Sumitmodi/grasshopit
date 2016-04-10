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
    <form action="" class="contactform loginform" method="post">
    
        <div class="form-group">
            <span class="black">Current E-mail Id : </span>
            <span class="highlight"><?php echo $email?></span>
        
        <div class="form-group">
            <span class="highlight" >Change Email</span>
        </div>
        <div class="form-group">
             <input type="text" name="email" class="form-control" placeholder="Enter new Email" required>
        </div>
        <div class="form-group">
           <input type="password" name="password" class="form-control" placeholder="Enter your current password" required/> 
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Change">
        </div>
    </ul>
    </form>
    <p class="content">
        <span class="red">Note: </span>
        The new Email will need to be verified again. So, Please make sure that there is a need to change the email.
    </p>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        $('form').submit(function () {
            $.ajax({
                url: document.URL,
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {       
                    console.log(data);
                    $('div.result').html(data);
                }
            });
            return false;
        });
    });
</script>