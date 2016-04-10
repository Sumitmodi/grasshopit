<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/16/14 1:59 PM
 * File     :   missing.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
?>
<section>
    <div class="inner-wrap">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-8 col-md-8">
                    <h2 id="business-heading">Error Occurred While processing the payment</h2>
                    <div class="business-left">
                        <div class="form-group">    
                            <?php foreach($params as $p){ if(empty($p)) continue; ?>
                            <label><?php echo $p['MESSAGE'];?></label>
                            <?php } ?>
                        </div>
                    </div>
                    <h5>Click <a href="<?php echo @$_SERVER['HTTP_REFERER'] ?>">here</a> to return to the previous page or <a href="/<?php echo DOMAIN."/login?type=business" ?>">CONTINUE</a> with trial account. </h5>
                </div>
            </div>
        </div>
    </div>
</section> 