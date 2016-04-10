<?php
/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 5:43:21 PM
 * File     :   dashboard.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */
?>
<script type="text/javascript">
    $(document).ready(function(){        
        $('a.simulator').click(function(){
            var inp = $(this).attr('data-href');
            $('input.'+inp).trigger('click');
            return true;
        });
        $('a.file').click(function(){
            $('div.form').css('display','block'); 
        });
        $('input[type=file]').change(function(){
            $('span.preview').html('Currently selected file : '+$(this).val());
        });
    })
</script>
<div class="right-content">
    <?php
        if(isset($inserted)){
            echo '<p class="success">Total Reviews inserted : '.$inserted.'</p>';
        }
        if(isset($updated)){
            echo '<p class="success">Total Reviews updated : '.$updated.'</p>';
        }
    ?>
    <?php if (!isset($counts)) { ?>
        <p class="error">OOPS ! Reviews have not been added till date.</p>
        <p class="content">
            <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=reviews&target=add" class="submit">
                Add a Reviews
            </a>
        </p>
        <p class="content">or,</p>
        <p class="content">
            <a href='javascript:void(0);' class="file submit">Import file</a>
        </p>
        <div class="form">
            <form class="loginform" action="<?php echo DOMAIN;?>/superadmin/?tab=company&target=add&file=true" method="post" enctype="multipart/form-data">
                <ul class="form">
                    <li>
                        <input type="file" name="file" class="file" accept=".csv"/>
                        <a href="javascript:void(0);" data-href="file" class="simulator">Select any *.csv File</a>
                        <p class="content">
                            Max Size: <?php echo ini_get('post_max_size') < ini_get('upload_max_filesize') ? ini_get('post_max_size') : ini_get('upload_max_filesize');?>
                        </p>
                    </li>
                    <li><input type="submit" class="submit" value="Go"/></li>
                </ul>
            </form>
        </div>
    <?php } else { if(is_array($counts)){ ?> 
        <p class="content">Total number of reviews show under 3  rating: 
            <span class="highlight"><?php echo $counts['total'];?></span>
        </p>
        <p class="content">Count of total number of reviews added is shown below.</p>
        <ul class="form">
        <?php 
            foreach($counts as $k => $v){
                if($k == 'total' || (int)$v == 0)
                    continue;
        ?>   
            <li>Name starting with: <?php echo ucfirst($k)?> (
                <a href="<?php echo (int)$v == 0 ? "javascript:void(0)" : '/'.DOMAIN.'/superadmin/?tab=reviews&target=view&source=tab&alpha='.$k;?>" class="simulator">
                    <span class="count" title="Browse">
            <?php echo (int)$v;?>
                </span>)
                </a>
                <a href="<?php echo (int)$v == 0 ? "javascript:void(0)" : '/'.DOMAIN.'/superadmin/?tab=reviews&target=view&source=tab&alpha='.$k;?>" class="simulator">
                <span class="highlight">Browse</span>
                </a>
            </li>
        <?php
            }
        ?>
        </ul>
     <?php } ?> 
   
       
    <?php } ?>
</div>