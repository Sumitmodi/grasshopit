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
            echo '<p class="success">Total companies inserted : '.$inserted.'</p>';
        }
        if(isset($updated)){
            echo '<p class="success">Total companies updated : '.$updated.'</p>';
        }
    ?>
    <?php if (!isset($counts)) { ?>
        <p class="error">OOPS ! Companies have not been added till date.</p>
        <p class="content">
            <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=add" class="submit">
                Add a Company
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
        <p class="content">Total number of companies added till date: 
            <span class="highlight"><?php echo $counts['total'];?></span>
        </p>
        <p class="content">Count of total number of companies added is shown below.</p>
        <ul class="form">
        <?php 
            foreach($counts as $k => $v){
                if($k == 'total' || (int)$v == 0)
                    continue;
        ?>   
            <li>Name starting with: <?php echo ucfirst($k)?> (
                <a href="<?php echo (int)$v == 0 ? "javascript:void(0)" : '/'.DOMAIN.'/superadmin/?tab=company&target=view&source=tab&alpha='.$k;?>" class="simulator">
                    <span class="count" title="Browse">
            <?php echo (int)$v;?>
                </span>)
                </a>
                <a href="<?php echo (int)$v == 0 ? "javascript:void(0)" : '/'.DOMAIN.'/superadmin/?tab=company&target=view&source=tab&alpha='.$k;?>" class="simulator">
                <span class="highlight">Browse</span>
                </a>
            </li>
        <?php
            }
        ?>
        </ul>
     <?php } ?> 
        <p class="content">
            <a href='javascript:void(0);' class="file submit">Import file</a>
            <span class="highlight">Bulk update the database</span>
        </p>
        <div class="form">
            <form class="loginform" action="/<?php echo DOMAIN;?>/superadmin/?tab=company&target=add&file=true" method="post" enctype="multipart/form-data">
                <ul class="form">
                    <li>
                        <input type="file" name="file" class="file" accept=".csv"/>
                        <a href="javascript:void(0);" data-href="file" class="simulator">Select any *.csv File</a>
                        <span class="preview highlight"></span>
                        <p class="content">
                            Max Size: <?php echo ini_get('post_max_size') < ini_get('upload_max_filesize') ? ini_get('post_max_size') : ini_get('upload_max_filesize');?>
                        </p>
                    </li>
                    <li>
                        <p class="content">The CSV file contains details in the following order:</p>
                        <input type="radio" name="package" value="1"/>
                        <span class="highlight">Name, Address, City</span>
                    </li>
                    <li>
                        <input type="radio" name="package" value="2"/>
                        <span class="highlight">Name, Address, City, Telephone</span>
                    </li>
                    <li>
                        <input type="radio" name="package" value="3"/>
                        <span class="highlight">Name, Address, City, Telephone, Email</span>
                    </li>
                    <li>
                        <input type="radio" name="package" value="4"/>
                        <span class="highlight">Name, State, City,Address, Telephone, Website,Postal Code</span>
                    </li>
                    <li>
                        <input type="checkbox" name="setting" value="1"/>
                        <span class="highlight">Replace any company that has already been added with the same name</span>
                    </li>
                    <li><input type="submit" class="submit" value="Go"/></li>
                </ul>
            </form>
        </div>
    <?php } ?>
</div>